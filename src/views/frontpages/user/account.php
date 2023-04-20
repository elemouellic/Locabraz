<!-- Chargement Header -->
<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<section class="account-page">


<?php 


if (isset($_SESSION['email'])) {
  echo "Bienvenue, " . $_SESSION['email'];
} else {
  echo "Vous n'êtes pas connecté.";
}?>
<a href="?action=login">Se connecter</a>
<a href="?action=logout">Se déconnecter</a>

</section>

<!-- Chargement Footer -->
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
