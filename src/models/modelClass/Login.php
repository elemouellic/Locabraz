<?php

namespace Locabraz\models\modelClass;

use Locabraz\models\DbConnector;


/**
 * *****Liste des méthodes*****
 * userLogin (permettre à un utilisateur de se connecter à son compte)
 * insertUser (ajouter nouvel utilisateur dans la base de données)
 * udpateUser (mettre à jour les informations dans la base de données)
 * deleteUser (supprimer un compte utilisateur de la base de données)
 * getUsersByEmail (afficher tous les utilisateurs de mon site)
 */

class Login extends DbConnector
{

    /** Connexion d'un utilisateur **/

    public function userLogin($email, $password)
    {
        $db = self::dbConnect();
    
        $req = $db->prepare("SELECT * FROM _user WHERE email = :email");
        $req->execute([':email' => $email]);
    
        $user = $req->fetch();
    
        if (!$user) {
            throw new \Exception('Utilisateur non trouvé');
        }
    
        if (!password_verify($password, $user['password'])) {
            throw new \Exception('Mot de passe incorrect');
        }
    
        $_SESSION['user_id'] = $user['id'];
    
        // Vérifier si l'utilisateur est un admin

        if ($user['admin'] == 1) {
            $_SESSION['admin'] = true;
        }
    
        return $user;
    }
    

    /** Ajouter un utilisateur **/

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

    /** Mettre à jour un utilisateur **/
    public function updateUser($email, $name, $firstname, $phone, $address, $zipcode)
    {
        $db = self::dbConnect();

        // Validation de l'email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \Exception('Email invalide');
        }

        // Validation du code postal
        if (!preg_match('/^[0-9]{5}$/', $zipcode)) {
            throw new \Exception('Code postal invalide');
        }

        $req = $db->prepare(
            "UPDATE _user 
            SET name = :name, 
            firstname = :firstname, 
            phone = :phone, 
            address = :address, 
            zipcode = :zipcode 
            WHERE email = :email"
        );
        $req->execute([
            ':email' => $email,
            ':name' => $name,
            ':firstname' => $firstname,
            ':phone' => $phone,
            ':address' => $address,
            ':zipcode' => $zipcode
        ]);
    }

    /** Supprimer un compte utilisateur **/
    public function deleteUser($email)
    {
        $db = self::dbConnect();

        $req = $db->prepare(
            "DELETE FROM _user 
            WHERE email = :email"
        );
        $req->execute([
            ':email' => $email
        ]);
    }

    
    /** Récupérer tous les comptes utilisateurs pour back office **/

    public function getUsersByEmail($email)
    {
        $db = self::dbConnect();

        $req = $db->prepare("SELECT * FROM _user WHERE email = :email");
        $req->execute([':email' => $email]);

        $users = $req->fetchAll();

        if (!$users) {
            throw new \Exception('Aucun utilisateur trouvé');
        }

        return $users;
    }
}
