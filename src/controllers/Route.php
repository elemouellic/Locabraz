<?php
try {
    //Récupérer Controller pour vue front
    $view = new \Locabraz\controllers\UserController;

    // Vérifier si l'action est définie
    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            //Pages menu
            case 'apartment':
                $view->apartmentPage();
                break;

            case 'news':
                $view->newsPage();
                break;

            case 'contact':
                $view->contactPage();
                break;

            case 'mentions':
                $view->mentionsPage();
                break;

            //Pages utilisateurs
            case 'account':
                $view->accountPage();
                break;

            case 'login':
                $view->loginPage();
                break;

            case 'profile':
                $view->profilePage();
                break;

            case 'register':
                $view->registerPage();
                break;

            case 'booking':
                $view->bookingPage();
                break;

            default:
                $view->homePage();
                break;
        }
    } else {
        $view->homePage();
    }
} catch (Exception $e) {
    require_once __DIR__ . '/404.php';
} catch (Error $e) {
    require_once  __DIR__ . '/error.php';
}
?>