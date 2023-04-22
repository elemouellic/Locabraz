<?php

namespace Locabraz\controllers;
use Locabraz\controllers\controllerClass\RentalController;
use Locabraz\controllers\controllerClass\ArticleController;
use Locabraz\controllers\controllerClass\BookingController;
use Exception;


class UserController extends MainController
{
    /**
     * Affiche la page d'accueil
     */
    public function homePage(): void
    {
        $controller = new RentalController();
        $rentals = $controller->obtainFourRentals();
        require_once $this->getViewFront('home');
    }

    /**
     * Affiche la page appartement
     */
    public function apartmentPage(): void
    {
        
        $controller = new RentalController();
        $rentals = $controller->obtainAllRentals();
        require_once $this->getViewFront('apartment');
    }

    /**
     * Affiche la page news
     */
    public function newsPage(): void
    {
        $controller = new ArticleController();
        $articles = $controller->obtainAllArticles();
        require_once $this->getViewFront('news');
    }

    /**
     * Affiche la page de contact
     */
    public function contactPage(): void
    {
        require_once $this->getViewFront('contact/contact');
    }

    /**
     * Affiche la page mentions légales
     */
    public function mentionsPage(): void
    {
        require_once $this->getViewFront('mentions');
    }

    /** Pages utilisateurs */

    /**
     * Affiche la page du compte utilisateur
     */
    public function accountPage(): void
    {
        $email = $_SESSION['email'];
        $controller = new BookingController();
        $bookings = $controller->obtainBookingsByEmail($email);
        require_once $this->getViewFront('user/account');
    }

    /**
     * Affiche la page de connexion utilisateur
     */
    public function loginPage(): void
    {
        require_once $this->getViewFront('user/login');
    }

    /**
     * Affiche la page de profil utilisateur
     */
    public function profilePage(): void
    {
        require_once $this->getViewFront('user/profile');
    }

    /**
     * Affiche la page d'inscription utilisateur
     */
    public function registerPage(): void
    {
        require_once $this->getViewFront('user/register');
    }

    /**
     * Affiche la page de réservation utilisateur
     */
    public function bookingPage(): void
    {
        $arrival = $_POST['arrival'] ?? date('Y-m-d');
        $departure = $_POST['departure'] ?? date('Y-m-d');
    
        $controller = new RentalController();
        $rentals = $controller->obtainRentalByDate($arrival, $departure);
    
        require_once $this->getViewFront('user/booking');
    }
    

    /**
     * Affiche page 404
     */
    public function notFoundPage($exception)
    {
        require_once $this->getViewFront('404');
    }


    /**
     * Affiche page erreur
     */
    public function errorPage()
    {
        require_once $this->getViewFront('error');
    }


    /**
     * Confirmation du formulaire
     */
    public function confirmationPage(): void
    {
        require_once $this->getViewFront('contact/contact-confirm');
    }
}
