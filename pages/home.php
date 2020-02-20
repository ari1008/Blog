<?php
use APP\Database;
$db = new Database('blog');
$data = $db->query('SELECT * FROM articles');