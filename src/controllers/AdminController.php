<?php

namespace Locabraz\controllers;


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

}
