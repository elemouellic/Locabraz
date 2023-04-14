<?php

namespace Locabraz\controllers\controllerClass;

use Locabraz\controllers\MainController;
use Locabraz\models\modelClass\Article;

class ArticleController extends MainController
{

    /**
     * *****Liste des méthodes*****
     * createArticle (créer un nouvel article à partir de l'admin)
     * udpgradeArticle (mettre à jour un article à partir de l'admin)
     * removeArticle (supprimer un article à partir de l'admin)
     * obtainAllArticles (récupérer tous les articles pour page article)
     * obtainThreeArticles (récupérer les trois derniers articles pour page accueil)
     */

    /** Créer un article via le dashboard admin */

    public function createArticle()
    {

        $title = $_POST['title'];
        $content = $_POST['content'];
        $publishdate = $_POST['publishdate'];
        $idPhotoarticle = $_POST['idPhotoarticle'];

        $article = new Article();
        $article->insertArticle($title, $content, $publishdate, $idPhotoarticle);

        //Redirection vers le dashboard admin
        header('Location: views/admin/dashboard.php');
    }

    /** Mettre à jour un article via le dashboard admin */

    public function upgradeArticle()
    {

        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $publishdate = $_POST['publishdate'];
        $idPhotoarticle = $_POST['idPhotoarticle'];

        $article = new Article();
        $article->updateArticle($id, $title, $content, $publishdate, $idPhotoarticle);

        //Redirection vers le dashboard admin
        header('Location: views/admin/dashboard.php');
    }

    /** Supprimer un article via le dashboard admin */

    public function removeArticle()
    {

        $id = $_POST['id'];

        $article = new Article();
        $article->deleteArticle($id);

        //Redirection vers le dashboard admin
        header('Location: views/admin/dashboard.php');
    }

    /** Récupérer tous les article */

    public function obtainAllArticles()
    {

        $article = new Article();
        $article = $article->getAllArticles();

        return $article;
    }

    /** Récupérer trois articles */

    public function obtainThreeArticles()
    {

        $article = new Article();
        $article = $article->getThreeArticles();

        return $article;
    }
}
