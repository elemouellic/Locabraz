<!-- Chargement Header -->
<?php require_once __DIR__ . '/../layouts/header.php'; ?>



<section class="account-page">

    <h2 class="title-form">Se connecter</h2>
    <form class="form-template" action="" method="POST">
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
    <?php echo "ID de session : " . session_id() . "<br>";
echo "Etat de la session : " . session_status() . "<br>";
echo "Variables de session : " . print_r($_SESSION, true);
var_dump($_COOKIE); ?>

</section>

<!-- Chargement Footer -->
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>