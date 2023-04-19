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


}
