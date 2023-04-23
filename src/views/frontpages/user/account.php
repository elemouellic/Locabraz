<!-- Chargement Header -->
<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<section class="template-page">
  <?php 

      echo '<p class="text-dispo">Vous êtes connecté avec cette adresse mail: ' . $_SESSION['email'] . '</p>';
      echo '<p class="text-dispo">Me déconnecter de mon compte : <a href="?action=logout">Se déconnecter</a></p>';
      if (count($bookings) > 0) {
        echo "<h3 class=title-form> Mes réservations : </h3>"; 
        echo '<div class="template-page-list">';
        foreach ($bookings as $booking) {

          echo '<div id="' . $booking['idRentals'] . '" class="article-home">';
          echo '<div class="article-body">';
          echo '<h4 class="article-title">' . $booking['type'] . '</h4>';
          echo '<p class="article-description">Arrivée le : ' . date('d.m.Y', strtotime($booking['arrival'])) . '</p>';
          echo '<p class="article-description">Départ le : ' . date('d.m.Y', strtotime($booking['departure'])) . '</p>';          
          echo '<p class="article-description">Nombre de personnes : ' . $booking['persons'] . '</p>';
          echo '<p class="article-description">Montant payé : ' . $booking['amount'] . '€' . '</p>';
          echo '<a href="?action=contact" class="article-button">Contactez nous</a>';
          echo '</div>';
          echo '</div>';
          
        }
        echo '<div>';
      } else {
        echo "<p>Aucune réservation trouvée.</p>";
      }

    
  ?>
</section>


<!-- Chargement Footer -->
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>