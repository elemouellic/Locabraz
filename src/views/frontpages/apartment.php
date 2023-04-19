<!-- Chargement Header -->
<?php require_once __DIR__ . '/layouts/header.php'; ?>

<article class="articles rentals-list">


    <?php foreach ($rentals as $rental) : ?>
        <article class="article-home">
            <?php if (!empty($rental['photos'])) : ?>
                <img class="img-form" src="<?php echo $rental['photos'][0]['photolink']; ?>" alt="<?php echo $rental['photos'][0]['alt']; ?>">
            <?php endif; ?>
            <div class="article-body">
                <h4 class="article-title"><?php echo $rental['type']; ?></h4>
                <p class="article-description"><?php echo $rental['description']; ?></p>
                <a href="#" class="article-button">Voir</a>
            </div>
        </article>
    <?php endforeach; ?>

</article>

<!-- Chargement Footer -->
<?php require_once __DIR__ . '/layouts/footer.php'; ?>
