// =======================
// Analytics
// =======================

window.dataLayer = window.dataLayer || [];

function gtag() {
  dataLayer.push(arguments);
}

window.gtag = gtag;

function loadAnalyticsScript() {
  if (document.querySelector('script[src*="googletagmanager.com/gtag/js"]')) return;

  const ga = document.createElement("script");
  ga.src = "https://www.googletagmanager.com/gtag/js?id=G-PZ8LVJ3ECX";
  ga.async = true;
  document.head.appendChild(ga);
}

function initAnalytics() {
  gtag("consent", "update", {
    ad_storage: "denied",
    analytics_storage: "granted"
  });

  gtag("js", new Date());

  gtag("config", "G-PZ8LVJ3ECX", {
    anonymize_ip: true
  });
}


// =======================
// Cookie Banner Logic
// =======================

const cookieBanner = document.getElementById("cookie-banner");
const acceptCookies = document.getElementById("accept-cookies");
const declineCookies = document.getElementById("decline-cookies");

if (cookieBanner && acceptCookies && declineCookies) {
  acceptCookies.addEventListener("click", function () {
    cookieBanner.style.display = "none";
    localStorage.setItem("cookiesAccepted", "true");

    loadAnalyticsScript();

    setTimeout(() => {
      initAnalytics();
    }, 300);
  });

  declineCookies.addEventListener("click", function () {
    cookieBanner.style.display = "none";
    localStorage.setItem("cookiesAccepted", "false");
  });

  const cookieChoice = localStorage.getItem("cookiesAccepted");

  if (cookieChoice === "true") {
    cookieBanner.style.display = "none";

    loadAnalyticsScript();

    setTimeout(() => {
      initAnalytics();
    }, 300);
  }

  if (cookieChoice === "false") {
    cookieBanner.style.display = "none";
  }
}