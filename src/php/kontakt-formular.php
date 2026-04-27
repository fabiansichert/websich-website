<?php

header('Content-Type: application/json; charset=utf-8');

function respond(bool $success, string $message, int $statusCode = 200): void {
    http_response_code($statusCode);
    echo json_encode([
        'success' => $success,
        'message' => $message
    ]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(false, 'Ungültige Anfrage.', 405);
}

// Honeypot optional vorbereiten
if (!empty($_POST['website'])) {
    respond(false, 'Ungültige Anfrage.', 422);
}

$firstName   = trim($_POST['first_name'] ?? '');
$lastName    = trim($_POST['last_name'] ?? '');
$email       = trim($_POST['email'] ?? '');
$projectNote = trim($_POST['project_note'] ?? '');
$privacy     = isset($_POST['privacy']) ? '1' : '';

$companyType = trim($_POST['company_type'] ?? '');
$primaryGoal = trim($_POST['primary_goal'] ?? '');
$readiness   = trim($_POST['readiness'] ?? '');
$budget      = trim($_POST['budget'] ?? '');

if (
    $firstName === '' ||
    $lastName === '' ||
    $email === '' ||
    $projectNote === '' ||
    $privacy === '' ||
    $companyType === '' ||
    $primaryGoal === '' ||
    $readiness === '' ||
    $budget === ''
) {
    respond(false, 'Bitte füllen Sie alle Pflichtfelder aus.', 422);
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(false, 'Bitte geben Sie eine gültige E-Mail-Adresse ein.', 422);
}

// Schutz gegen Header Injection
$emailSafe = preg_replace("/[\r\n]+/", '', $email);

$to = 'info@websich.de';
$subject = 'Neue Eignungsanfrage über websich.de';

$message = '
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<title>Neue Eignungsanfrage</title>
<style>
body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; color: #222; }
.container { background: #ffffff; padding: 24px; border-radius: 8px; max-width: 700px; margin: 0 auto; }
h2 { margin-top: 0; }
table { width: 100%; border-collapse: collapse; }
th, td { text-align: left; padding: 10px; border-bottom: 1px solid #e5e5e5; vertical-align: top; }
th { width: 220px; background: #fafafa; }
</style>
</head>
<body>
<div class="container">
<h2>Neue Anfrage über die Eignungsprüfung</h2>
<table>
<tr><th>Vorname</th><td>' . htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . '</td></tr>
<tr><th>Nachname</th><td>' . htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '</td></tr>
<tr><th>E-Mail</th><td>' . htmlspecialchars($emailSafe, ENT_QUOTES, 'UTF-8') . '</td></tr>
<tr><th>Unternehmensart</th><td>' . htmlspecialchars($companyType, ENT_QUOTES, 'UTF-8') . '</td></tr>
<tr><th>Hauptziel</th><td>' . htmlspecialchars($primaryGoal, ENT_QUOTES, 'UTF-8') . '</td></tr>
<tr><th>Investitionsbereitschaft</th><td>' . htmlspecialchars($readiness, ENT_QUOTES, 'UTF-8') . '</td></tr>
<tr><th>Budgetrahmen</th><td>' . htmlspecialchars($budget, ENT_QUOTES, 'UTF-8') . '</td></tr>
<tr><th>Projektbeschreibung</th><td>' . nl2br(htmlspecialchars($projectNote, ENT_QUOTES, 'UTF-8')) . '</td></tr>
</table>
</div>
</body>
</html>
';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: kontakt@websich.de\r\n";
$headers .= "Reply-To: {$emailSafe}\r\n";

if (!mail($to, $subject, $message, $headers)) {
    respond(false, 'Die Anfrage konnte nicht versendet werden.', 500);
}

respond(true, 'Vielen Dank. Ihre Anfrage wurde erfolgreich übermittelt.');