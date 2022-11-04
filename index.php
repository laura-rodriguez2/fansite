<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="fansite.css" />
    <link rel="stylesheet" type="text/css" href="header/footer/header.css" />
    <link rel="stylesheet" type="text/css" href="header/footer/footer.css" />
    <title>Accueil</title>
</head>

<body>
    <header>
        <?php include "header/footer/header.html" ?>
    </header>

    <main>
        <section id="banner">
            <aside>
                <h1>NEW TOUR</h1>
                <p>Europe 2023</p>
            </aside>
        </section>

        <section class="hero-image">
            <section class="hero-text">
                <h1>ACTUALITES</h1>
                <h2>Concert à Paris</h2>
                <p>Le lundi 6 mars 2023</p>
                <a href="https://veryshow.fnacspectacles.com/place-spectacle/ticket-evenement/pop-rock-folk-starset-manelyse-lt.html" target="blank"><button class="button1">Tickets</button></a>
            </section>
        </section>

        <section class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ZfiSaBxGB9E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
    </main>

    <footer>
        <?php include "header/footer/footer.html" ?>
    </footer>
</body>

</html>