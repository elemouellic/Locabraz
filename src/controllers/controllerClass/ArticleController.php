<?php

namespace Locabraz\controllers\controllerClass;

use Locabraz\controllers\MainController;
use Locabraz\models\modelClass\Article;

/**
 * *****Liste des méthodes*****
 * createArticle (créer un nouvel article à partir de l'admin)
 * udpgradeArticle (mettre à jour un article à partir de l'admin)
 * removeArticle (supprimer un article à partir de l'admin)
 * obtainAllArticles (récupérer tous les articles pour page article)
 * obtainThreeArticles (récupérer les trois derniers articles pour page accueil)
 */
class ArticleController extends MainController
{

    public function articleAdmin(): void
    {
        
        require_once $this->getViewAdmin('articleadmin');
    }
    /** Créer un article via le dashboard admin */

    public function createArticle()
    {

        $title = $_POST['title'];
        $content = $_POST['content'];
        $publishdate = $_POST['publishdate'];

        $photolink = $_FILES['photolink'];
        $photoalt = $_POST['photoalt'];


        $article = new Article();
        $article->insertArticle($title, $content, $publishdate, $photolink, $photoalt);

        //Redirection vers la vue articleadmin
        header("Location: " . $_ENV['SITE_URL'] . "?action=articleadmin");
    }

    /** Mettre à jour un article via le dashboard admin */

    public function upgradeArticle()
    {

        $id = $_POST['idArticles'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        $article = new Article();
        $article->updateArticle($title, $content, $id);

        //Redirection vers la vue articleadmin
        header("Location: " . $_ENV['SITE_URL'] . "?action=articleadmin");
    }

    /** Supprimer un article via le dashboard admin */

    public function removeArticle()
    {

        $id = $_POST['idArticles'];

        $article = new Article();
        $article->deleteArticle($id);

        //Redirection vers la vue articleadmin
        header("Location: " . $_ENV['SITE_URL'] . "?action=articleadmin");
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
