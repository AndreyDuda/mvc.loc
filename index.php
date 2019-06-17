<?php
// Include system`s files
define('ROOT', dirname(__FILE__));
define('URL_APP', ROOT . '/application/');
require_once ROOT . '/vendor/autoload.php';

use framework\components\Router;

// Settings for application
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Run router

$router = new Router();
$router->run();
