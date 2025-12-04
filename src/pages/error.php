<!DOCTYPE html>
<html lang="de">
<head>
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/src/php/boot.php';
        include COMPONENTS_PATH . 'head.php';

        $status = isset($_GET['code']) ? (int)$_GET['code'] : 500; 
        http_response_code($status);
        $message = 'Ein Fehler ist aufgetreten';

        switch ($status) {
            case 404:
                $message = 'Seite nicht gefunden';
                break;
            case 403:
                $message = 'Zugriff verweigert';
                break;
            case 500:
                $message = 'Interner Serverfehler';
                break;
        }
    ?>

    <meta name="robots" content="noindex, nofollow">
    <link rel="canonical" href="https://websich.de/error?code=<?php echo $status; ?>">

    <title>Fehler <?php echo $status; ?></title>

    <!-- Lottie Web -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>

</head>

<body>

<?php
    include COMPONENTS_PATH . 'header.php';
    include COMPONENTS_PATH . 'cookie.php';
?>
<main>
    <section id="error-page">
        <div id="animation" style=""></div>
        <h1>Fehler <?php echo $status; ?></h1>
        <p><?php echo $message; ?></p>
        <button aria-label="Zurück zur Startseite" onclick="location.href='/'" class="primary-btn">Zurück zur Startseite</button>
    </section>

</main>

<script>
  const animation = lottie.loadAnimation({
    container: document.getElementById('animation'),
    renderer: 'svg',
    loop: true, 
    autoplay: true, 
    path: '/assets/lottie/error.json'
  });
</script>

<?php
    include COMPONENTS_PATH . 'footer.php';
?>
    
</body>
</html>