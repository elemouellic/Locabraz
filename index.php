<?php

require __DIR__ . '/vendor/autoload.php';

// Dotenv
require_once __DIR__ . '/vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();



echo 'Hello World';