<!DOCTYPE html>
<html lang="de">
<head>
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/src/php/boot.php';
        include COMPONENTS_PATH . 'head.php';
    ?>

    <meta name="robots" content="noindex, follow">
    <link rel="canonical" href="https://websich.de/cookies">

    <title>Cookies & Tracking – Websich</title>
</head>

<body>

<?php
    include COMPONENTS_PATH . 'header.php';
    include COMPONENTS_PATH . 'cookie.php';
?>

<main class="legal-page">
    <section>
        <h1>Cookies</h1>
        <p>
            Diese Website verwendet Cookies, um grundlegende Funktionen bereitzustellen und 
            um zu verstehen, wie Besucher die Seite nutzen. Sie entscheiden selbst, welche 
            Cookies Sie zulassen möchten.
        </p>

        <h2>1. Was sind Cookies?</h2>
        <p>
            Cookies sind kleine Textdateien, die auf Ihrem Gerät gespeichert werden. Sie 
            enthalten Informationen, die Ihren Browser wiedererkennbar machen oder bestimmte 
            Einstellungen speichern.
        </p>

        <h2>2. Notwendige Cookies</h2>
        <p>
            Diese Cookies sind zwingend erforderlich, damit die Website korrekt funktioniert.
            Sie speichern z. B.:
        </p>
        <ul>
            <li>Ihre Cookie-Einstellungen</li>
            <li>Security- und Session-Daten</li>
            <li>Technische Funktionen der Seite</li>
        </ul>

        <h2>3. Analyse-Cookies</h2>
        <p>
            Wenn Sie zustimmen, verwenden wir <strong>Google Analytics</strong>, um zu 
            verstehen, wie Besucher unsere Webseite nutzen. Dabei werden IP-Adressen anonymisiert.
        </p>
        <p>
            Aktiviert wird Analytics erst, wenn Sie im Cookie-Banner „Cookies akzeptieren“ wählen.
        </p>

        <h2>4. Drittanbieter-Einbindungen</h2>
        <p>
            Wenn Sie zustimmen, werden externe Dienste geladen, wie z. B.:
        </p>
        <ul>
            <li><strong>Calendly</strong> – für Terminbuchungen</li>
        </ul>
        <p>
            Ohne Ihre Zustimmung werden diese Dienste nicht aktiviert.
        </p>

        <h2>5. Cookie-Einstellungen ändern</h2>
        <p>
            Sie können Ihre Entscheidung jederzeit ändern:
        </p>
        <button id="reset-cookies" class="primary-btn">Cookie-Einstellungen zurücksetzen</button>

        <h2>6. Speicherdauer</h2>
        <p>
            Je nach Cookie-Typ variiert die Speicherdauer. Notwendige Cookies bleiben meist 
            für 30–365 Tage gespeichert.
        </p>

        <h2>7. Verantwortlicher</h2>
        <p>
            Fabian Sichert<br>
            Deutschland<br>
            E-Mail: <a href="mailto:info@websich.de">info@websich.de</a>
        </p>
    </section>
</main>

<script>
document.getElementById('reset-cookies').addEventListener('click', () => {
    localStorage.removeItem('cookiesAccepted');
    location.reload();
});
</script>


<?php
    include COMPONENTS_PATH . 'footer.php';
?>
    
</body>
</html>