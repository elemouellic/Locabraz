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
     * Affiche la page de gestion des articles
     */
    public function articleAdmin(): void
    {
        require_once $this->getViewAdmin('articleadmin');
    }

    /**
     * Affiche la page de gestion des réservations
     */
    public function bookingAdmin(): void
    {
        require_once $this->getViewAdmin('bookingadmin');
    }

    /**
     * Affiche la page de gestion des locations
     */
    public function rentalAdmin(): void
    {
        require_once $this->getViewAdmin('rentaladmin');
    }

    /**
     * Affiche la page des utilisateurs
     */
    public function userAdmin(): void
    {
        require_once $this->getViewAdmin('useradmin');
    }

    /**
     * Affiche la page des entrées contact
     */
    public function contactAdmin(): void
    {
        require_once $this->getViewAdmin('contactadmin');
    }
}
