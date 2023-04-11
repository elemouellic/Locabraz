<?php

namespace Locabraz\controllers\controllerClass;

use Locabraz\controllers\MainController;
use Locabraz\models\modelClass\User;

/**
 * *****Liste des méthodes*****
 * loginUser (Connexion de l'utilisateur)
 * createUser (créer nouvel utilisateur et l'ajouter dans la base de données)
 * 
 */



class UserController extends MainController
{

    /**Page de connexion */

    public function loginUser()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new User();
        $user->userLogin($email, $password);

        // Démarrage de la session
        session_start();

        $_SESSION['email'] = $email;
        $_SESSION['loggedin'] = true;

        //Redirection vers le compte utilisateur ou sur la page login
        if ($_SESSION['loggedin']) {
            header('Location: views/frontpages/user/account.php');
        } else {
            header('Location: views/frontpages/user/login.php');
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

        $user = new User();
        $user->insertUser($email, $name, $firstname, $phone, $address, $zipcode, $password);

        //Redirection vers le compte utilisateur
        header('Location: views/frontpages/user/account.php');
    }

    /** Mettre à jour les informations de l'utilisateur */

    public function upgradeUser()
    {
        // Vérification si l'utilisateur est connecté
        session_start();
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            header('Location: views/frontpages/user/login.php');
            exit;
        }

        $email = $_SESSION['email'];
        $name = $_POST['name'];
        $firstname = $_POST['firstname'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $zipcode = $_POST['zipcode'];

        try {
            $user = new User();
            $user->updateUser($email, $name, $firstname, $phone, $address, $zipcode);
        } catch (\Exception $e) {
            echo 'Erreur : ' . $e->getMessage();
            return;
        }

        // Redirection vers le compte utilisateur
        header('Location: views/frontpages/user/account.php');
    }
}
