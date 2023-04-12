<!-- Chargement Header -->
<?php require_once __DIR__ . '/layouts/header.php'; ?>
<br>
<br>
<br>
<br>
<br>
<form action="?action=form-contact" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="firstname" required>
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="subject">Sujet :</label>
        <input type="text" id="subject" name="subject" required>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea>
    </div>
    <div>
        <input type="submit" value="Envoyer">
    </div>
</form>


<!-- Chargement Footer -->
<?php require_once __DIR__ . '/layouts/footer.php'; ?>