<?php
//Vérifier si une session existe déjà
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//Chargement Autoload
require __DIR__ . '/vendor/autoload.php';

//Dotenv
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

//Connexion à l'index et aux pages du site via routage
require_once __DIR__ . '/src/controllers/Route.php';
?>