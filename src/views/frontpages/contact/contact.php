<!-- Chargement Header -->
<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<section class="template-page">
    <h2 class="title-form">Contactez-nous</h2>
    <form class="form-template" action="?action=form-contact" method="POST">
        <div class="box-form">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" maxlength="50" placeholder="Votre nom" required>
        </div>
        <div class="box-form">
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="firstname" maxlength="50" placeholder="Votre prénom" required>
        </div>

        <div class="box-form">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" maxlength="50" placeholder="Votre email" required>
        </div>
        <div class="box-form">
            <label for="subject">Objet :</label>
            <input type="text" id="subject" name="subject" maxlength="50" placeholder="Votre demande" required>
        </div>
        <div class="box-form">
            <label for="message">Message :</label>
            <textarea id="message" name="message" maxlength="500" placeholder="Votre message" required></textarea>
        </div>
        <input type="hidden" name="postdate" value="<?php echo date('d/m/Y H:i:s'); ?>">
        <label for="validate">J'accepte la RGPD</label>
        <input type="checkbox" id="validate" name="validate" required>
        <input class="form-validate" type="submit" value="Envoyer">

    </form>
</section>


<!-- Chargement Footer -->
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>