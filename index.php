<?php
//Chargment Autoload
require __DIR__ . '/vendor/autoload.php';

//Dotenv
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

//Chargement Header
require_once __DIR__ . '/src/views/layouts/header.php';


require_once __DIR__ . '/src/views/home.php';


//Chargement Footer
require_once __DIR__ . '/src/views/layouts/footer.php';