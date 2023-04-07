<!-- Chargement Header -->
<?php require_once __DIR__ . '/layouts/header.php'; ?>

<main>
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


        <article class="article-home">
            <img class="article-img" src="public/img/appt3quimperle/20220515_175817.jpg" alt="">
            <div class="article-body">
                <h4 class="article-title">Appartement T2</h4>
                <p class="article-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et enim,
                    perferendis quibusdam iure ex neque cum fugit. Atque unde, ipsum eius, quam sint velit iusto.
                </p>
                <a href="#" class="article-button">Réserver</a>
            </div>
        </article>
        <article class="article-home">
            <img class="article-img" src="public/img/appt3quimperle/20220515_175817.jpg" alt="">
            <div class="article-body">
                <h4 class="article-title">Appartement T2</h4>
                <p class="article-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et enim,
                    perferendis quibusdam iure ex neque cum fugit. Atque unde, ipsum eius, quam sint velit iusto.
                </p>
                <a href="#" class="article-button">Réserver</a>
            </div>
        </article>
        <article class="article-home">
            <img class="article-img" src="public/img/appt3quimperle/20220515_175817.jpg" alt="">
            <div class="article-body">
                <h4 class="article-title">Appartement T2</h4>
                <p class="article-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et enim,
                    perferendis quibusdam iure ex neque cum fugit. Atque unde, ipsum eius, quam sint velit iusto.
                </p>
                <a href="#" class="article-button">Réserver</a>
            </div>
        </article>
        <article class="article-home">
            <img class="article-img" src="public/img/appt3quimperle/20220515_175817.jpg" alt="">
            <div class="article-body">
                <h4 class="article-title">Appartement T2</h4>
                <p class="article-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et enim,
                    perferendis quibusdam iure ex neque cum fugit. Atque unde, ipsum eius, quam sint velit iusto.
                </p>
                <a href="#" class="article-button">Réserver</a>
            </div>
        </article>
    </article>
    <div class="section-button">
        <button class="seeall" type="submit">Voir&nbsptout</button>
    </div>
    <section class="prez-banner">
        <h5 class="prez-title">Présentation</h5>
        <p class="prez-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos accusantium
            obcaecati
            eveniet vel nobis adipisci fugit odit ad in, quaerat animi quam veritatis tempora ullam laborum,
            necessitatibus architecto quibusdam placeat?</p>
    </section>

    <article class="actus">
        <article class="actus-home">
            <img class="actus-img" src="public/img/actus/actus-fake.jpg" alt="">
            <h6 class="actus-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
            <p class="actus-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A magni rem
                quo
                sed quam itaque autem cupiditate mollitia voluptatibus. Nulla in unde consequatur ratione
                placeat
                libero, mollitia atque veritatis nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing
                elit.
                Et nobis aliquam asperiores voluptatibus dignissimos non ipsum impedit nemo? Quis ad commodi
                doloribus, assumenda temporibus consequatur et fugit repellat quaerat ratione!</p>
            <input class="actus-button" type="button" value="Lire...">
        </article>
        <article class="actus-home">

            <h6 class="actus-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
            <p class="actus-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A magni rem
                quo
                sed quam itaque autem cupiditate mollitia voluptatibus. Nulla in unde consequatur ratione
                placeat
                libero, mollitia atque veritatis nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing
                elit.
                Et nobis aliquam asperiores voluptatibus dignissimos non ipsum impedit nemo? Quis ad commodi
                doloribus, assumenda temporibus consequatur et fugit repellat quaerat ratione!</p>

            <input class="actus-button" type="button" value="Lire...">
            <img class="actus-img" src="public/img/actus/actus-fake.jpg" alt="">
        </article>
        <article class="actus-home">
            <img class="actus-img" src="public/img/actus/actus-fake.jpg" alt="">
            <h6 class="actus-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
            <p class="actus-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A magni rem
                quo
                sed quam itaque autem cupiditate mollitia voluptatibus. Nulla in unde consequatur ratione
                placeat
                libero, mollitia atque veritatis nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing
                elit.
                Et nobis aliquam asperiores voluptatibus dignissimos non ipsum impedit nemo? Quis ad commodi
                doloribus, assumenda temporibus consequatur et fugit repellat quaerat ratione!</p>
            <input class="actus-button" type="button" value="Lire...">
        </article>
        <div class="section-button">
            <button class="seeall" type="submit">Voir&nbsptout</button>
        </div>
    </article>

</main>

<!-- Chargement Footer -->
<?php require_once __DIR__ . '/layouts/footer.php'; ?>