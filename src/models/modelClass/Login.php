<?php

namespace Locabraz\models\modelClass;

use Locabraz\models\DbConnector;


/**
 * *****Liste des méthodes*****
 * userLogin (permettre à un utilisateur de se connecter à son compte)
 * insertUser (ajouter nouvel utilisateur dans la base de données)
 * udpateUser (mettre à jour les informations dans la base de données)
 * deleteUser (supprimer un compte utilisateur de la base de données)
 * getAllUsers (afficher tous les utilisateurs de mon site)
 */

class Login extends DbConnector
{

    /** Connexion d'un utilisateur **/

    public function userLogin($email, $password)
    {
        $db = self::dbConnect();

        $req = $db->prepare("SELECT * FROM _user WHERE email = ?");
        $req->execute([$email]);

        $user = $req->fetch();

        if (!$user) {
            throw new \Exception('Utilisateur non trouvé');
        }

        if (!password_verify($password, $user['password'])) {
            throw new \Exception('Mot de passe incorrect');
        }


        if ($user['admin'] == 1) {
            $_SESSION['admin'] = true;
        }

        return $user;
    }

    /** Ajouter un utilisateur **/

    public function insertUser($email, $name, $firstname, $phone, $address, $zipcode, $hashedPassword)
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



        // Vérification si l'email existe déjà dans la base de données
        $req = $db->prepare("SELECT COUNT(*) FROM _user WHERE email = ?");
        $req->execute([$email]);
        $count = $req->fetchColumn();

        if ($count > 0) {
            // L'email existe déjà, renvoyer une exception
            throw new \Exception('Cet email est déjà utilisé');
        }

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
            VALUES (?, ?, ?, ?, ?, ?, ?)"
        );
        $req->execute([$email, $name, $firstname, $phone, $address, $zipcode, $hashedPassword]);
    }

    /** Mettre à jour un utilisateur **/
    public function updateUser($name, $firstname, $phone, $address, $zipcode, $email)
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
            SET name = ?, 
            firstname = ?, 
            phone = ?, 
            address = ?, 
            zipcode = ? 
            WHERE email = ?"
        );
        $req->execute([$name, $firstname, $phone, $address, $zipcode, $email]);
    }

    /** Supprimer un compte utilisateur **/
    public function deleteUser($email)
    {
        $db = self::dbConnect();

        $req = $db->prepare(
            "DELETE FROM _user 
            WHERE email = ?"
        );
        $req->execute([$email]);
    }


    /** Récupérer tous les comptes utilisateurs pour back office **/

    public function getAllUsers()
    {
        $db = self::dbConnect();

        $req = $db->prepare("SELECT * FROM _user WHERE admin=0");
        $req->execute();

        $users = $req->fetchAll();

        if (!$users) {
            throw new \Exception('Aucun utilisateur trouvé');
        }

        return $users;
    }
}
