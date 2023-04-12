<?php

namespace Locabraz\models\modelClass;

use Locabraz\models\DbConnector;

/** 
 * *****Liste des méthodes*****
 * insertMessage (insérer un message via le formulaire de contact)*/


class Contact extends DbConnector
{

    public function insertMessage($name, $firstname, $email, $subject, $message, $postdate, $status)
    {
        $db = self::dbConnect();

        $name = htmlspecialchars($name);
        $firstname = htmlspecialchars($firstname);
        $email = htmlspecialchars($email);
        $subject = htmlspecialchars($subject);
        $message = htmlspecialchars($message);



        $req = $db->prepare(
            "INSERT INTO messages (
            name, 
            firstname, 
            email, 
            subject, 
            message, 
            postdate, 
            status)
             VALUES (:name, :firstname, :email, :subject, :message, :postdate, :status)"
                
            );
        
        $req->execute([
            ':name' => $name,
            ':firstname' => $firstname,
            ':email' => $email,
            ':subject' => $subject,
            ':message' => $message,
            ':postdate' => $postdate,
            ':status' => $status
        ]);
    }

    public function getMessages(){

        $db = self::dbConnect();

        $req = $db->prepare("SELECT * FROM messages");
        $req->execute();

        $messages = $req->fetchAll();

        if (!$messages) {
            throw new \Exception('Aucun message trouvé');
        }

        return $messages;

    }
}
