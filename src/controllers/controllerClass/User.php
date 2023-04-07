<?php

namespace Locabraz\controllers\controllerClass;

use Locabraz\controllers\MainController;
use Locabraz\models\modelClass\User;

/**
 * *****Liste des méthodes*****
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
}
