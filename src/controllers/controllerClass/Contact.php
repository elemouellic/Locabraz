<?php

namespace Locabraz\controllers\controllerClass;


use Locabraz\models\modelClass\Contact;

/**
 * *****Liste des méthodes*****
 * sendMessage (envoi d'un message via le formulaire)
 * obtainMessages (récupérer messages pour vue administrateur)
 */

class ContactController
{

    /** Envoyer un message via le formulaire de contact */

    public function sendMessage()
    {
        $name = $_POST['name'];
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
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
}
