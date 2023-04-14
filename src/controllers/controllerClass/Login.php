<?php

namespace Locabraz\controllers\controllerClass;

// use Locabraz\controllers\MainController;
use Locabraz\controllers\UserController;
use Locabraz\models\modelClass\Login;

/**
 * *****Liste des méthodes*****
 * loginUser (Connexion de l'utilisateur)
 * createUser (créer nouvel utilisateur et l'ajouter dans la base de données)
 * upgradeUser (mise à jour des informations de l'utilisateur connecté)
 * removeUser (supprimer compte utilisateur)
 * obtainUsersByEmail (récupérer comptes utilisateurs)
 */



class LoginController extends UserController
{

    /**Page de connexion */

    public function loginUser()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new Login();
        $user->userLogin($email, $password);

        // Démarrage de la session
        session_start();

        $_SESSION['email'] = $email;
        $_SESSION['loggedin'] = true;

        //Redirection vers le compte utilisateur ou sur la page login
        if (isset($_SESSION['admin']) && $_SESSION['admin']) {
            header("Location: " . $_ENV['SITE_URL'] . "?action=dashboard");
        } elseif ($_SESSION['loggedin']) {
            header("Location: " . $_ENV['SITE_URL'] . "?action=account");
        } else {
            header("Location: " . $_ENV['SITE_URL'] . "?action=login");
        }
    }




    /**Créer un utilisateur */

    public function createUser()
    {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $firstname = $_POST['firstname'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $zipcode = $_POST['zipcode'];
        $password = $_POST['password'];

        $user = new Login();
        $user->insertUser($email, $name, $firstname, $phone, $address, $zipcode, $password);

        //Redirection vers le compte utilisateur
        header("Location: " . $_ENV['SITE_URL'] . "?action=account");
    }

    /** Mettre à jour les informations de l'utilisateur */

    public function upgradeUser()
    {
        // Vérification si l'utilisateur est connecté
        session_start();
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            header("Location: " . $_ENV['SITE_URL'] . "?action=login");
            exit;
        }

        $email = $_SESSION['email'];
        $name = $_POST['name'];
        $firstname = $_POST['firstname'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $zipcode = $_POST['zipcode'];

        try {
            $user = new Login();
            $user->updateUser($email, $name, $firstname, $phone, $address, $zipcode);
        } catch (\Exception $e) {
            echo 'Erreur : ' . $e->getMessage();
            return;
        }

        // Redirection vers le compte utilisateur
        header("Location: " . $_ENV['SITE_URL'] . "?action=account");
    }


    /** Supprimer un utilisateur **/
    public function removeUser()
    {
        // Vérification que l'utilisateur est connecté
        session_start();
        if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
            header("Location: " . $_ENV['SITE_URL'] . "?action=login");
            exit;
        }

        // Récupération de l'email de l'utilisateur à supprimer
        $email = $_SESSION['email'];

        // Suppression de l'utilisateur
        $user = new Login();
        $user->deleteUser($email);

        // Fermeture de la session et redirection vers la page de login
        session_unset();
        session_destroy();
        header("Location: " . $_ENV['SITE_URL'] . "?action=login");
    }

    /** Récupérer comptes utilisateurs */

    public function obtainUsersByEmail($email)
    {
        $user = new Login();
        $users = $user->getUsersByEmail($email);

        return $users;
    }
}
