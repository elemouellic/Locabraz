<?php

namespace Locabraz\controllers\controllerClass;

use Locabraz\controllers\MainController;
use Locabraz\models\modelClass\Rental;
use Locabraz\controllers\Security;

/**
 * *****Liste des méthodes*****
 * rentalAdmin (Contrôleur pour vue admin)
 * createRental (créer une nouvelle location via l'admin)
 * upgradeRental (mettre à jour une location via l'admin)
 * removeRental (supprimer une location via l'admin)
 * obtainAllRentals (récupérer les quatres dernières ,location pour page d'accueil)
 * obtainFourRentals (récupérer toutes les locations pour page appartements)
 * obtainRentalByDate (récupérer pour affichage des locations disponibles)
 */

class RentalController extends MainController
{

    /** Vue admin */
    public function rentalAdmin(): void
    {
        $controller = new RentalController();
        $rentals = $controller->obtainAllRentals();
        require_once $this->getViewAdmin('rentaladmin');
    }

    /** Créer une nouvelle location via dashboard */

    public function createRental()
    {
        $type = Security::sanitize($_POST['type']);
        $rooms = Security::sanitize($_POST['rooms']);
        $description = Security::sanitize($_POST['description']);

        $photolinks = $_FILES['photolink'];

        // Gérer les fichiers téléchargés
        $photoalt = array();
        foreach ($_POST['photoalt'] as $alt) {
            $photoalt[] = $alt;
        }



        $rental = new Rental();
        $rental->insertRental($type, $rooms, $description, $photolinks, $photoalt);

        //Redirection vers la vue rentaladmin
        header("Location: " . $_ENV['SITE_URL'] . "?action=rentaladmin");
    }

    /** Mettre à jour une location via dashboard */

    public function upgradeRental()
    {
        $id = Security::sanitize($_POST['idRentals']);
        $type = Security::sanitize($_POST['type']);
        $rooms = Security::sanitize($_POST['rooms']);
        $description = Security::sanitize($_POST['description']);

        $rental = new Rental();
        $rental->updateRental($id, $type, $rooms, $description);

        //Redirection vers la vue rentaladmin
        header("Location: " . $_ENV['SITE_URL'] . "?action=rentaladmin");
    }

    /** Supprimer une location via dashboard */

    public function removeRental()
    {
        $id = $_POST['idRentals'];

        $rental = new Rental();
        $rental->deleteRental($id);

        //Redirection vers la vue rentaladmin
        header("Location: " . $_ENV['SITE_URL'] . "?action=rentaladmin");
    }

    /** Afficher toutes les locations */

    public function obtainAllRentals()
    {
        $rental = new Rental();
        $rentals = $rental->getAllRentals();

        // Ajouter les photos pour chaque location
        foreach ($rentals as &$r) {
            $photos = $rental->getRentalPhotos($r['idRentals']);
            $r['photos'] = $photos;
        }

        return $rentals;
    }

    /** Afficher les quatre dernières locations pour page d'accueil */

    public function obtainFourRentals()
    {
        $rental = new Rental();
        $rentals = $rental->getFourRentals();

        // Ajouter les photos pour chaque location
        foreach ($rentals as &$r) {
            $photos = $rental->getRentalPhotos($r['idRentals']);
            $r['photos'] = $photos;
        }

        return $rentals;
    }

    /** Récupérer les locations disponibles pour une période donnée */
    public function obtainRentalByDate($arrival, $departure)
    {

        if(isset($_POST['arrival']) && isset($_POST['departure'])) {
        $arrival = Security::sanitize($_POST['arrival']);
        $departure = Security::sanitize($_POST['departure']);
    } else {
        $arrival = date('Y-m-d');
        $departure = date('Y-m-d');
    }

        $rental = new Rental();
        $rentals = $rental->getRentalByDate($arrival, $departure);

        // Ajouter les photos pour chaque location
        foreach ($rentals as &$r) {
            $photos = $rental->getRentalPhotos($r['idRentals']);
            $r['photos'] = $photos;
        }

        return $rentals;
    }
}
