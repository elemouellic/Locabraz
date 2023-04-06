<?php

namespace Locabraz\models\modelClass;

use Locabraz\models\DbConnector;

/**
 * *****Liste des méthodes*****
 * insertRental (créer nouvelle réservation et l'insérer dans la base de données)
 * udpateRental (mettre à jour les informations dans la base de données)
 * deleteRental (supprimer une réservations de la base de données)
 * getAllRentals (afficher toutes les réservations)
 */

class Rental extends DbConnector
{

   /** Créer une location **/
   public function insertRental($type, $rooms, $description)
   {
      $db = self::dbConnect();

      $req = $db->prepare(
         "INSERT INTO rentals (
        type,
        rooms,
        description
        ) 
        VALUES (?, ?, ?)"
      );
      $req->execute([$type, $rooms, $description]);
   }

   /** Mettre à jour une location **/
   public function updateRental($id, $type, $rooms, $description)
   {
      $db = self::dbConnect();

      $req = $db->prepare(
         "UPDATE rentals 
        SET type = ?, 
        rooms = ?, 
        description = ?
        WHERE idRentals = ?"
      );
      $req->execute([$type, $rooms, $description, $id]);
   }

   /** Supprimer une location **/
   public function deleteRental($id)
   {
      $db = self::dbConnect();

      $req = $db->prepare(
         "DELETE FROM rentals 
        WHERE idRentals = ?"
      );
      $req->execute([$id]);
   }

   /** Récupérer toutes les locations **/
   public function getAllRentals()
   {
      $db = self::dbConnect();

      $req = $db->prepare("SELECT * FROM rentals");
      $req->execute();

      $rentals = $req->fetchAll();

      if (!$rentals) {
         throw new \Exception('Aucune location trouvée');
      }

      return $rentals;
   }
}
