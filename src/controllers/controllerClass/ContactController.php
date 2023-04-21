<?php

namespace Locabraz\controllers\controllerClass;

use Locabraz\controllers\MainController;
use Locabraz\models\modelClass\Contact;
use Locabraz\controllers\Security;

/**
 * *****Liste des méthodes*****
 * contactAdmin(Contrôleur pour vue admin)
 * sendMessage (envoi d'un message via le formulaire)
 * obtainMessages (récupérer messages pour vue administrateur)
 * removeMessages (supprimer message pour vue administrateur)
 */

class ContactController extends MainController
{

    /** Vue admin */
    public function contactAdmin(): void
    {
        $controller = new ContactController();
        $contacts = $controller->obtainMessages();
        require_once $this->getViewAdmin('contactadmin');
    }

    /** Envoyer un message via le formulaire de contact */

    public function sendMessage()
    {
        $name = Security::sanitize($_POST['name']);
        $firstname = Security::sanitize($_POST['firstname']);
        $email = Security::sanitize($_POST['email'], FILTER_VALIDATE_EMAIL);
        $subject = Security::sanitize($_POST['subject']);
        $message = Security::sanitize($_POST['message']);
        $postdate =  date('Y-m-d H:i:s');
        $status = 0;


        $contact = new Contact();
        $contact->insertMessage($name, $firstname, $email, $subject, $message, $postdate, $status);
    }

    public function obtainMessages()
    {

        $contact = new Contact();
        $contact = $contact->getMessages();

        return $contact;
    }

    public function removeMessages()
    {
        $id = $_POST['idMessages'];

        $contact = new Contact();
        $contact->deleteMessages($id);

        //Redirection vers la vue articleadmin
        header("Location: " . $_ENV['SITE_URL'] . "?action=contactadmin");
    }
}
