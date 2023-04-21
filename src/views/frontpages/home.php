<!-- Chargement Header -->
<?php require_once __DIR__ . '/layouts/header.php'; ?>


    <section class="slider">
        <h2 class="slider-title">Location d'appartements dans le Finistère Sud</h2>
    </section>
    <h3 class="title-form">Chercher une disponibilité</h3>
    <form class="home-form search" action="process.php<--a définir-->">
        <input class="input" type="date" name="trip-start" id="start" value='<?php echo date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("Y"))); ?>'>
        <input class="input" type="date" name="trip-arrival" id="arrival" value='<?php echo date("Y-m-d", mktime(0, 0, 0, date("m"), date("d") + 10, date("Y"))); ?>'>
        <input class="inputbutton" type="submit" value="Rechercher">
    </form>

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
    <div class="section-button">
        <a href="?action=apartment" class="seeall">Voir&nbsptout</a>
    </div>
    <section class="prez-banner">
        <h5 class="prez-title">Présentation</h5>
        <p class="prez-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos accusantium
            obcaecati
            eveniet vel nobis adipisci fugit odit ad in, quaerat animi quam veritatis tempora ullam laborum,
            necessitatibus architecto quibusdam placeat?</p>
    </section>

    <!-- <section>
        <h6>Nos dernières actualités :</h6>
        <div>
            <img src="public/img/articles/643fed6fa2775.jpg" alt="vieux bâteau bleu à quai">
            <img src="public/img/articles/643feea92f2b7.jpg" alt="Chemin en bois en bord de côte">
            <img src="public/img/articles/643ff02c9acec.jpg" alt="maison dans la campagne finisterienne">
            <img src="public/img/articles/643ff6f2a9f60.jpg" alt="côte sauvage du Finistère">
            <img src="public/img/articles/643ff74e78293.jpg" alt="ville close de Concarneau">
        </div>
        <div class="section-button">
        <a href="?action=news" class="seeall">Voir&nbsptout</a>
    </div>
    </section> -->



<!-- Chargement Footer -->
<?php require_once __DIR__ . '/layouts/footer.php'; ?>