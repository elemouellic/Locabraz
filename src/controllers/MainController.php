<?php

namespace Locabraz\Controllers;

class MainController {
    /**
     * Retourne le chemin d'accès à la vue front
     * @param string $view Le nom de la vue
     * @return string Le chemin d'accès à la vue front
     */
    public function getViewFront(string $view): string {
        return 'src/views/frontpages/' . $view . '.php';
    }

    /**
     * Retourne le chemin d'accès à la vue admin
     * @param string $view Le nom de la vue
     * @return string Le chemin d'accès à la vue admin
     */
    public function getViewAdmin(string $view): string {
        return 'src/views/admin/' . $view . '.php';
    }
}