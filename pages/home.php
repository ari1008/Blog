<?php
require '../app/Autoloader.php';
use Database\database;
$db = new database('blog');
$data =$db->query('SELECT * FROM articles');
var_dump($data);
