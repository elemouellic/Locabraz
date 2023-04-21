<!-- Chargement Header -->
<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<section class="account-page">
  <?php 
    if (isset($_SESSION['email'])) {
      echo "Vous êtes connecté avec cette adresse mail: " . $_SESSION['email']; 
      echo "Me déconnecter de mon compte <a href='?action=logout'>Se déconnecter</a> "; 
      echo "Supprimer mon compte <a href='?action=removeuser'>Supprimer mon compte</a> "; 
var_dump($email);
      if (count($bookings) > 0) {
        foreach ($bookings as $booking) {
          echo "<div>";
          echo "<p>Arrivée : " . $booking['arrival'] . "</p>";
          echo "<p>Départ : " . $booking['departure'] . "</p>";
          echo "<p>Nombre de personnes : " . $booking['persons'] . "</p>";
          echo "<p>Montant : " . $booking['amount'] . "€</p>";
          echo "<p>Paiement : " . $booking['payment'] . "</p>";
          echo "<p>ID de la location : " . $booking['idRentals'] . "</p>";
          echo "</div>";
        }
      } else {
        echo "<p>Aucune réservation trouvée.</p>";
      }

    } else {
      echo "Vous n'êtes pas connecté. <a href='?action=login'>Se connecter</a>";
      echo "Pas encore encore inscrit?. <a href='?action=register'>Créer un compte</a>";
    }
  ?>
</section>


<!-- Chargement Footer -->
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>