<?php

try {
    /** Récupérer Controller pour vue front */

    // Vues visiteurs et utilisateurs
    $view = new \Locabraz\controllers\UserController();

    // Vues admin
    $admin = new \Locabraz\controllers\AdminController();

    /** Récupérer Controller pour formulaires */

    $article = new Locabraz\controllers\controllerClass\ArticleController();

    $booking = new Locabraz\controllers\controllerClass\BookingController();

    $contact = new Locabraz\controllers\controllerClass\ContactController();

    $login = new Locabraz\controllers\controllerClass\LoginController();

    $rental = new Locabraz\controllers\controllerClass\RentalController();



    // Vérifier si l'action est définie
    if (isset($_GET['action'])) {
        switch ($_GET['action']) {

                /** Vues visiteurs */
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

            case 'logout':
                $login->logOut();
                break;

                /** Vues admin */

                case 'dashboard':
                    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
                        $admin->dashboard();
                    } else {
                        $view->errorPage();
                    }
                    break;
    
                case 'articleadmin':
                    //Vue et méthode par contrôleur
                    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
                        $article->articleAdmin();
                    } else {
                        $view->errorPage();
                    }
                    break;
    
                case 'bookingadmin':
                    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
                        $booking->bookingAdmin();
                    } else {
                        $view->errorPage();
                    }
                    break;
    
                case 'rentaladmin':
                    //Vue et méthode par contrôleur
                    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
                        $rental->rentalAdmin();
                    } else {
                        $view->errorPage();
                    }
                    break;
    
                case 'useradmin':
                    //Vue et méthode par contrôleur
                    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
                        $login->userAdmin();
                    } else {
                        $view->errorPage();
                    }
                    break;
    
                case 'contactadmin':
                    //Vue et méthode par contrôleur
                    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
                        $contact->contactAdmin();
                    } else {
                        $view->errorPage();
                    }
                    break;

                /** Traitement des formulaires */

                // Formulaire de contact
            case 'form-contact':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $contact->sendMessage();
                    $view->confirmationPage();
                    break;
                } else {
                    $view->contactPage();
                    break;
                }

                // Formulaire d'enregistrement utilisateur
            case 'form-register':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $login->createUser();
                    break;
                } else {
                    $view->registerPage();
                    break;
                }

                // Formulaire de connexion utilisateur
            case 'form-login':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $login->loginUser();
                    break;
                } else {
                    $view->loginPage();
                    break;
                }

                /** Formulaires de la vue admin */
                // Gestion des locations
            case 'create-rental':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $rental->createRental();
                    break;
                } else {
                    $admin->dashboard();
                }
            case 'upgrade-rental':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $rental->upgradeRental();
                    break;
                } else {
                    $admin->dashboard();
                }

            case 'remove-rental':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $rental->removeRental();
                    break;
                } else {
                    $admin->dashboard();
                }

                // Gestion des articles
            case 'create-article':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $article->createArticle();
                    break;
                } else {
                    $admin->dashboard();
                }
            case 'upgrade-article':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $article->upgradeArticle();
                    break;
                } else {
                    $admin->dashboard();
                }

            case 'remove-article':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $article->removeArticle();
                    break;
                } else {
                    $admin->dashboard();
                }

                // Gestion des messages

            case 'remove-message':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $contact->removeMessages();
                    break;
                } else {
                    $admin->dashboard();
                }

                // Gestion des réservation

            case 'create-booking':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $booking->createBooking();
                    break;
                } else {
                    $admin->dashboard();
                }

            case 'upgrade-booking':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $booking->upgradeBooking();
                    break;
                } else {
                    $admin->dashboard();
                }

            case 'remove-booking':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $booking->removeBooking();
                    break;
                } else {
                    $admin->dashboard();
                }

                // Gestion des utilisateurs

            case 'create-user-admin':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $login->createUserByAdmin();
                    break;
                } else {
                    $admin->dashboard();
                }
            case 'upgrade-user-admin':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $login->upgradeUserByAdmin();
                    break;
                } else {
                    $admin->dashboard();
                }
            case 'remove-user-admin':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $login->removeUserByAdmin();
                    break;
                } else {
                    $admin->dashboard();
                }

            default:
                $view->homePage();
                break;
        }
    } else {
        $view->homePage();
    }
} catch (Exception $e) {
    $view->notFoundPage();
} catch (Error $e) {
    $view->errorPage();
}
