<?php require_once __DIR__ . '/layouts/header.php'; ?>


<section class="section-page">
    <h3 class="title-admin">Bienvenue : <?php echo $_SESSION['email']; ?></h3> 
    <a href="?action=logout" class="inputbutton">Se&nbsp;déconnecter</a>

    <a href="?action=home" class="inputbutton">Revenir&nbsp;au&nbsp;site</a>
</section>



<?php require_once __DIR__ . '/layouts/footer.php'; ?>