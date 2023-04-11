<?php

namespace Locabraz\controllers\controllerClass;

use Locabraz\controllers\MainController;
use Locabraz\models\modelClass\Rental;

/**
 * *****Liste des méthodes*****
 * createRental ()
 * upgradeRental ()
 * removeRental ()
 * obtainAllRentals ()
 * obtainFourRentals ()
 */

class RentalController extends MainController
{

    /** Créer une nouvelle location via dashboard */

    public function createRental()
    {
        $type = $_POST['type'];
        $rooms = $_POST['rooms'];
        $description = $_POST['description'];

        $rental = new Rental();
        $rental->insertRental($type, $rooms, $description);

        //Redirection vers le dashboard admin
        header('Location: views/admin/dashboard.php');
    }

    /** Mettre à jour une location via dashboard */

    public function upgradeRental()
    {
        $id = $_POST['id'];
        $type = $_POST['type'];
        $rooms = $_POST['rooms'];
        $description = $_POST['description'];

        $rental = new Rental();
        $rental->updateRental($id, $type, $rooms, $description);

        // Redirection vers le dashboard admin
        header('Location: views/admin/dashboard.php');
    }

    /** Supprimer une location via dashboard */

    public function removeRental()
    {
        $id = $_POST['id'];

        $rental = new Rental();
        $rental->deleteRental($id);

        // Redirection vers le dashboard admin
        header('Location: views/admin/dashboard.php');
    }

    /** Afficher touts les locations */

    public function obtainAllRentals()
    {
        $rental = new Rental();
        $rentals = $rental->getAllRentals();

        return $rentals;
    }

    /** Afficher les quatre dernières locations pour page d'accueil */

    public function obtainFourRentals()
    {
        $rental = new Rental();
        $rentals = $rental->getFourRentals();

        return $rentals;
    }
}
