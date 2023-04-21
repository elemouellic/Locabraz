<?php

namespace Locabraz\models\modelClass;

use Locabraz\models\DbConnector;

/**
 * *****Liste des méthodes*****
 * insertBooking (insérer une réservation dans la base de données)
 * updateBooking (mettre à jour une réservation)
 * deleteBooking (supprimer une réservation)
 * getAllBookings (afficher tous les réservations)
 */
class Booking extends DbConnector
{


   public function insertBooking($arrival, $departure, $persons, $amount, $payment, $idRentals, $email)
   {
      $db = self::dbConnect();

      $req = $db->prepare(
         "INSERT INTO bookings (
           arrival = ?, 
           departure = ?, 
           persons = ?, 
           amount = ?, 
           payment = ?, 
           idRentals = ?, 
           email = ?
           ) 
           VALUES (?, ?, ?, ?, ?, ?, ?)"
      );
      $req->execute([$arrival, $departure, $persons, $amount, $payment, $idRentals, $email]);
   }

   public function updateBooking($arrival, $departure, $persons, $amount, $payment, $idRentals, $email, $id)
   {
      $db = self::dbConnect();

      $req = $db->prepare(
         "UPDATE bookings 
           SET arrival = ?, 
           departure = ?, 
           persons = ?, 
           amount = ?, 
           payment = ?, 
           idRentals = ?, 
           email = ? 
           WHERE idBookings = ?"
      );
      $req->execute([$arrival, $departure, $persons, $amount, $payment, $idRentals, $email, $id]);
   }

   public function deleteBooking($id)
   {
      $db = self::dbConnect();

      $req = $db->prepare(
         "DELETE FROM bookings 
           WHERE idBookings = ?"
      );
      $req->execute([$id]);
   }

   public function getAllBookings()
   {
      $db = self::dbConnect();

      $req = $db->query("SELECT * FROM bookings");

      $bookings = $req->fetchAll();

      if (!$bookings) {
         throw new \Exception('Aucune réservation trouvée');
      }

      return $bookings;
   }

   public function getBookingsByEmail($email)
   {
       $db = self::dbConnect();
       $email = isset($_SESSION['email']) ? $_SESSION['email'] : null;
       $req = $db->prepare(
         "SELECT bookings.*, rentals.type 
           FROM bookings 
           JOIN rentals ON bookings.idRentals = rentals.idRentals
           WHERE email = ?"
       );
       $req->execute([$email]);
       $bookings = $req->fetchAll();
   
   
       return $bookings;
   }
   
}
