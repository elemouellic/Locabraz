<?php

namespace Locabraz\controllers\controllerClass;

use Locabraz\controllers\MainController;
use Locabraz\models\modelClass\Booking;
use Locabraz\controllers\Security;

/**
 * *****Liste des méthodes*****
 * createBooking ()
 * upgradeBooking ()
 * removeBooking ()
 * obtainAllBookings ()
 */

class BookingController extends MainController
{


    public function bookingAdmin(): void
    {
        $controller = new BookingController();
        $bookings = $controller->obtainAllBookings();
        require_once $this->getViewAdmin('bookingadmin');
    }


    /** Créer une nouvelle réservation */

    public function createBooking()
    {
        $arrival = Security::sanitize($_POST['arrival']);
        $departure = Security::sanitize($_POST['departure']);
        $persons = Security::sanitize($_POST['persons']);
        $amount = Security::sanitize($_POST['amount']);
        $payment = Security::sanitize($_POST['payment']);
        $idRentals = Security::sanitize($_POST['idRentals']);
        $email = Security::sanitize($_POST['email']);

        $booking = new Booking();
        $booking->insertBooking($arrival, $departure, $persons, $amount, $payment, $idRentals, $email);

        //Redirection vers la vue bookingadmin
        header("Location: " . $_ENV['SITE_URL'] . "?action=bookingadmin");
    }

    /** Mettre à jour une réservation */

    public function upgradeBooking()
    {
        $arrival = Security::sanitize($_POST['arrival']);
        $departure = Security::sanitize($_POST['departure']);
        $persons = Security::sanitize($_POST['persons']);
        $amount = Security::sanitize($_POST['amount']);
        $payment = Security::sanitize($_POST['payment']);
        $idRentals = Security::sanitize($_POST['idRentals']);
        $email = Security::sanitize($_POST['email']);
        $id = Security::sanitize($_POST['idBookings']);

        $booking = new Booking();
        $booking->updateBooking($arrival, $departure, $persons, $amount, $payment, $idRentals, $email, $id);

        //Redirection vers la vue bookingadmin
        header("Location: " . $_ENV['SITE_URL'] . "?action=bookingadmin");
    }

    /** Supprimer une réservation */

    public function removeBooking()
    {
        $id = Security::sanitize($_POST['idBookings']);

        $booking = new Booking();
        $booking->deleteBooking($id);

        //Redirection vers la vue bookingadmin
        header("Location: " . $_ENV['SITE_URL'] . "?action=bookingadmin");
    }


    /** Afficher toutes les réservations */

    public function obtainAllBookings()
    {
        $booking = new Booking();
        $bookings = $booking->getAllBookings();

        return $bookings;
    }

    public static function obtainBookingsByEmail($email)
    {

        $booking = new Booking();
        $bookings = $booking->getBookingsByEmail($email);

        return $bookings;
    }
}
