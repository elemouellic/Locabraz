<!-- Chargement Header -->
<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<section class="template-page">

    <h2 class="title-form">Inscription</h2>
    <form class="form-template" action="?action=form-register" method="POST">
        <div class="box-form">
            <input aria-label="nom" type="text" id="name" name="name" maxlength="50" placeholder="Votre nom" required>
        </div>
        <div class="box-form">
            <input aria-label="prénom" type="text" id="firstname" name="firstname" maxlength="50" placeholder="Votre prénom" required>
        </div>
        <div class="box-form">
            <input aria-label="email" type="email" id="email" name="email" maxlength="50" placeholder="Votre email" required>
        </div>
        <div class="box-form">
            <input aria-label="téléphone" type="tel" id="phone" name="phone" maxlength="10" placeholder="Votre numéro de téléphone" required>
        </div>
        <div class="box-form">
            <input aria-label="adresse" type="text" id="address" name="address" maxlength="50" placeholder="Votre adresse" required>
        </div>
        <div class="box-form">
            <input aria-label="code postal" type="text" id="zipcode" name="zipcode" maxlength="5" placeholder="Votre code postal" required>
        </div>
        <div class="box-form">
            <input aria-label="mot de passe" type="password" id="password" name="password" minlength="8" maxlength="32" placeholder="Votre mot de passe" required>
        </div>
        <p>J'accepte les <a href="?action=mentions">mentions légales</a></p>
        <input aria-label="j'accepte les mentions légales" type="checkbox" id="validate" name="validate" required>
        <input aria-label="s'inscrire" class="form-validate" type="submit" value="S'inscrire">
    </form>

</section>

<!-- Chargement Footer -->
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>