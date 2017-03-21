<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://localhost:8888/CMS-template'); // Replace the directory with the website name

$db = new PDO('mysql:host=127.0.0.1;dbname=cms','admin', 'password'); // replace dbname with the database name

require 'functions.php';
?>