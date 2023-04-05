<!-- Chargement Header -->
<?php require_once __DIR__ . '/layouts/header.php'; ?>

<form class="contact-form" action="/contact" method="post">
  <label for="nom">Nom :</label>
  <input type="text" id="nom" name="nom" required>
  <label for="prenom">Prénom :</label>
  <input type="text" id="prenom" name="prenom" required>
  <label for="email">Email :</label>
  <input type="email" id="email" name="email" required>
  <label for="telephone">Numéro de téléphone :</label>
  <input type="tel" id="telephone" name="telephone">
  <label for="message">Message :</label>
  <textarea id="message" name="message" rows="5" required></textarea>
  <input type="checkbox" id="mentions-legales" name="mentions-legales" required>
  <label for="mentions-legales">J'ai lu et accepté les mentions légales</label><br><br>
  <input type="submit" value="Envoyer">
</form>

<!-- Chargement Footer -->
<?php require_once __DIR__ . '/layouts/footer.php'; ?>