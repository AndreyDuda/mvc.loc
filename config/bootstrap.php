<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once 'vendor/autoload.php';

$env = parse_ini_file('.env');
$driver = $env['DB_DRIVER'];
$host = $env['DB_HOST'];
$port = $env['DB_PORT'];
$dbName = $env['DB_DATABASE'];
$user = $env['DB_USERNAME'];
$password = $env['DB_PASSWORD'];
$isDevMode = true;


$config = Setup::createAnnotationMetadataConfiguration(array("src"), $isDevMode, null, null, false);

$connection = array(
	'dbname'   => $dbName,
	'user'     => $user,
	'password' => $password,
	'host'     => $host,
	'driver'   => $driver,
	'port'     => $port,
);

$entityManager = EntityManager::create($connection, $config);
