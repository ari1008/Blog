<?php
//Class utiliser
use APP\Autoloader;
// Adding new constant project root path absolute
define('ROOT_FOLDER', realpath(__DIR__ . '/../'));

require ROOT_FOLDER.'/app/Autoloader.php';

Autoloader::register();

if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p= 'home';
}
ob_start();
if ($p === 'home') {
    require ROOT_FOLDER.'/pages/home.php';
} elseif ($p === 'article') {
    require ROOT_FOLDER.'/pages/single.php';
} elseif ($p === 'categorie'){
    require ROOT_FOLDER. '/pages/categorie.php';
}
$content = ob_get_clean();
require ROOT_FOLDER.'/pages/templates/default.php';