<!-- Chargement Header -->
<?php require_once __DIR__ . '/./layouts/header.php';

use Locabraz\controllers\controllerClass\RentalController;
?>



<section class="section-page">
    <h3 class="title-admin">Ajouter un appartement</h3>
    <form class="form-admin-template" action="?action=create-rental" method="POST" enctype="multipart/form-data">

        <div class="box-form">
            <label for="type">Type appartement :</label>
            <input type="text" id="type" name="type" maxlength="50" placeholder="Saisir type" required>
        </div>
        <div class="box-form">
            <label for="rooms">Nombre de chambre :</label>
            <input type="number" id="rooms" name="rooms" maxlength="10" placeholder="Saisir nombre de chambres" required>
        </div>

        <div class="box-form">
            <label for="description">Description :</label>
            <textarea id="description" name="description" rows="10" cols="50" maxlength="1000" placeholder="Saisir description (1000 caractères max)" required></textarea>
        </div>
        <div class="box-links">
            <label for="photolink">Téléverser cinq photos</label>
            <input type="file" id="photolink" name="photolink[]" multiple accept=".jpg, .jpeg">
            <label for="photoalt">Texte alternatif:</label>
            <input type="text" id="photoalt" name="photoalt[]" maxlength="100" placeholder="Texte alternatif photo 1" required>
            <input type="text" id="photoalt" name="photoalt[]" maxlength="100" placeholder="Texte alternatif photo 2" required>
            <input type="text" id="photoalt" name="photoalt[]" maxlength="100" placeholder="Texte alternatif photo 3" required>
            <input type="text" id="photoalt" name="photoalt[]" maxlength="100" placeholder="Texte alternatif photo 4" required>
            <input type="text" id="photoalt" name="photoalt[]" maxlength="100" placeholder="Texte alternatif photo 5" required>
        </div>

        <input class="form-validate" type="submit" value="Envoyer">

    </form>
</section>
<h3 class="title-admin">Liste appartements</h3>
<section class="section-affichage">

    <?php
    $controller = new RentalController();
    $rentals = $controller->obtainAllRentals();
    foreach ($rentals as $rental) {
    ?>
        <form class="form-admin-template" action="?action=upgrade-rental" method="POST" enctype="multipart/form-data">
            <div class="box-form">
                <label for="type">Type</label>
                <input type="text" id="type" name="type" maxlength="50" value="<?php echo $rental['type']; ?>" required>
            </div>
            <div class="box-form">
                <label for="rooms">Nombre de chambres</label>
                <input type="number" name="rooms" value="<?php echo $rental['rooms']; ?>" required>
            </div>
            <div class="box-form"><label for="description">Description</label>
                <textarea id="description" name="description" rows="10" cols="50" maxlength="1000" required><?php echo $rental['description']; ?> </textarea>
            </div>
            <div class="box-form box-row">
                <?php
                if (!empty($rental['photos'])) {
                    foreach ($rental['photos'] as $photo) {
                ?>
                        <img class="img-form" src="<?php echo $photo['photolink']; ?>" alt="<?php echo $photo['alt']; ?>">
                <?php
                    }
                }
                ?>
            </div>

            <input type="hidden" name="idRentals" value="<?php echo $rental['idRentals']; ?>">
            <input class="form-validate" type="submit" value="Mettre à jour">
        </form>

    <?php
    }
    ?>
</section>
<section class="section-affichage">

<h3 class="title-admin">Supprimer un appartement</h3>

<?php foreach ($rentals as $rental) {
?>
    <form class="form-admin-template" action="?action=remove-rental" method="POST" enctype="multipart/form-data">
        <div class="box-form">
            <h4>Id Appartement : <?php echo $rental['idRentals']; ?></h4>
        </div>
        <div class="box-form">
            <h4>Type : <?php echo $rental['type']; ?></h4>
        </div>
        <input type="hidden" name="idRentals" value="<?php echo $rental['idRentals']; ?>">
        <input class="form-validate" type="submit" value="Supprimer">
    </form>
<?php
}
?>
</section>

<!-- Chargement Footer -->
<?php require_once __DIR__ . '/./layouts/footer.php'; ?>