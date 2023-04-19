<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//Vérifier si une session existe déjà
// if (session_status() !== PHP_SESSION_ACTIVE) {
//     session_start();
// }


//Chargement Autoload
require __DIR__ . '/vendor/autoload.php';


use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
try {
    $dotenv->load();
    // echo 'connexion réussie';
} catch (\Dotenv\Exception\InvalidPathException $e) {
    die('Impossible de charger le fichier .env : ' . $e->getMessage());
}

//Connexion à l'index et aux pages du site via routage
require_once __DIR__ . '/src/controllers/Route.php';


?>