<?php
use APP\Autoloader;

// Adding new constant project root path absolute
define('ROOT_FOLDER', realpath(__DIR__ . '/../'));

require ROOT_FOLDER.'/app/Autoloader.php';

Autoloader::register();
$p = $_GET['p'] ?? 'home';
ob_start();
if ($p === 'home') {
    require ROOT_FOLDER.'/pages/home.php';
} elseif ($p === 'single') {
    require ROOT_FOLDER.'/pages/single.php';
}
$content = ob_get_clean();
require ROOT_FOLDER.'/pages/templates/default.php';