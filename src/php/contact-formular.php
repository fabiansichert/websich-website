<?php

$configPath = rtrim($_SERVER['DOCUMENT_ROOT'], DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'config.php';
$configPath = realpath($configPath);

function fail($reason) {
    header("Location: /index.php?success=false&reason=$reason");
    exit;
}

if (!$configPath || !file_exists($configPath)) {
    fail('Konfigurationsdatei nicht gefunden.');
}

$config = include $configPath;
if (!is_array($config)) {
    fail('Konfigurationsdatei ist ungültig.');
}

// --- Honeypot-Feld ---
if (!empty($_POST["website"])) { fail("Bot erkannt."); }

// --- Pflichtfelder prüfen ---
$required = ["vorname","nachname","email","telefon"];
foreach ($required as $field) {
    if (empty($_POST[$field])) fail("Bitte alle Pflichtfelder ausfüllen.");
}

// --- E-Mail validieren ---
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) fail("Ungültige E-Mail-Adresse.");

// --- Telefonnummer validieren ---
if (!preg_match("/^[0-9 +()-]*$/", $_POST["telefon"])) fail("Ungültige Telefonnummer.");

// --- reCAPTCHA prüfen ---
$recaptcha_secret = $config['CAPTCHA_SECRET'] ?? null;

//TEST
//$recaptcha_secret = "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe";

$recaptcha_response = $_POST['g-recaptcha-response'] ?? '';
$recaptcha = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
$recaptcha = json_decode($recaptcha, true);
if (!$recaptcha['success'] || $recaptcha['score'] < 0.5) fail("Captcha-Überprüfung fehlgeschlagen.");

// --- E-Mail Header Injection verhindern ---
$email_safe = preg_replace("/[\r\n]/", "", $_POST["email"]);

// --- E-Mail vorbereiten ---
$to = "info@websich.de";
$subject = "Websiteformular: Neue Anfrage";
$message = '
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<title>Neue Anfrage</title>
<style>
body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
.container { background-color: #ffffff; padding: 20px; border-radius: 5px; }
h2 { color: #333333; }
table { width: 100%; border-collapse: collapse; }
th, td { text-align: left; padding: 8px; border-bottom: 1px solid #dddddd; }
th { background-color: #f2f2f2; }
</style>
</head>
<body>
<div class="container">
<h2>Neue Anfrage über das Formular auf der Webseite</h2>
<table>
<tr><th>Vorname</th><td>' . htmlspecialchars($_POST["vorname"]) . '</td></tr>
<tr><th>Nachname</th><td>' . htmlspecialchars($_POST["nachname"]) . '</td></tr>
<tr><th>Email</th><td>' . htmlspecialchars($email_safe) . '</td></tr>
<tr><th>Telefon</th><td>' . htmlspecialchars($_POST["telefon"]) . '</td></tr>
<tr><th>Nachricht</th><td>' . nl2br(htmlspecialchars($_POST["nachricht"])) . '</td></tr>
</table>
</div>
</body>
</html>
';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: kontakt@websich.de\r\n";
$headers .= "Reply-To: $email_safe\r\n";


if (mail($to, $subject, $message, $headers)) {
    header("Location: /index.php?success=true");
    exit;
} else {
    fail("E-Mail konnte nicht gesendet werden.");
}
?>
