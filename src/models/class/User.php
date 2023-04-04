<?php

class User {
   private $idUser;
   private $name;
   private $firstname;
   private $email;
   private $phone;
   private $address;
   private $zipcode;
   private $password;
   private $admin;
   
   public function __construct($idUser, $name, $firstname, $email, $phone, $address, $zipcode, $password, $admin) {
      $this->idUser = $idUser;
      $this->name = $name;
      $this->firstname = $firstname;
      $this->email = $email;
      $this->phone = $phone;
      $this->address = $address;
      $this->zipcode = $zipcode;
      $this->password = $password;
      $this->admin = $admin;
   }
   
   public function getIdUser() {
      return $this->idUser;
   }
   
   public function getName() {
      return $this->name;
   }
   
   public function getFirstName() {
      return $this->firstname;
   }
   
   public function getEmail() {
      return $this->email;
   }
   
   public function getPhone() {
      return $this->phone;
   }
   
   public function getAddress() {
      return $this->address;
   }
   
   public function getZipcode() {
      return $this->zipcode;
   }
   
   public function getPassword() {
      return $this->password;
   }
   
   public function isAdmin() {
      return $this->admin;
   }
   
   public function resetPassword() {
      $newPassword = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 10);
      // Générer un nouveau mot de passe aléatoire
      
      // Code pour mettre à jour le mot de passe de l'utilisateur dans la base de données
      
      $this->password = $newPassword;
      // Mettre à jour le mot de passe de l'objet utilisateur
   }
   
   public function isValidEmail() {
      return filter_var($this->email, FILTER_VALIDATE_EMAIL);
      // Vérifier si l'adresse e-mail est valide en utilisant la fonction filter_var de PHP
   }
   
   public function isValidPhone() {
      $phoneRegex = '/^[0-9]{10}$/';
      return preg_match($phoneRegex, $this->phone);
      // Vérifier si le numéro de téléphone est valide en utilisant une expression régulière
   }
}
