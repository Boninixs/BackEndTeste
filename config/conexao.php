<?php

use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\DriverManager;

require_once realpath(__DIR__ . '/../vendor/autoload.php');


$paths = [realpath(__DIR__ . '/../src/model')];
$isDevMode = true;


$dbParams = [
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'magazord',
    'host'     => '127.0.0.1',
    'port'     => 3306,
    'charset'  => 'utf8mb4',
];


$config = ORMSetup::createAttributeMetadataConfiguration(
    $paths,
    $isDevMode
);


$connection = DriverManager::getConnection($dbParams, $config);
$entityManager = new EntityManager($connection, $config);
