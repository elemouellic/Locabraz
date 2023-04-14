<?php

namespace Locabraz\controllers\controllerClass;

use Locabraz\controllers\MainController;
use Locabraz\models\modelClass\Booking;

/**
 * *****Liste des méthodes*****
 * createBooking ()
 * upgradeBooking ()
 * removeBooking ()
 * obtainBookingById ()
 * obtainAllBookings ()
 */

class BookingController extends MainController
{


    /** Créer une nouvelle réservation */

    public function createBooking()
    {
        $arrival = $_POST['arrival'];
        $departure = $_POST['departure'];
        $persons = $_POST['persons'];
        $amount = $_POST['amount'];
        $payment = $_POST['payment'];
        $idRentals = $_POST['idRentals'];
        $email = $_POST['email'];

        $booking = new Booking();
        $booking->insertBooking($arrival, $departure, $persons, $amount, $payment, $idRentals, $email);

        // Redirection vers la page de confirmation
        header('Location: views/bookingConfirmation.php');
    }

    /** Mettre à jour une réservation */

    public function upgradeBooking()
    {
        $id = $_POST['id'];
        $arrival = $_POST['arrival'];
        $departure = $_POST['departure'];
        $persons = $_POST['persons'];
        $amount = $_POST['amount'];
        $payment = $_POST['payment'];
        $idRentals = $_POST['idRentals'];
        $email = $_POST['email'];

        $booking = new Booking();
        $booking->updateBooking($id, $arrival, $departure, $persons, $amount, $payment, $idRentals, $email);

        // Redirection vers la page de confirmation
        header('Location: views/bookingConfirmation.php');
    }

    /** Supprimer une réservation */

    public function removeBooking()
    {
        $id = $_POST['id'];

        $booking = new Booking();
        $booking->deleteBooking($id);

        // Redirection vers la page des réservations
        header('Location: views/admin/bookingadmin.php');
    }

    /** Afficher une réservation par son ID */

    public function obtainBookingById()
    {
        $id = $_GET['id'];

        $booking = new Booking();
        $booking = $booking->getBookingById($id);

        return $booking;
    }

    /** Afficher toutes les réservations */

    public function obtainAllBookings()
    {
        $booking = new Booking();
        $bookings = $booking->getAllBookings();

        return $bookings;
    }
}
