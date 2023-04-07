<?php

namespace Locabraz\controllers;


class AdminController extends MainController {
    /**
     * Affiche la page du tableau de bord d'administration
     */
    public function dashboardPage(): void {
        require_once $this->getViewAdmin('dashboard');
    }
}