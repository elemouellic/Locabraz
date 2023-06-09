<!-- Chargement Header -->
<?php require_once __DIR__ . '/../layouts/header.php'; ?>



<section class="template-page">

    <h2 class="title-form">Se connecter</h2>
    <form class="form-template" action="?action=form-login" method="POST">
        <div class="box-form box-form-alt">
            <input aria-label="email" type="email" id="email" name="email" maxlength="50" placeholder="Votre email" required>
        </div>
        <div class="box-form box-form-alt">
            <input aria-label="mot de passe" type="password" id="password" name="password" maxlength="32" placeholder="Votre mot de passe" required>
        </div>
        <input aria-label="se connecter" class="form-validate" type="submit" value="Se connecter">
        <a class="form-validate" href="?action=register">Créer un compte</a>
    </form>


</section>

<!-- Chargement Footer -->
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>