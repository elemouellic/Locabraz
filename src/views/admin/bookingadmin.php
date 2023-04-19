<!-- Chargement Header -->
<?php require_once __DIR__ . '/./layouts/header.php'; ?>

<section class="section-page">
    <h3 class="title-admin">Ajouter une réservation</h3>
    <form class="form-admin-template" action="?action=create-booking" method="POST" enctype="multipart/form-data">

        <div class="box-form">
            <label for="idRentals">Identification de l'appartement</label>
            <input type="number" id="idRentals" name="idRentals" max="3" placeholder="Saisir id de l'appartement" required>
        </div>

        <div class="box-form">
            <label for="email">Email du client</label>
            <input type="email" id="email" name="email" maxlength="50" placeholder="Saisir email" required>
        </div>

        <div class="box-form">
            <label for="arrival">Date d'arrivée</label>
            <input type="date" id="arrival" name="arrival" required>
        </div>

        <div class="box-form">
            <label for="departure">Date de départ</label>
            <input type="date" id="departure" name="departure" required>
        </div>

        <div class="box-form">
            <label for="persons">Nombre de personnes</label>
            <input type="number" id="persons" name="persons" max="10" placeholder="Saisir nombre de personnes" required>
        </div>

        <div class="box-form">
            <label for="amount">Prix payé</label>
            <input type="number" id="amount" name="amount" placeholder="Saisir prix" required>
        </div>

        <input type="hidden" id="payment" name="payment" value="0">


        <input class="form-validate" type="submit" value="Envoyer">
    </form>
</section>
    <h3 class="title-admin">Liste réservations</h3>
    <section class="section-affichage">
        <?php
        
        foreach ($bookings as $booking) {
        ?>
            <form class="form-admin-template" action="?action=upgrade-booking" method="POST" enctype="multipart/form-data">
                <div class="box-form">
                    <p>Numéro de réservation : <?php echo $booking['idBookings'] ?></p>
                    <input type="hidden" id="idBookings" name="idBookings" value="<?php echo $booking['idBookings'] ?>">
                </div>
                <div class="box-form">
                    <label for="idRentals">Id de l'appartement</label>
                    <input type="number" id="idRentals" name="idRentals" max="3" value="<?php echo $booking['idRentals']; ?>" required>
                </div>

                <div class="box-form">
                    <label for="email">Email du client</label>
                    <input type="email" id="email" name="email" maxlength="50" value="<?php echo $booking['email'] ?>" required>
                </div>

                <div class="box-form">
                    <label for="arrival">Date d'arrivée</label>
                    <input type="date" id="arrival" name="arrival" value="<?php echo $booking['arrival'] ?>" required>
                </div>

                <div class="box-form">
                    <label for="departure">Date de départ</label>
                    <input type="date" id="departure" name="departure" value="<?php echo $booking['departure'] ?>" required>
                </div>

                <div class="box-form">
                    <label for="persons">Nombre de personnes</label>
                    <input type="number" id="persons" name="persons" max="10" value="<?php echo $booking['persons'] ?>" required>
                </div>

                <div class="box-form">
                    <label for="amount">Montant de la réservation</label>
                    <input type="number" id="amount" name="amount" value="<?php echo $booking['amount'] ?>" required>
                </div>

                <div class="box-form">
                    <p>Payé? (1=oui/0=non) <?php echo $booking['payment'] ?></p>
                    <input type="hidden" id="payment" name="payment" value="0">
                    <p>Paiement effectué : <input type="checkbox" id="payment" name="payment" value="1"></p>
                </div>
                <input class="form-validate" type="submit" value="Mettre à jour">
            </form>

        <?php
        }
        ?>
    </section>

    <section class="section-affichage">

    <h3 class="title-admin">Supprimer une réservation</h3>

    <?php foreach ($bookings as $booking) {
    ?>
        <form class="form-admin-template" action="?action=remove-booking" method="POST" enctype="multipart/form-data">
            <div class="box-form">
                <h4>Id Réservation : <?php echo $booking['idBookings']; ?></h4>
            </div>
            <div class="box-form">
                <h4>Email du client : <?php echo $booking['email']; ?></h4>
            </div>

            <input type="hidden" name="idBookings" value="<?php echo $booking['idBookings']; ?>">
            <input class="form-validate" type="submit" value="Supprimer">
        </form>
    <?php
    }
    ?>
</section>
    <!-- Chargement Footer -->
    <?php require_once __DIR__ . '/./layouts/footer.php'; ?>