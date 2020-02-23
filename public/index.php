<?php
//Class utiliser
use APP\Autoloader;
use App\Config;
use App\App;
// Adding new constant project root path absolute
define('ROOT_FOLDER', realpath(__DIR__ . '/../'));
require ROOT_FOLDER.'/app/Autoloader.php';

Autoloader::register();

$post = App::getInstance('Post');
var_dump($post);




