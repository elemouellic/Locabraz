<!-- Chargement Header -->
<?php require_once __DIR__ . '/layouts/header.php'; ?>

    <article class="actus">
    <?php
    
foreach ($articles as $article) {
?>
        <article id="<?php echo $article['idArticles']; ?>" class="actus-home">
            <img class="actus-img" src="<?php echo $article['photolink']; ?>" alt="<?php echo $article['alt']; ?>">
            <h6 class="actus-title"><?php echo $article['title']; ?></h6>
            <p class="actus-description">Publié le : <?php echo $article['publishdate']; ?><br> <br><?php echo $article['content']; ?></p>
            
            
            <input class="actus-button" type="button" value="Lire...">
        </article>
    <?php
}
    ?>
    </article>


    <!-- Chargement Footer -->
    <?php require_once __DIR__ . '/layouts/footer.php'; ?>