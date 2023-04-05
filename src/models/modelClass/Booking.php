<?php

class Booking {
    private $idBookings;
    private $arrival;
    private $departure;
    private $persons;
    private $amount;
    private $payment;
    private $idRentals;
    private $idUser;
    
    public function __construct($idBookings, $arrival, $departure, $persons, $amount, $payment, $idRentals, $idUser) {
       $this->idBookings = $idBookings;
       $this->arrival = $arrival;
       $this->departure = $departure;
       $this->persons = $persons;
       $this->amount = $amount;
       $this->payment = $payment;
       $this->idRentals = $idRentals;
       $this->idUser = $idUser;
    }
    
    public function getIdBookings() {
       return $this->idBookings;
    }
    
    public function getArrival() {
       return $this->arrival;
    }
    
    public function getDeparture() {
       return $this->departure;
    }
    
    public function getPersons() {
       return $this->persons;
    }
    
    public function getAmount() {
       return $this->amount;
    }
    
    public function getPayment() {
       return $this->payment;
    }
    
    public function getIdRentals() {
       return $this->idRentals;
    }
    
    public function getIdUser() {
       return $this->idUser;
    }

    public function updateArrival($arrival) {
        // Mettre à jour la date d'arrivée dans la base de données
        // Utiliser la méthode appropriée de votre objet de base de données
        // pour mettre à jour la valeur de la colonne 'arrival' pour cette réservation
        // Exemple : $this->db->query("UPDATE BOOKINGS SET arrival = '$arrival' WHERE idBookings = $this->idBookings");
        $this->arrival = $arrival; // Mettre à jour la valeur de la propriété dans l'objet
     }
     
     public function updateDeparture($departure) {
        // Mettre à jour la date de départ dans la base de données
        // Utiliser la méthode appropriée de votre objet de base de données
        // pour mettre à jour la valeur de la colonne 'departure' pour cette réservation
        // Exemple : $this->db->query("UPDATE BOOKINGS SET departure = '$departure' WHERE idBookings = $this->idBookings");
        $this->departure = $departure; // Mettre à jour la valeur de la propriété dans l'objet
     }
     
     public function updatePersons($persons) {
        // Mettre à jour le nombre de personnes dans la base de données
        // Utiliser la méthode appropriée de votre objet de base de données
        // pour mettre à jour la valeur de la colonne 'persons' pour cette réservation
        // Exemple : $this->db->query("UPDATE BOOKINGS SET persons = '$persons' WHERE idBookings = $this->idBookings");
        $this->persons = $persons; // Mettre à jour la valeur de la propriété dans l'objet
     }
     
     public function updateAmount($amount) {
        // Mettre à jour le montant dans la base de données
        // Utiliser la méthode appropriée de votre objet de base de données
        // pour mettre à jour la valeur de la colonne 'amount' pour cette réservation
        // Exemple : $this->db->query("UPDATE BOOKINGS SET amount = '$amount' WHERE idBookings = $this->idBookings");
        $this->amount = $amount; // Mettre à jour la valeur de la propriété dans l'objet
     }
     
     public function updatePayment($payment) {
        // Mettre à jour le statut de paiement dans la base de données
        // Utiliser la méthode appropriée de votre objet de base de données
        // pour mettre à jour la valeur de la colonne 'payment' pour cette réservation
        // Exemple : $this->db->query("UPDATE BOOKINGS SET payment = '$payment' WHERE idBookings = $this->idBookings");
        $this->payment = $payment; // Mettre à jour la valeur de la propriété dans l'objet
     }
  }
 