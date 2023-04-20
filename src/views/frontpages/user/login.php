<!-- Chargement Header -->
<?php require_once __DIR__ . '/../layouts/header.php'; ?>



<section class="account-page">

    <h2 class="title-form">Se connecter</h2>
    <form class="form-template" action="?action=form-login" method="POST">
        <div class="box-form box-form-alt">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" maxlength="50" placeholder="Votre email" required>
        </div>
        <div class="box-form box-form-alt">
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" maxlength="32" placeholder="Votre mot de passe" required>
        </div>
        <input class="form-validate" type="submit" value="Se connecter">
    </form>


</section>

<!-- Chargement Footer -->
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>