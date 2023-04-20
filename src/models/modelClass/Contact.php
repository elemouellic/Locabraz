<?php

namespace Locabraz\models\modelClass;

use Locabraz\models\DbConnector;

/** 
 * *****Liste des méthodes*****
 * insertMessage (insérer un message via le formulaire de contact)
 * getMessages (récupérer tous les messages reçus)
 * deleteMessages (supprimer messages par la vue admin)
 */



class Contact extends DbConnector
{

    /** Insérer message dans la base de données */

    public function insertMessage($name, $firstname, $email, $subject, $message, $postdate, $status)
    {
        $db = self::dbConnect();

        $name = htmlspecialchars($name);
        $firstname = htmlspecialchars($firstname);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $subject = htmlspecialchars($subject);
        $message = htmlspecialchars($message);
        $postdate = htmlspecialchars($postdate);
        $status = htmlspecialchars($status);

        if (!$email) {
            throw new \Exception('Adresse e-mail invalide');
        }


        $req = $db->prepare(
            "INSERT INTO messages (
            name, 
            firstname, 
            email, 
            subject, 
            message, 
            postdate, 
            status)
             VALUES (?, ?, ?, ?, ?, ?, ?)"

        );

        $req->execute([$name, $firstname, $email, $subject, $message, $postdate, $status ? 1 : 0
        ]);
    }

    /** Récupérer messages pour vue admin */

    public function getMessages()
    {

        $db = self::dbConnect();

        $req = $db->prepare("SELECT * FROM messages");
        $req->execute();

        $messages = $req->fetchAll();

        return $messages;
    }

    public function deleteMessages($id)
    {
        $db = self::dbConnect();
    
        $req = $db->prepare("DELETE FROM messages WHERE idMessages = ?");
        $req->execute([$id]);
    
    }
    
}
