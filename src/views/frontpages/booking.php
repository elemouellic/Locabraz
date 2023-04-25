<!-- Chargement Header -->
<?php require_once __DIR__ . '/layouts/header.php'; ?>

<section class="account-page">

<h3 class="title-form">Chercher une disponibilité</h3>
<form class="home-form search" method="post">
<label for="trip-start">Date d'arrivée</label>
    <input class="input" type="date" name="arrival" id="arrival" value='<?php echo date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("Y"))); ?>'>
    <label for="trip-start">Date de départ</label>
    <input class="input" type="date" name="departure" id="departure" value='<?php echo date("Y-m-d", mktime(0, 0, 0, date("m"), date("d") + 10, date("Y"))); ?>'>
    <input class="inputbutton" type="submit" value="Rechercher">
</form>

<?php if (!empty($rentals)) : ?>
    <h2 class="title-form">Résultats de recherche</h2>
    <p class="text-dispo">du <?php echo date("d-m-Y", strtotime($arrival)); ?> au <?php echo date("d-m-Y", strtotime($departure)); ?></p>

    <article class="articles rentals-list">


<?php foreach ($rentals as $rental) : ?>
    <article id="<?php echo $rental['idRentals'] ?>" class="article-home">
        <div class="article-img-container">
            <?php if (!empty($rental['photos'])) : ?>
                <?php foreach ($rental['photos'] as $photo) : ?>
                    <img class="article-img-alt" src="<?php echo $photo['photolink']; ?>" alt="<?php echo $photo['alt']; ?>">
                <?php endforeach; ?>
            <?php endif; ?>
            <p >Cliquez sur l'image pour faire défiler les photos</p>
        </div>
        <div class="article-body">
            <h4 class="article-title"><?php echo $rental['type']; ?></h4>
            <p class="article-description"><?php echo $rental['description']; ?></p>
            <a href="?action=contact" class="article-button">Contactez-nous</a>
        </div>
    </article>
<?php endforeach; ?>
<?php else : ?>
    <p>Aucune location n'est disponible pour les dates sélectionnées.</p>
<?php endif; ?>


    


</section>

<!-- Chargement Footer -->
<?php require_once __DIR__ . '/layouts/footer.php'; ?>