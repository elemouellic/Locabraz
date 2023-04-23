<?php

namespace Locabraz\models\modelClass;

use Locabraz\models\DbConnector;


/**
 * *****Liste des méthodes*****
 * insertArticle (créer un nouvel article et l'insérer dans la base de données)
 * udpateArticle (mettre à jour un article dans la base de données)
 * deleteArticle (supprimer un article de la base de données)
 * getAllArticles (récupérer tous les articles de la table)
 */

class Article extends DbConnector
{

    /** Créer un nouvel article **/

    public function insertArticle($title, $content, $publishdate, $photolink, $photoalt)
    {
        $db = self::dbConnect();

        // Insertion de la photo dans la table articlegallerie
        $target_dir = "public/img/articles/";
        $target_file = $target_dir . basename($photolink["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $newfilename = uniqid() . '.' . $imageFileType;
        $target_file = $target_dir . $newfilename;

        move_uploaded_file($photolink["tmp_name"], $target_file);

        $req = $db->prepare(
            "INSERT INTO articlegallerie (
                photolink,
                alt
            ) 
            VALUES (?, ?)"
        );

        $req->execute([$target_file, $photoalt]);

        // Récupération de l'ID de la photo insérée
        $photoid = $db->lastInsertId();

        // Insertion de l'article dans la table article en faisant référence à la photo insérée
        $req = $db->prepare(
            "INSERT INTO articles (
                title, 
                content, 
                publishdate,
                idPhotoarticle
            ) 
            VALUES (?, ?, ?, ?)"
        );

        $req->execute([$title, $content, $publishdate, $photoid]);
    }



    /** Mettre à jour un article **/

    public function updateArticle($title, $content, $id)
    {
        $db = self::dbConnect();

        $req = $db->prepare(
            "UPDATE articles
            SET title = ?, 
            content = ?
            WHERE idArticles = ?"
        );
        $req->execute([$title, $content, $id]);
    }

    /** Supprimer un article **/

    public function deleteArticle($id)
    {
        $db = self::dbConnect();

        // Suppression de l'article
        $req1 = $db->prepare(
            "DELETE FROM articles
            WHERE idArticles = ?"
        );
        $req1->execute([$id]);

        // Suppression de la photo
        $req2 = $db->prepare(
            "DELETE FROM articlegallerie
                    WHERE idPhotoarticle = ?"
        );
        $req2->execute([$id]);
    }

    /** Récupérer tous les articles **/

    public function getAllArticles()
    {
        $db = self::dbConnect();
    
        // Alias a=articles ag=articlegallerie
        $req = $db->prepare("SELECT a.*, ag.photolink, ag.alt
        FROM articles a
        LEFT JOIN articlegallerie ag ON a.idPhotoarticle = ag.idPhotoarticle
        ORDER BY a.publishdate DESC;
    ");
    
    
        $req->execute();
    
        $articles = $req->fetchAll();
    
        if (!$articles) {
            throw new \Exception('Aucun article trouvé');
        }
    
        return $articles;
    }
    

}
