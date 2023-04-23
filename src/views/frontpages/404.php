<!-- Chargement Header -->
<?php require_once __DIR__ . '/layouts/header.php'; ?>


<section class="template-page">
<h2 class="title-form">Oups</h2>
  <p><?php echo $exception->getMessage(); ?></p>
  <a class="inputbutton" href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Retour à la page précédente</a>

</section>

<!-- Chargement Footer -->
<?php require_once __DIR__ . '/layouts/footer.php'; ?>
