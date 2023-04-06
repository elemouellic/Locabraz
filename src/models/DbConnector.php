<?php

namespace Locabraz\models;


use PDO;
use PDOException;
use Exception;

abstract class DbConnector
{
  // Singleton 
  private static $bdd = null;

  // Connexion à la base de données
  public static function dbConnect()
  {

    $dsn = "mysql:dbname=" . $_ENV['DB_NAME'] . "; host=" . $_ENV['DB_HOST'] . ":" . $_ENV['DB_PORT'] . "; charset=utf8" ;
    $user = $_ENV['DB_USERNAME'] ;
    $pwd = $_ENV['DB_PASSWORD'] ;
    
    if (isset(self::$bdd)) {
      return self::$bdd;
    } else {
      try {
        self::$bdd = new PDO($dsn, $user, $pwd);
        self::$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return self::$bdd;
      } catch (PDOException $e) {
        throw new Exception("Erreur de connexion à la base de données : " . $e->getMessage());
    }
    
    }
  }

}

?>