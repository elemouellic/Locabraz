<?php

namespace Locabraz\controllers;

class MainController {
    /**
     * Retourne le chemin d'accès à la vue front
     * @param string $view variable pour afficher dynamiquement le fichier
     * @return string Chemin vers la vue front
     */
    public function getViewFront(string $view): string {
        return 'src/views/frontpages/' . $view . '.php';
    }

    /**
     * Retourne le chemin d'accès à la vue admin
     * @param string $view variable pour afficher dynamiquement le fichier
     * @return string Chemin vers la vue admin
     */
    public function getViewAdmin(string $view): string {
        return 'src/views/admin/' . $view . '.php';
    }
}