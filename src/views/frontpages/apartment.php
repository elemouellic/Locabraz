<!-- Chargement Header -->
<?php require_once __DIR__ . '/layouts/header.php'; ?>

<h2 class="title-form">Nos locations</h2>

<article class="articles rentals-list">

    <h3 class="title-form">Chercher une disponibilité</h3>
    <form class="home-form search" action="?action=form-dispo" method="POST">
        <label for="trip-start">Date d'arrivée</label>
        <input class="input" type="date" name="trip-start" id="start" value='<?php echo date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("Y"))); ?>'>
        <label for="trip-start">Date de départ</label>
        <input class="input" type="date" name="trip-arrival" id="arrival" value='<?php echo date("Y-m-d", mktime(0, 0, 0, date("m"), date("d") + 10, date("Y"))); ?>'>
        <input class="inputbutton" type="submit" value="Rechercher">
    </form>

    <?php foreach ($rentals as $rental) : ?>
        <article id="<?php echo $rental['idRentals'] ?>" class="article-home article-page">
            <div class="article-img-container">
                <?php if (!empty($rental['photos'])) : ?>
                    <?php foreach ($rental['photos'] as $photo) : ?>
                        <img class="article-img" src="<?php echo $photo['photolink']; ?>" alt="<?php echo $photo['alt']; ?>">
                    <?php endforeach; ?>
                <?php endif; ?>
                <p>Cliquez sur l'image pour faire défiler les photos</p>
            </div>
            <div class="article-body">
                <h4 class="article-title"><?php echo $rental['type']; ?></h4>
                <p class="article-description"><?php echo $rental['description']; ?></p>
                <a class="inputbutton" href="?action=form-dispo">Vérifier la disponibilité</a>
                
            </div>
        </article>
    <?php endforeach; ?>

</article>

<!-- Chargement Footer -->
<?php require_once __DIR__ . '/layouts/footer.php'; ?>