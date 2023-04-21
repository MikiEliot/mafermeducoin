<?php

namespace App\models;

// les 3 "use" suivants sont nécessaires pour accéder aux classes et objets en dehors de l'espace de noms

use PDO;
use PDOException;
use Exception;

abstract class DbConnector
{
  // Singleton  --- permet de définir qu'une seule fois le pdo et d'optimiser l'accès à la bdd
  private static $bdd = null;

  // méthode de connection à la bdd
  public static function dbConnect()
  {
    if (isset(self::$bdd)) {
      return self::$bdd;
    } else {
      try {
        self::$bdd = new PDO(
          "mysql:dbname=" . $_ENV['DB_NAME'] . "; host=" . $_ENV['DB_HOST'] . ":" . $_ENV['DB_PORT'] . "; charset=utf8", 
          $_ENV['DB_LOGIN'],
          $_ENV['DB_PASSWORD']
        );
        // définit le mode d'erreur pour les exceptions PDO
        self::$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return self::$bdd;
      } catch (PDOException $e) {
          // lance l'exception à l'appelant
          throw new Exception($e->getMessage());
      }
    }
  }

}

?>