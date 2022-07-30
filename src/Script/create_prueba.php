<?php // src/Script/create_prueba.php

use MiW\Results\Entity\Prueba;
use MiW\Results\Utils;

require __DIR__ . '/../../vendor/autoload.php';

// Carga las variables de entorno
$dotenv = new \Dotenv\Dotenv(__DIR__ . '/../..', Utils::getEnvFileName(__DIR__ . '/../..'));
$dotenv->load();

$entityManager = Utils::getEntityManager();

$prueba = new Prueba("NuevaPrueba1",26.12);

try {
    $entityManager->persist($prueba);
    $entityManager->flush();
    echo 'Created PRUEBA with ID #' . $prueba->getId() . PHP_EOL;
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}