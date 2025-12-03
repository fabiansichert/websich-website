// =======================
// Analytics & Calendly
// =======================

// GA einmal definieren
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
window.gtag = gtag; // global verfügbar

function initAnalytics() {
    gtag('consent', 'update', { ad_storage: 'denied', analytics_storage: 'granted' });
    gtag('js', new Date());
    gtag('config', 'G-PZ8LVJ3ECX', { 'anonymize_ip': true });
}

function initCalendly() {
    const calendlyButtons = document.getElementsByClassName("calendlyButton");

    for (let i = 0; i < calendlyButtons.length; i++) {
        const oldBtn = calendlyButtons[i];
        const newBtn = oldBtn.cloneNode(true); // Button ohne alte Events klonen
        oldBtn.parentNode.replaceChild(newBtn, oldBtn);

        newBtn.addEventListener("click", function(e) {
            e.preventDefault();

            // 🔥 GA4 Tracking Event
            gtag('event', 'click_termin_button', {
                event_category: 'interaktionen',
                event_label: 'calendly_button',
                value: 1,
            });

            // Calendly Popup
            Calendly.initPopupWidget({
                url: 'https://calendly.com/websich/erstgespraech/'
            });
        });
    }
}

function loadExternalScripts() {
    // GA Script
    let ga = document.createElement("script");
    ga.src = "https://www.googletagmanager.com/gtag/js?id=G-PZ8LVJ3ECX";
    ga.async = true;
    document.head.appendChild(ga);

    // Calendly Script
    let cal = document.createElement("script");
    cal.src = "https://assets.calendly.com/assets/external/widget.js";
    cal.async = true;
    document.head.appendChild(cal);

    // Calendly CSS
    let calCss = document.createElement("link");
    calCss.rel = "stylesheet";
    calCss.href = "https://assets.calendly.com/assets/external/widget.css";
    document.head.appendChild(calCss);
}

// =======================
// Cookie Banner Logic
// =======================
const cookieBanner = document.getElementById('cookie-banner');
document.getElementById('accept-cookies').addEventListener('click', function() {
    cookieBanner.style.display = 'none';
    localStorage.setItem('cookiesAccepted', 'true');
    loadExternalScripts();

    setTimeout(() => {
        initAnalytics();
        initCalendly();
    }, 300);
});

document.getElementById('decline-cookies').addEventListener('click', function() {
    cookieBanner.style.display = 'none';
    localStorage.setItem('cookiesAccepted', 'false');
});

// Prüfen, ob Cookies bereits akzeptiert wurden
if (localStorage.getItem('cookiesAccepted') === 'true') {
    cookieBanner.style.display = 'none';
    loadExternalScripts();

    setTimeout(() => {
        initAnalytics();
        initCalendly();
    }, 300);
} else {

    // Cookies nicht akzeptiert oder noch nicht entschieden
    const calendlyButtons = document.getElementsByClassName("calendlyButton");
    for (let i = 0; i < calendlyButtons.length; i++) {
        const btn = calendlyButtons[i];
        const oldBtn = btn;
        const newBtn = oldBtn.cloneNode(true); // kopiert Button ohne EventListener
        oldBtn.parentNode.replaceChild(newBtn, oldBtn);
        newBtn.addEventListener("click", function() {
            window.open('https://calendly.com/websich/erstgespraech/', '_blank');
        });
    }
}