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
// Bildwechsel
// =======================

document.addEventListener("DOMContentLoaded", () => {
  const steps = Array.from(document.querySelectorAll(".process-step"));
  const img = document.getElementById("processPreviewImg");
  if (!steps.length || !img) return;

  const setActive = (stepEl) => {
    const step = stepEl.getAttribute("data-step");
    if (!step) return;

    steps.forEach((btn) => {
      const active = btn === stepEl;
      btn.classList.toggle("is-active", active);
      btn.setAttribute("aria-selected", active ? "true" : "false");
    });

    img.src = `/assets/images/index/ablauf/${step}.webp`;
    img.alt = `Ablauf Schritt ${step}`;

    // optional: sanfter Fade
    img.classList.remove("is-swap");
    // reflow
    void img.offsetWidth;
    img.classList.add("is-swap");
  };

  steps.forEach((btn) => {
    btn.addEventListener("click", () => setActive(btn));
  });
});

// =======================
// Projektplätze
// =======================

function getQuarter(monthIndex0to11) {
  return Math.floor(monthIndex0to11 / 3) + 1; // 1..4
}

function quarterStartMonthIndex(q) {
  // Q1=Jan(0), Q2=Apr(3), Q3=Jul(6), Q4=Okt(9)
  return (q - 1) * 3;
}

function formatQuarter(q, year) {
  return `Q${q} ${year}`;
}

function formatMonthYear(monthIndex0to11, year) {
  const months = ["Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember"];
  return `${months[monthIndex0to11]} ${year}`;
}

function computeNextQuarterDisplay(now = new Date()) {
  const m = now.getMonth();
  const y = now.getFullYear();
  const currentQ = getQuarter(m);

  let displayQ = currentQ + 1;
  let displayYear = y;

  if (displayQ === 5) {
    displayQ = 1;
    displayYear = y + 1;
  }

  const startMonth = quarterStartMonthIndex(displayQ);
  const nextStartLabel = formatMonthYear(startMonth, displayYear);

  return {
    quarterLabel: formatQuarter(displayQ, displayYear),
    nextStartLabel,
  };
}

document.addEventListener("DOMContentLoaded", () => {
  const qEl = document.getElementById("ctaQuarter");
  const nextStartEl = document.getElementById("ctaNextStart");

  const slotsTextEl = document.getElementById("ctaSlotsText");
  const slotsPercentEl = document.getElementById("ctaSlotsPercent");
  const barFillEl = document.getElementById("ctaBarFill");

  if (!qEl || !nextStartEl) return;

  // 1) Datum-Logik
  const { quarterLabel, nextStartLabel } = computeNextQuarterDisplay();

  qEl.textContent = quarterLabel;
  nextStartEl.textContent = nextStartLabel;

  // 2) Plätze-Logik (dein Ziel: immer 1 frei => konstant 1/2)
  const total = 2;
  const filled = 1;
  const pct = Math.round((filled / total) * 100);

  if (slotsTextEl) slotsTextEl.textContent = `${filled} von ${total} Projektplätzen vergeben`;
  if (slotsPercentEl) slotsPercentEl.textContent = `${pct}%`;
  if (barFillEl) barFillEl.style.width = `${pct}%`;
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