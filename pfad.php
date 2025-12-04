<?php
echo "<pre>";
echo "DOCUMENT_ROOT: " . $_SERVER['DOCUMENT_ROOT'] . "\n";
echo "realpath(DOCUMENT_ROOT): " . realpath($_SERVER['DOCUMENT_ROOT']) . "\n";

echo "\nPrüfe mögliche config-Pfade:\n";

$paths = [
    $_SERVER['DOCUMENT_ROOT'] . '/../files/config.php',
    dirname($_SERVER['DOCUMENT_ROOT']) . '/files/config.php',
    dirname(dirname($_SERVER['DOCUMENT_ROOT'])) . '/files/config.php',
];

foreach ($paths as $p) {
    echo $p . " => " . (realpath($p) ?: 'NOT FOUND') . "\n";
}
