<?php

// ------------------------
// 1. Projektpfade setzen
// ------------------------
define('BASE_PATH', rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/');
define('SRC_PATH', BASE_PATH . 'src/');
define('COMPONENTS_PATH', SRC_PATH . 'components/');
define('PHP_PATH', SRC_PATH . 'php/');
define('PAGES_PATH', SRC_PATH . 'pages/');