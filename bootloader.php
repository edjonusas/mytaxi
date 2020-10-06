<?php

require 'vendor/autoload.php';
require 'app/config/routes.php';
require 'core/functions/html.php';
require 'core/functions/validators.php';
require 'app/functions/form/validators.php';

define('ROOT', __DIR__);
define('DB_FILE', ROOT . '\app\data\db.json');
//ini_set('error_reporting', E_ALL);
session_start();

$app = new App\App();


