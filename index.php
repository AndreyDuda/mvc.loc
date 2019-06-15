<?php

// Settings for application
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include system`s files
define('ROOT', dirname(__FILE__));

require_once ROOT . '/components/Router.php';

// Run router

$router = new Router();
$router->run();
