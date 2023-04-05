<?php

class Rental {
    private $idRentals;
    private $type;
    private $rooms;
    private $description;
    
    public function __construct($idRentals, $type, $rooms, $description) {
       $this->idRentals = $idRentals;
       $this->type = $type;
       $this->rooms = $rooms;
       $this->description = $description;
    }
    
    public function getIdRentals() {
       return $this->idRentals;
    }
    
    public function getType() {
       return $this->type;
    }
    
    public function getRooms() {
       return $this->rooms;
    }
    
    public function getDescription() {
       return $this->description;
    }
    
    public function setType($type) {
       $this->type = $type;
       // Code pour mettre à jour la colonne 'type' dans la base de données avec la nouvelle valeur
    }
    
    public function setRooms($rooms) {
       $this->rooms = $rooms;
       // Code pour mettre à jour la colonne 'rooms' dans la base de données avec la nouvelle valeur
    }
    
    public function setDescription($description) {
       $this->description = $description;
       // Code pour mettre à jour la colonne 'description' dans la base de données avec la nouvelle valeur
    }
 }
 