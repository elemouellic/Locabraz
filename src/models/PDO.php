<?php

namespace Locabraz\models;


use PDO;
use PDOException;

abstract class DbConnector
{
  // Singleton 
  private static $bdd = null;

  // Connexion à la base de données
  public static function dbConnect()
  {

    $path = "mysql:dbname=" . $_ENV['DB_NAME'] . "; host=" . $_ENV['DB_HOST'] . ":" . $_ENV['DB_PORT'] . "; charset=utf8" ;
    $user = $_ENV['DB_USERNAME'] ;
    $pwd = $_ENV['DB_PASSWORD'] ;
    
    if (isset(self::$bdd)) {
      return self::$bdd;
    } else {
      try {
        self::$bdd = new PDO($path, $user, $pwd);
        self::$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return self::$bdd;
      } catch (PDOException $e) {
          // throw the exception to the caller
          throw new Exception($e->getMessage());
      }
    }
  }

}

?>