<?php

namespace Locabraz\models\modelClass;

use Locabraz\models\DbConnector;

/**
 * *****Liste des méthodes*****
 * getBookingById (récupérer une réservation par son ID)
 * createBooking (insérer une réservation dans la base de données)
 * updateBooking (mettre à jour une réservation)
 * deleteBooking (supprimer une réservation)
 * getAllBookings (afficher tous les réservations)
 */
class Booking extends DbConnector
{
   
   public function getBookingById($id)
   {
      $db = self::dbConnect();

      $req = $db->prepare("SELECT * FROM bookings WHERE idBookings = :id");
      $req->execute([':id' => $id]);

      $booking = $req->fetch();

      if (!$booking) {
         throw new \Exception('Réservation non trouvée');
      }

      return $booking;
   }

   public function createBooking($arrival, $departure, $persons, $amount, $payment, $idRentals, $email)
   {
      $db = self::dbConnect();

      $req = $db->prepare(
         "INSERT INTO bookings (
           arrival, 
           departure, 
           persons, 
           amount, 
           payment, 
           idRentals, 
           email
           ) 
           VALUES (:arrival, :departure, :persons, :amount, :payment, :idRentals, :email)"
      );
      $req->execute([
         ':arrival' => $arrival,
         ':departure' => $departure,
         ':persons' => $persons,
         ':amount' => $amount,
         ':payment' => $payment,
         ':idRentals' => $idRentals,
         ':email' => $email
      ]);
   }

   public function updateBooking($id, $arrival, $departure, $persons, $amount, $payment, $idRentals, $email)
   {
      $db = self::dbConnect();

      $req = $db->prepare(
         "UPDATE bookings 
           SET arrival = :arrival, 
           departure = :departure, 
           persons = :persons, 
           amount = :amount, 
           payment = :payment, 
           idRentals = :idRentals, 
           email = :email 
           WHERE idBookings = :id"
      );
      $req->execute([
         ':id' => $id,
         ':arrival' => $arrival,
         ':departure' => $departure,
         ':persons' => $persons,
         ':amount' => $amount,
         ':payment' => $payment,
         ':idRentals' => $idRentals,
         ':email' => $email
      ]);
   }

   public function deleteBooking($id)
   {
      $db = self::dbConnect();

      $req = $db->prepare(
         "DELETE FROM bookings 
           WHERE idBookings = :id"
      );
      $req->execute([
         ':id' => $id
      ]);
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
}
