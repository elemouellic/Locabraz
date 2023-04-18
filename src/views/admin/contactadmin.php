<!-- Chargement Header -->
<?php require_once __DIR__ . '/./layouts/header.php'; ?>

<section class="section-page">
    <h3 class="title-admin">Messages reçus</h3>
    <?php
    
    $controller = new Locabraz\controllers\controllerClass\ContactController();
    $contacts = $controller->obtainMessages();
    foreach ($contacts as $contact) {
    ?>
        <div class="form-admin-template">
            <p class="box-form"><?php echo $contact['name']; ?></p>
            <p class="box-form"><?php echo $contact['firstname']; ?></p>
            <p class="box-form"><a href="mailto:<?php echo $contact['email']; ?>">Répondre à : <?php echo $contact['email']; ?></a></p>
            <p class="box-form"><?php echo $contact['subject']; ?></p>
            <p class="box-form"><?php echo $contact['message']; ?></p>
            <form action="?action=remove-message" method="POST">
                <input type="hidden" name="idMessages" value="<?php echo $contact['idMessages']; ?>">
                <input class="form-validate" type="submit" value="Supprimer message">
            </form>
        </div>

    <?php
    }
    ?>

    <div class="box-form">
    </div>
</section>

<!-- Chargement Footer -->
<?php require_once __DIR__ . '/./layouts/footer.php'; ?>
