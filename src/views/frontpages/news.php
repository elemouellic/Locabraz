<!-- Chargement Header -->
<?php require_once __DIR__ . '/layouts/header.php'; ?>

<h2 class="title-form">Les dernières actualités</h2>

<article class="actus">
    <?php

    foreach ($articles as $article) {
    ?>
        <article id="<?php echo $article['idArticles']; ?>" class="actus-home">
            <img class="actus-img" src="<?php echo $article['photolink']; ?>" alt="<?php echo $article['alt']; ?>">
            <h6 class="actus-title"><?php echo $article['title']; ?></h6>
            <p class="actus-description">Publié le : <?php echo date('d/m/Y', strtotime($article['publishdate'])); ?>
                <br> <br><?php echo $article['content']; ?>
            </p>


        </article>
    <?php
    }
    ?>
</article>


<!-- Chargement Footer -->
<?php require_once __DIR__ . '/layouts/footer.php'; ?>