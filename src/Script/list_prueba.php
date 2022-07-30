<?php

use MiW\Results\Entity\Prueba;
use MiW\Results\Utils;

require __DIR__ . '/../../vendor/autoload.php';

// Carga las variables de entorno
$dotenv = new \Dotenv\Dotenv(__DIR__ . '/../..', Utils::getEnvFileName(__DIR__ . '/../..'));
$dotenv->load();

$entityManager = Utils::getEntityManager();

$pruebaRepository = $entityManager->getRepository(Prueba::class);
$pruebas = $pruebaRepository->findAll();

if (in_array('--json', $argv, true)) {
    echo json_encode($pruebas, JSON_PRETTY_PRINT);
} else {
    $items = 0;
    echo PHP_EOL . sprintf(
            '  %2s: %20s %30s' . PHP_EOL,
            'Id', 'Nombre', 'Valor'
        );
    /** @var Prueba $prueba */
    foreach ($pruebas as $prueba) {
        echo sprintf(
            '- %2d: %20s %30s',
            $prueba->getId(),
            $prueba->getNombre(),
            $prueba->getPrecio()
        ),
        PHP_EOL;
        $items++;
    }
    echo "\nTotal: $items users.\n\n";
}