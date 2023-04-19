<!-- Chargement Header -->
<?php require_once __DIR__ . '/./layouts/header.php'; ?>

<section class="section-page">
    <h3 class="title-admin">Ajouter un utilisateur</h3>
    <form class="form-admin-template" action="?action=create-user-admin" method="POST">
        <div class="box-form">
            <label for="email">Email :</label>
            <input type="text" id="email" name="email" maxlength="50" placeholder="Saisir email" required>
        </div>
        <div class="box-form">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" maxlength="50" placeholder="Saisir nom" required>
        </div>
        <div class="box-form">
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="firstname" maxlength="50" placeholder="Saisir prénom" required>
        </div>
        <div class="box-form">
            <label for="phone">Téléphone :</label>
            <input type="phone" id="phone" name="phone" maxlength="10" placeholder="Saisir téléphone" required>
        </div>
        <div class="box-form">
            <label for="address">Adresse :</label>
            <input type="text" id="address" name="address" maxlength="50" placeholder="Saisir adresse" required>
        </div>
        <div class="box-form">
            <label for="zipcode">Code Postal :</label>
            <input type="number" id="zipcode" name="zipcode" maxlength="5" placeholder="Saisir code postal" required>
        </div>
        <div class="box-form">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" maxlength="50" placeholder="Saisir mot de passe" required>
        </div>

        <input class="form-validate" type="submit" value="Créer">

    </form>

</section>


<h3 class="title-admin">Liste utilisateurs</h3>
<section class="section-affichage">
    <?php
    foreach ($users as $user) {
    ?>
        <form class="form-admin-template" action="?action=upgrade-user-admin" method="POST">
            <div class="box-form">
                <label for="email">Email utilisateur</label>
                <input type="text" id="email" name="email" maxlength="50" value="<?php echo $user['email']; ?>" required>
            </div>
            <div class="box-form">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" maxlength="50" value="<?php echo $user['name']; ?>" required>
            </div>
            <div class="box-form">
                <label for="firstname">Prénom</label>
                <input type="text" id="firstname" name="firstname" maxlength="50" value="<?php echo $user['firstname']; ?>" required>
            </div>
            <div class="box-form">
                <label for="phone">Téléphone</label>
                <input type="phone" id="phone" name="phone" maxlength="10" value="<?php echo $user['phone']; ?>" required>
            </div>
            <div class="box-form">
                <label for="address">Adresse</label>
                <input type="text" id="address" name="address" maxlength="50" value="<?php echo $user['address']; ?>" required>
            </div>
            <div class="box-form">
                <label for="zipcode">Code postal</label>
                <input type="number" id="zipcode" name="zipcode" maxlength="5" value="<?php echo $user['zipcode']; ?>" required>
            </div>


            <input class="form-validate" type="submit" value="Mise à jour données">
        </form>
    <?php
    }
    ?>
</section>
<section class="section-affichage">

    <h3 class="title-admin">Supprimer un utilisateur</h3>

    <?php
    foreach ($users as $user) {
    ?>
        <form class="form-admin-template" action="?action=remove-user-admin" method="POST">
            <p>Nom : <?php echo $user['name']; ?></p>
            <p>Prénom : <?php echo $user['firstname']; ?></p>
            <p>Email : <?php echo $user['email']; ?></p>
            <input type="hidden" name="email" value="<?php echo $user['email']; ?>">
            <input class="form-validate" type="submit" value="Supprimer utilisateur">
        </form>
    <?php
    }
    ?>
</section>
<!-- Chargement Footer -->
<?php require_once __DIR__ . '/./layouts/footer.php'; ?>