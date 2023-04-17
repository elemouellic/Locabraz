<!-- Chargement Header -->
<?php require_once __DIR__ . '/./layouts/header.php'; ?>

<section class="section-page">
    <h3 class="title-admin">Ajouter un appartement</h3>
    <form class="form-admin-template" action="?action=" method="POST" enctype="multipart/form-data">

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
            <textarea type="description" id="description" name="description" rows="10" cols="50" maxlength="1000" placeholder="Saisir description (1000 caractères max)" required></textarea>
        </div>
        <div class="box-links">
            <label for="photolink">Photo 1</label>
            <input type="file" id="photolink" name="photolink" accept=".jpg, .jpeg">
            <label for="alt">Texte alternatif:</label>
            <textarea type="text" id="alt" name="alt" maxlength="100" placeholder="Saisir texte alternatif pour accessibilité" required></textarea>
        </div>

        <div class="box-links">
            <label for="photolink">Photo 2</label>
            <input type="file" id="photolink" name="photolink" accept=".jpg, .jpeg">
            <label for="alt">Texte alternatif:</label>
            <textarea type="text" id="alt" name="alt" maxlength="100" placeholder="Saisir texte alternatif pour accessibilité" required></textarea>
        </div>

        <div class="box-links">
            <label for="photolink">Photo 3</label>
            <input type="file" id="photolink" name="photolink" accept=".jpg, .jpeg">
            <label for="alt">Texte alternatif:</label>
            <textarea type="text" id="alt" name="alt" maxlength="100" placeholder="Saisir texte alternatif pour accessibilité" required></textarea>
        </div>
        <div class="box-links">
            <label for="photolink">Photo 4</label>
            <input type="file" id="photolink" name="photolink" accept=".jpg, .jpeg">
            <label for="alt">Texte alternatif:</label>
            <textarea type="text" id="alt" name="alt" maxlength="100" placeholder="Saisir texte alternatif pour accessibilité" required></textarea>
        </div>
        <div class="box-links">
            <label for="photolink">Photo 5</label>
            <input type="file" id="photolink" name="photolink" accept=".jpg, .jpeg">
            <label for="alt">Texte alternatif:</label>
            <textarea type="text" id="alt" name="alt" maxlength="100" placeholder="Saisir texte alternatif pour accessibilité" required></textarea>
        </div>

        <input class="form-validate" type="submit" value="Envoyer">

    </form>
</section>

<?php require_once __DIR__ . '/./layouts/footer.php'; ?>