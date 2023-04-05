<?php
//Chargment Autoload
require __DIR__ . '/vendor/autoload.php';

//Dotenv
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();





require_once __DIR__ . '/src/views/home.php';

