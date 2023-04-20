<?php require_once __DIR__ . '/layouts/header.php'; ?>

<?php echo $_SESSION['email']; ?>


<a href="?action=logout">Se déconnecter</a>

<?php require_once __DIR__ . '/layouts/footer.php'; ?>