<!-- Chargement Header -->
<?php require_once __DIR__ . '/./layouts/header.php'; ?>
<section class="section-page">
    <h3 class="title-admin">Ajouter un article</h3>
    <form class="form-admin-template" action="?action=create-article" method="POST" enctype="multipart/form-data">

        <div class="box-form">
            <label for="title">Titre de l'article:</label>
            <input type="text" id="title" name="title" maxlength="50" placeholder="Saisir type" required>
        </div>

        <div class="box-form">
            <label for="content">Contenu de l'article :</label>
            <textarea id="content" name="content" rows="10" cols="50" maxlength="1000" placeholder="Saisir contenu (1000 caractères max)" required></textarea>
        </div>
        <div class="box-links">
            <label for="photolink">Téléverser une photo</label>
            <input type="file" id="photolink" name="photolink" accept=".jpg, .jpeg">
            <label for="photoalt">Texte alternatif:</label>
            <input type="text" id="photoalt" name="photoalt" maxlength="100" placeholder="Texte alternatif" required>
        </div>
        <input type="hidden" name="publishdate" value="<?php echo date('d/m/Y'); ?>">
        <input class="form-validate" type="submit" value="Envoyer">

    </form>
</section>
<h3 class="title-admin">Liste articles</h3>
<section class="section-affichage">

    <?php
    foreach ($articles as $article) {
    ?>
        <form class="form-admin-template" action="?action=upgrade-article" method="POST" enctype="multipart/form-data">
            <div class="box-form">
                <label for="title">Titre de l'article</label>
                <input type="text" id="title" name="title" maxlength="50" value="<?php echo $article['title']; ?>" required>
            </div>
            <div class="box-form"><label for="content">Contenu</label>
                <textarea id="content" name="content" rows="10" cols="50" maxlength="1000" required><?php echo $article['content']; ?> </textarea>
            </div>
            <div class="box-form box-row">


                <img class="img-form" src="<?php echo $article['photolink']; ?>" alt="<?php echo $article['alt']; ?>">


            </div>


            <input type="hidden" name="idArticles" value="<?php echo $article['idArticles']; ?>">
            <input class="form-validate" type="submit" value="Mettre à jour">
        </form>

    <?php
    }
    ?>
</section>

<section class="section-affichage">

    <h3 class="title-admin">Supprimer un article</h3>

    <?php foreach ($articles as $article) {
    ?>
        <form class="form-admin-template" action="?action=remove-article" method="POST" enctype="multipart/form-data">
            <div class="box-form">
                <h4>Id Article : <?php echo $article['idArticles']; ?></h4>
            </div>
            <div class="box-form">
                <h4>Titre : <?php echo $article['title']; ?></h4>
            </div>
            <input type="hidden" name="idArticles" value="<?php echo $article['idArticles']; ?>">
            <input class="form-validate" type="submit" value="Supprimer">
        </form>
    <?php
    }
    ?>

    
</section>

<!-- Chargement Footer -->
<?php require_once __DIR__ . '/./layouts/footer.php'; ?>