<?php

namespace Locabraz\models\modelClass;

use Locabraz\models\DbConnector;


/**
 * *****Liste des fonctions*****
 * insertArticle (créer un nouvel article et l'insérer dans la base de données)
 * udpateArticle (mettre à jour un article dans la base de données)
 * deleteArticle (supprimer un article de la base de données)
 * getAllArticles (récupérer tous les articles de la base de données)
 * getArticleById (récupérer un article en fonction de son ID)
 */

class Article extends DbConnector
{

    /** Créer un nouvel article **/

    public function insertArticle($title, $content, $publishdate, $idPhotoarticle = null)
    {
        $db = self::dbConnect();

        $req = $db->prepare(
            "INSERT INTO article (
            title, 
            content, 
            publishdate, 
            idPhotoarticle
            ) 
            VALUES (:title, :content, :publishdate, :idPhotoarticle)"
        );

        $req->execute([
            ':title' => $title,
            ':content' => $content,
            ':publishdate' => $publishdate,
            ':idPhotoarticle' => $idPhotoarticle
        ]);
    }

    /** Mettre à jour un article **/

    public function updateArticle($id, $title, $content, $publishdate, $idPhotoarticle = null)
    {
        $db = self::dbConnect();

        $req = $db->prepare(
            "UPDATE article 
            SET title = :title, 
            content = :content, 
            publishdate = :publishdate, 
            idPhotoarticle = :idPhotoarticle 
            WHERE idArticles = :id"
        );
        $req->execute([
            ':id' => $id,
            ':title' => $title,
            ':content' => $content,
            ':publishdate' => $publishdate,
            ':idPhotoarticle' => $idPhotoarticle
        ]);
    }

    /** Supprimer un article **/

    public function deleteArticle($id)
    {
        $db = self::dbConnect();

        $req = $db->prepare(
            "DELETE FROM article 
            WHERE idArticles = :id"
        );
        $req->execute([
            ':id' => $id
        ]);
    }

    /** Récupérer tous les articles **/

    public function getAllArticles()
    {
        $db = self::dbConnect();

        $req = $db->prepare("SELECT * FROM article");
        $req->execute();

        $articles = $req->fetchAll();

        if (!$articles) {
            throw new \Exception('Aucun article trouvé');
        }

        return $articles;
    }

    /** Récupérer un article en fonction de son ID **/

    public function getArticleById($id)
    {
        $db = self::dbConnect();

        $req = $db->prepare("SELECT * FROM article WHERE idArticles = :id");
        $req->execute([':id' => $id]);

        $article = $req->fetch();

        if (!$article) {
            throw new \Exception('Article non trouvé');
        }

        return $article;
    }
}
