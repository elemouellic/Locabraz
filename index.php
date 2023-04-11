<?php

if (!isset($_SESSION)) {
    session_start();
}


//Chargement Autoload
require __DIR__ . '/vendor/autoload.php';

//Dotenv
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();


try {
    //Récupérer Controller pour vue front
    $view = new \Locabraz\controllers\UserController;

    switch ($_GET['action']) {
        case 'apartment':
            $view->apartmentPage();
            break;

        case 'news':
            $view->newsPage();
            break;

        case 'contact':
            $view->contactPage();
            break;

        default:
            $view->homePage();
            break;
    }
} catch (Exception $e) {
    require_once __DIR__ . '404.php';
} catch (Error $e) {
    require_once  __DIR__ . 'error.php';
}



// require_once __DIR__ . '/src/views/frontpages/home.php';
