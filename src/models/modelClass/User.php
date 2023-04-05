<?php

namespace Locabraz\models\modelClass;

use Locabraz\models\DbConnector;

class User extends DbConnector
{

    //Créer un utilisateur

    public function insertUser($email, $name, $firstname, $phone, $address, $zipcode, $password)
    {
        $db = self::dbConnect();


        //Validation de l'email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \Exception('Email invalide');
        }

        // Validation du code postal
        if (!preg_match('/^[0-9]{5}$/', $zipcode)) {
            throw new \Exception('Code postal invalide');
        }

        //Crypter le mot de passe
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $req = $db->prepare(
            "INSERT INTO _user (
            email, 
            name, 
            firstname, 
            phone, 
            address, 
            zipcode, 
            password
            ) 
            VALUES (:email, :name, :firstname, :phone, :address, :zipcode, :password)"
        );
        $req->execute([
            ':email' => $email,
            ':name' => $name,
            ':firstname' => $firstname,
            ':phone' => $phone,
            ':address' => $address,
            ':zipcode' => $zipcode,
            ':password' => $hashedPassword
        ]);
    }

    //Mettre à jour un utilisateur

    //Supprimer un compte utilisateur

}
