<!-- Chargement Header -->
<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<section class="account-page">

    <h2 class="title-form">Inscription</h2>
    <form class="form-template" action="?action=form-register" method="POST">
        <div class="box-form">
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" maxlength="50" placeholder="Votre nom" required>
        </div>
        <div class="box-form">
            <label for="firstname">Prénom:</label>
            <input type="text" id="firstname" name="firstname" maxlength="50" placeholder="Votre prénom" required>
        </div>
        <div class="box-form">
            <label for="email">Adresse email:</label>
            <input type="email" id="email" name="email" maxlength="50" placeholder="Votre email" required>
        </div>
        <div class="box-form">
            <label for="phone">Téléphone:</label>
            <input type="tel" id="phone" name="phone" maxlength="10" placeholder="Votre numéro de téléphone" required>
        </div>
        <div class="box-form">
            <label for="address">Adresse:</label>
            <input type="text" id="address" name="address" maxlength="50" placeholder="Votre adresse" required>
        </div>
        <div class="box-form">
            <label for="zipcode">Code postal:</label>
            <input type="text" id="zipcode" name="zipcode" maxlength="5" placeholder="Votre code postal" required>
        </div>
        <div class="box-form">
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" maxlength="32" placeholder="Votre mot de passe" required>
        </div>
        <label for="validate">J'accepte les <a href="?action=mentions">mentions légales</a></label>
        <input type="checkbox" id="validate" name="validate" required>
        <input class="form-validate" type="submit" value="S'inscrire">
    </form>

</section>

<!-- Chargement Footer -->
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>