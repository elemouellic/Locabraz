<?php
namespace Locabraz\models;

use Dotenv\Dotenv;
use PDO;
use PDOException;

class Database {
    private $pdo;

    public function __construct() {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();

        $host = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_NAME'];
        $username = $_ENV['DB_USERNAME'];
        $password = $_ENV['DB_PASSWORD'];
        $port = $_ENV['DB_PORT'];


        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, $port);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'Génial';
        } catch (PDOException $e) {
            echo 'Nul';
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    public function getPdo() {
        return $this->pdo;
    }

}

?>
