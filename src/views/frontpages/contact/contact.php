<!-- Chargement Header -->
<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<section class="contact-page">
    <h2 class="title-form">Contactez-nous</h2>
    <form class="form-contact" action="?action=form-contact" method="POST">
        <div class="box-contact">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="box-contact">
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="firstname" required>
        </div>

        <div class="box-contact">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="box-contact">
            <label for="subject">Objet :</label>
            <input type="text" id="subject" name="subject" required>
        </div>
        <div class="box-contact">
            <label for="message">Message :</label>
            <input type="hidden" name="postdate" value="<?php echo date('Y-m-d H:i:s'); ?>">
        </div>
        <div class="box-contact">
            <textarea id="message" name="message" required></textarea>
        </div>
        <input type="submit" value="Envoyer">

    </form>
</section>


<!-- Chargement Footer -->
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>