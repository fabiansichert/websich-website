<!DOCTYPE html>
<html lang="de">
<head>
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/src/php/boot.php';
        include COMPONENTS_PATH . 'head.php';
    ?>

    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://websich.de/kontakt">

    <title>Eignung prüfen | Websich</title>
    <meta name="description" content="In einem strukturierten Erstgespräch prüfen wir, ob Ihr Unternehmen von einer Websich-Systemarchitektur profitiert. Persönliche Rückmeldung in 24h.">

    <link rel="stylesheet" href="/src/css/kontakt.css?v=1">
    <script defer src="/src/scripts/kontakt.js?v=1"></script>
</head>

<body class="kontakt-page-body">
<?php
    include COMPONENTS_PATH . 'header.php';
    include COMPONENTS_PATH . 'cookie.php';
?>

<main>
    <section id="kontakt-page">
        <div class="kontakt-shell">
            <div class="kontakt-layout" data-kontakt-flow>
                <aside class="kontakt-intro left" aria-hidden="true">
                    <div class="kontakt-intro__inner">
                        <span class="kontakt-eyebrow">100% unverbindlich · Antwort in 24h</span>
                        <h1>Prüfen Sie Ihre Eignung</h1>
                        <p>
                            In wenigen Schritten prüfen wir, ob Websich für Ihr Vorhaben der richtige Partner ist.
                            Sie erhalten eine persönliche Rückmeldung statt einer automatischen Standardantwort.
                        </p>
                        <p class="kontakt-note">
                            Fokus auf strukturierte Design- &amp; Lead-Systeme mit klarem Wachstumsanspruch.
                        </p>

                        <div class="kontakt-person">
                            <div class="kontakt-person__avatar">
                                <img src="/assets/images/index/fabian.webp" alt="Fabian Sichert" loading="lazy">
                            </div>
                            <div class="kontakt-person__meta">
                                <strong>Fabian Sichert</strong>
                                <span>System-Architekt &amp; Gründer</span>
                                <small>Persönliche Eignungsprüfung statt Massenanfrage.</small>
                            </div>
                        </div>
                    </div>
                </aside>

                <div class="kontakt-card right">
                    <div class="kontakt-card__inner">
                        <div class="kontakt-mobile-head">
                            <span class="kontakt-eyebrow">100% unverbindlich · Antwort in 24h</span>
                            <h1>Prüfen Sie Ihre Eignung</h1>
                            <p>Beantworten Sie kurz die wichtigsten Fragen und erhalten Sie eine persönliche Rückmeldung.</p>
                        </div>

                        <div class="kontakt-progress" aria-label="Formularfortschritt">
                            <span class="kontakt-progress__label" data-progress-label>Frage 1/5</span>
                            <div class="kontakt-progress__bar">
                                <span class="kontakt-progress__fill" data-progress-fill></span>
                            </div>
                        </div>

                        <form class="kontakt-form" data-kontakt-form method="post" action="/src/php/kontakt-formular.php">
                            <input type="hidden" name="company_type" value="">
                            <input type="hidden" name="primary_goal" value="">
                            <input type="hidden" name="readiness" value="">
                            <input type="hidden" name="budget" value="">
                            <input type="text" name="website" class="hp-field" tabindex="-1" autocomplete="off" aria-hidden="true">

                            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">

                            <article class="kontakt-step is-active" data-step="1">
                                <div class="kontakt-step__body">
                                    <h2>Welche Art von Unternehmen betreiben Sie?</h2>
                                    <div class="kontakt-options">
                                        <button type="button" class="kontakt-option" data-key="companyType" data-value="Agentur">Agentur</button>
                                        <button type="button" class="kontakt-option" data-key="companyType" data-value="Consulting">Consulting</button>
                                        <button type="button" class="kontakt-option" data-key="companyType" data-value="SaaS / Tech">SaaS / Tech</button>
                                        <button type="button" class="kontakt-option" data-key="companyType" data-value="Coaching">Coaching</button>
                                        <button type="button" class="kontakt-option" data-key="companyType" data-value="E-Commerce">E-Commerce</button>
                                        <button type="button" class="kontakt-option" data-key="companyType" data-value="Sonstiges">Sonstiges</button>
                                    </div>
                                </div>

                                <div class="kontakt-actions">
                                    <div class="kontakt-actions__buttons">

                                    </div>
                                </div>
                            </article>

                            <article class="kontakt-step" data-step="2">
                                <div class="kontakt-step__body">
                                    <h2>Was ist aktuell Ihr Hauptziel?</h2>
                                    <div class="kontakt-options">
                                        <button type="button" class="kontakt-option" data-key="primaryGoal" data-value="Mehr qualifizierte Anfragen">Mehr qualifizierte Anfragen</button>
                                        <button type="button" class="kontakt-option" data-key="primaryGoal" data-value="Klarere Positionierung">Klarere Positionierung</button>
                                        <button type="button" class="kontakt-option" data-key="primaryGoal" data-value="Höhere Conversion">Höhere Conversion</button>
                                        <button type="button" class="kontakt-option" data-key="primaryGoal" data-value="Premium-Repositionierung">Premium-Repositionierung</button>
                                        <button type="button" class="kontakt-option" data-key="primaryGoal" data-value="Skalierung bestehender Struktur">Skalierung bestehender Struktur</button>
                                    </div>
                                </div>

                                <div class="kontakt-actions">
                                    <div class="kontakt-actions__buttons">
                                        <button type="button" class="kontakt-back" data-action="back" aria-label="Zurück">
                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
                                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </article>

                            <article class="kontakt-step" data-step="3">
                                <div class="kontakt-step__body">
                                    <h2>Sind Sie bereit, in eine strukturierte Wachstumsarchitektur zu investieren?</h2>
                                    <div class="kontakt-options">
                                        <button type="button" class="kontakt-option" data-key="readiness" data-value="Ja, wenn die Strategie überzeugt">Ja, wenn die Strategie überzeugt</button>
                                        <button type="button" class="kontakt-option" data-key="readiness" data-value="Ja, wir planen aktiv">Ja, wir planen aktiv</button>
                                        <button type="button" class="kontakt-option" data-key="readiness" data-value="Wir prüfen Optionen">Wir prüfen Optionen</button>
                                        <button type="button" class="kontakt-option" data-key="readiness" data-value="Ich informiere mich nur">Ich informiere mich nur</button>
                                    </div>
                                </div>

                                <div class="kontakt-actions">
                                    <div class="kontakt-actions__buttons">
                                        <button type="button" class="kontakt-back" data-action="back" aria-label="Zurück">
                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
                                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </article>

                            <article class="kontakt-step" data-step="4">
                                <div class="kontakt-step__body">
                                    <h2>In welchem Rahmen planen Sie Ihr Systemprojekt?</h2>
                                    <div class="kontakt-options">
                                        <button type="button" class="kontakt-option" data-key="budget" data-value="8.000 € – 15.000 €">8.000 € – 15.000 €</button>
                                        <button type="button" class="kontakt-option" data-key="budget" data-value="15.000 € – 30.000 €">15.000 € – 30.000 €</button>
                                        <button type="button" class="kontakt-option" data-key="budget" data-value="30.000 €+">30.000 €+</button>
                                    </div>
                                </div>

                                <div class="kontakt-actions">
                                    <div class="kontakt-actions__buttons">
                                        <button type="button" class="kontakt-back" data-action="back" aria-label="Zurück">
                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
                                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </article>

                            <article class="kontakt-step kontakt-step--final" data-step="5">
                                <div class="kontakt-step__body">
                                    <h2>Fast geschafft. Wohin dürfen wir Ihre Rückmeldung senden?</h2>
                                    <div class="kontakt-fields">
                                        <div class="kontakt-field">
                                            <label for="first_name">Vorname</label>
                                            <input type="text" id="first_name" name="first_name" autocomplete="given-name" required>
                                        </div>
                                        <div class="kontakt-field">
                                            <label for="last_name">Nachname</label>
                                            <input type="text" id="last_name" name="last_name" autocomplete="family-name" required>
                                        </div>
                                        <div class="kontakt-field kontakt-field--full">
                                            <label for="email">E-Mail</label>
                                            <input type="email" id="email" name="email" autocomplete="email" required>
                                        </div>
                                        <div class="kontakt-field kontakt-field--full">
                                            <label for="project_note">Kurze Projektbeschreibung</label>
                                            <textarea id="project_note" name="project_note" placeholder="Worum geht es, wo stehen Sie aktuell und was soll das System für Sie leisten?" required></textarea>
                                        </div>
                                        <div class="kontakt-checkbox">
                                            <input type="checkbox" id="privacy" name="privacy" value="1" required>
                                            <label for="privacy">Ich habe die <a href="/datenschutz" target="_blank" rel="noopener noreferrer">Datenschutzerklärung</a> gelesen und stimme der Verarbeitung meiner Daten zur Bearbeitung meiner Anfrage zu.</label>
                                        </div>
                                        <div class="kontakt-hint" data-form-hint></div>
                                    </div>
                                </div>

                                <div class="kontakt-actions">
                                    <div class="kontakt-actions__buttons">
                                        <button type="button" class="kontakt-back" data-action="back" aria-label="Zurück">
                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
                                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                        <button type="submit" class="primary-btn kontakt-submit" data-submit-button>Eignung prüfen</button>
                                    </div>
                                </div>
                            </article>
                        </form>

                        <div class="kontakt-success" data-kontakt-success>
                            <div class="kontakt-success__box">
                                <h2>Vielen Dank für Ihre Anfrage.</h2>
                                <p>Sie erhalten innerhalb von 24 Stunden eine persönliche Eignungs-Rückmeldung.</p>
                                <p>Sollte Ihr Projekt aktuell nicht passend sein, erhalten Sie trotzdem eine ehrliche Einschätzung zum sinnvollsten nächsten Schritt.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    include COMPONENTS_PATH . 'footer.php';
?>
</body>
</html>
