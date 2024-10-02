<?php
use Doctrine\ORM\Tools\setup;
use Doctrine\ORM\EntityManager;
require_once __DIR__ . '/../vendor/autoload.php';



// Configuración de Doctrine
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = setup ::createAnnotationMetadataConfiguration([__DIR__ . '/../src/Entity'], $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

// Configuración de la base de datos
$conn = [
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => '',
    'dbname' => 'gestion_reserva_hotel',
];

// EntityManager
$entityManager = EntityManager::create($conn, $config);

return $entityManager;



