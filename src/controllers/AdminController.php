<?php

namespace Locabraz\controllers;


// use Locabraz\controllers\controllerClass\RentalController; 

class AdminController extends MainController
{
    /**
     * Affiche la page du tableau de bord d'administration
     */
    public function dashboard(): void
    {
        require_once $this->getViewAdmin('dashboard');
    }


    /**
     * Affiche la page de gestion des réservations
     */
    public function bookingAdmin(): void
    {
        require_once $this->getViewAdmin('bookingadmin');
    }

    // public function rentalAdmin(): void
    // {
    //     $controller = new RentalController();
    //     $rentals = $controller->obtainAllRentals();
    //     require_once $this->getViewAdmin('rentaladmin');
    // }

}
