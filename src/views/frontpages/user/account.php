<!-- Chargement Header -->
<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<section class="account-page">



<?php
// Démarrage de la session



// Affichage des informations de la session
echo "ID de session : " . session_id() . "<br>";
echo "Etat de la session : " . session_status() . "<br>";
echo "Variables de session : " . print_r($_SESSION, true);
var_dump($_COOKIE);

?>
<?php 


if (isset($_SESSION['email'])) {
  echo "Bienvenue, " . $_SESSION['email'];
} else {
  echo "Vous n'êtes pas connecté.";
}?>

<a href="?action=logout">Se déconnecter</a>

</section>

<!-- Chargement Footer -->
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
