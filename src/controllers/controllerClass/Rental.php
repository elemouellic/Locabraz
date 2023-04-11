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

    /** Créer une nouvelle location */

    public function createRental()
    {
        $type = $_POST['type'];
        $rooms = $_POST['rooms'];
        $description = $_POST['description'];

        $rental = new Rental();
        $rental->insertRental($type, $rooms, $description);

        //Redirection vers le dashboard admin
        header('Location: views/admin/rentaladmin.php');
    }
}
