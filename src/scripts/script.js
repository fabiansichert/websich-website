// =======================
// Mobile Navigation
// =======================
const hamburger = document.getElementById("hamburger");
const mobileNav = document.getElementById("mobile");
const navLinks = mobileNav.querySelectorAll("a");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  mobileNav.classList.toggle("active");
});

navLinks.forEach(link => {
  link.addEventListener("click", () => {
    mobileNav.classList.remove("active");
    hamburger.classList.remove("active");
  });
});

// =======================
// Projects Scroll Observer
// =======================
const sections = document.querySelectorAll(".project");
const tocItems = document.querySelectorAll(".toc span");

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const id = entry.target.id;
      tocItems.forEach(item => item.classList.remove("active"));
      const activeItem = document.querySelector(`.toc span[data-target="${id}"]`);
      if(activeItem) activeItem.classList.add("active");
    }
  });
}, { threshold: [0.1, 0.25, 0.5], rootMargin: "-20% 0px -40% 0px" });

sections.forEach(section => observer.observe(section));

tocItems.forEach(item => {
  item.addEventListener("click", () => {
    const target = document.getElementById(item.dataset.target);
    target.scrollIntoView({ behavior: "smooth" });
  });
});


// =======================
// Form Submit UX
// =======================
const params = new URLSearchParams(window.location.search);
const popup = document.getElementById('popup');
const popupIcon = document.getElementById('popup-icon');
const popupText = document.getElementById('popup-txt');

if (params.get('success') === 'true') {
    popup.classList.add('show', 'success');
    popupIcon.src = '/assets/icons/check.svg'; // grünes Häkchen
    popupText.textContent = 'Vielen Dank für Ihre Anfrage. Wir melden uns bald.';
    // Nach 8 Sekunden ausblenden
    setTimeout(() => popup.classList.remove('show'), 8000);
}

if (params.get('success') === 'false') {
    popup.classList.add('show', 'error');
    popupIcon.src = '/assets/icons/cross.svg'; // rotes Kreuz
    popupText.textContent = params.get('reason');
    // Nach 8 Sekunden ausblenden
    setTimeout(() => popup.classList.remove('show'), 8000);
}

// =======================
// Form Validation per Feld mit Debounce
// =======================
const form = document.querySelector('.contact-form');
const inputs = form.querySelectorAll('input[required], textarea[required]');
const submitBtn = form.querySelector('button[type="submit"]');

// Button-Style bei disabled
submitBtn.style.opacity = '0.5';
submitBtn.style.cursor = 'not-allowed';

// Debounce Funktion
function debounce(fn, delay = 700) {
    let timeout;
    return function (...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => fn.apply(this, args), delay);
    };
}

// Validierung pro Feld
function validateField(field) {
    let valid = true;
    const value = field.value.trim();
    const errorMsg = field.closest('.form-row')?.querySelector('.form-error-msg');

    switch (field.name) {
        case 'vorname':
        case 'nachname':
            valid = /^[a-zA-ZäöüÄÖÜß\- ]{1,}$/.test(value); // nur Buchstaben, mind. 1
            break;
        case 'email':
            valid = /^\S+@\S+\.\S+$/.test(value);
            break;
        case 'telefon':
            valid = /^[0-9 +()-]{3,}$/.test(value); // nur Zahlen, mind. 3 Zeichen
            break;
        case 'privacy':
            valid = field.checked;
            break;
        default:
            valid = value.length > 0;
    }

    if (errorMsg) {
        errorMsg.style.opacity = valid ? '0' : '1';
        errorMsg.style.transition = 'opacity 0.3s ease';
    }

    return valid;
}

// Prüfen ob ganzes Formular valid ist
function validateForm() {
    let allValid = true;
    inputs.forEach(input => {
        const errorMsg = input.closest('.form-row')?.querySelector('.form-error-msg');
        const visibleError = errorMsg && errorMsg.style.opacity === '1';
        if (!validateField(input) || visibleError) allValid = false;
    });

    submitBtn.disabled = !allValid;
    submitBtn.style.opacity = allValid ? '1' : '0.5';
    submitBtn.style.cursor = allValid ? 'pointer' : 'not-allowed';

    return allValid;
}

// Event Listener pro Feld mit Debounce
inputs.forEach(input => {
    const validateDebounced = debounce(() => {
        validateField(input); // nur aktuelles Feld
        validateForm();       // Button-Status prüfen
    }, 700);

    input.addEventListener('input', validateDebounced);
    if (input.type === 'checkbox') {
        input.addEventListener('change', validateDebounced);
    }
});

// Initial disable
submitBtn.disabled = true;



// =======================
// FAQ Toggle
// =======================
const faqItems = document.querySelectorAll("#faq-questions .faq-question");
faqItems.forEach(item => {
  const question = item.querySelector(".question");
  question.addEventListener("click", () => {
    item.classList.toggle("active");
  });
});

// =======================
// Footer Jahr
// =======================
document.getElementById("year").textContent = new Date().getFullYear();

// =======================
// Scroll Animation Observer
// =======================
document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll(".animate-on-scroll");
    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    elements.forEach(el => observer.observe(el));
});

// =======================
// JSON-LD OpenGraph
// =======================
function insertJSONLD() {
    const script = document.createElement('script');
    script.type = 'application/ld+json';
    script.text = JSON.stringify({
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "name": "Websich – Webdesign & SEO",
        "url": "https://websich.de",
        "description": "Premium Webdesign, Webentwicklung, SEO und IT-Security für moderne Unternehmen.",
        "image": "https://websich.de/assets/opengraph/og-image.jpg",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "DE"
        }
    });
    document.head.appendChild(script);
}
insertJSONLD();


// =======================
// reCAPTCHA v3 on-demand
// =======================
document.addEventListener("DOMContentLoaded", () => {

    submitBtn.addEventListener("click", async (e) => {

        // Wenn Formular ungültig → abbrechen
        if (submitBtn.disabled) return;

        e.preventDefault();

        await loadRecaptchaScript();

        grecaptcha.ready(async () => {
            const token = await grecaptcha.execute("6LeprhIsAAAAAGkqJca9uk0UYotEJNTuLrCgqQMt", { action: "submit" });
            document.getElementById("g-recaptcha-response").value = token;
            form.submit();
        });
    });
});

function loadRecaptchaScript() {
    return new Promise((resolve) => {
        if (window.grecaptcha) return resolve();

        const script = document.createElement("script");
        script.src = "https://www.google.com/recaptcha/api.js?render=6LeprhIsAAAAAGkqJca9uk0UYotEJNTuLrCgqQMt";
        script.async = true;
        script.defer = true;
        script.onload = resolve;

        document.head.appendChild(script);
    });
}

