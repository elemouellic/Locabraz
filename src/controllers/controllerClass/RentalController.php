<?php

namespace Locabraz\controllers\controllerClass;

use Locabraz\controllers\MainController;
use Locabraz\models\modelClass\Rental;

/**
 * *****Liste des méthodes*****
 * createRental (créer une nouvelle location via l'admin)
 * upgradeRental (mettre à jour une location via l'admin)
 * removeRental (supprimer une location via l'admin)
 * obtainAllRentals (récupérer les quatres dernières ,location pour page d'accueil)
 * obtainFourRentals (récupérer toutes les locations pour page appartements)
 */

class RentalController extends MainController
{

    /** Créer une nouvelle location via dashboard */

    public function createRental()
    {
        $type = $_POST['type'];
        $rooms = $_POST['rooms'];
        $description = $_POST['description'];
        
        $photolinks = $_FILES['photolink'];
        
        // Gérer les fichiers téléchargés
        $photoalt = array();
        foreach ($_POST['photoalt'] as $alt) {
            $photoalt[] = $alt;
        }
        
        // Maintenant, vous pouvez utiliser $photolinks et $photoalt pour insérer les données dans la base de données
        

        $rental = new Rental();
        $rental->insertRental($type, $rooms, $description, $photolinks, $photoalt);

        //Redirection vers le dashboard admin
        header("Location: " . $_ENV['SITE_URL'] . "?action=rentaladmin");
    }

    /** Mettre à jour une location via dashboard */

    public function upgradeRental()
    {
        $id = $_POST['id'];
        $type = $_POST['type'];
        $rooms = $_POST['rooms'];
        $description = $_POST['description'];
        $photoIds = $_POST['photo_id'];

        $rental = new Rental();
        $rental->updateRental($id, $type, $rooms, $description, $photoIds);

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
}
