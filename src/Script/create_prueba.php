<?php
/**
 * PHP version 7.2
 * src\create_user_admin.php
 *
 * @category Utils
 * @package  MiW\Results
 * @author   Javier Gil <franciscojavier.gil@upm.es>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.etsisi.upm.es ETS de Ingeniería de Sistemas Informáticos
 */

use MiW\Results\Entity\Prueba;
use MiW\Results\Utils;

require __DIR__ . '/../../vendor/autoload.php';

//echo 'DIRECTORIO: '. __DIR__ . '/../../vendor/autoload.php';

// Carga las variables de entorno
$dotenv = new \Dotenv\Dotenv(__DIR__ . '/../..', Utils::getEnvFileName(__DIR__ . '/../..'));
$dotenv->load();

$entityManager = Utils::getEntityManager();

$user = new Prueba("Prueba1", 25.50);

try {
    $entityManager->persist($user);
    $entityManager->flush();
    echo 'Created Prueba with ID #' . $user->getId() . PHP_EOL;
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}
