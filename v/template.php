<!--la "template" de la majorité du site-->

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
    <link rel="stylesheet" media="screen and (max-width: 1000px)" href="CSS/sphones.css"/>
    <link rel="icon" type="image/png" href="PNG/clo-icon.png"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title><?=$titre?></title>
</head>
<body>
<main>

    <aside>

        <header>
<!--            on a ajoute URL en PHP avant accueil etc pour repartir a chaque fois du chemin de
 base : forced REBOOT au lieu d'ajouter encore galerie par erreur ... :)
 -->
            <a href="<?= URL ?>accueil"><h4 id="logo">Clovis | Site 2</h4></a>
            <nav id="pages">
                <a href="<?= URL ?>galerie">Galerie</a>
                <a href="<?= URL ?>liens-conseils">Liens, conseils</a>
                <a href="<?= URL ?>tutos-trouves">Tutoriels partagés</a>
                <a href="<?= URL ?>tuto-concu">Tutoriel conçu</a>
            </nav>
        </header>
        <div></div>
        <div class="socials">
            <p><a href="https://www.linkedin.com/in/clovis-reuss-b617b7189/" target="_blank"><img src="PNG/linkedin.png" alt=""></a></p>
            <p><a href="https://fr.wikipedia.org/wiki/Facebook" target="_blank"><img src="PNG/facebook.png" alt=""></a></p>
            <p><a href="https://fr.wikipedia.org/wiki/Twitter" target="_blank"><img src="PNG/twitter.png" alt=""></a></p>
            <p><a href="https://fr.wikipedia.org/wiki/Instagram" target="_blank"><img src="PNG/instagram.png" alt=""></a></p>
        </div>
        <div></div>
    </aside>

<!--    envoi, dans la classe "container" en bbotstrap, du $titre dans un h1-->
    <section id="central">
        <nav id="form-param">
            <p id="titre-set"><?=$titre?></p>
        </nav>
<!--        echo ou <= du contenu $content et appel du footer -require- -->
        <?php
        echo $content;
        require "footer.php";
        ?>
    </section>
    <div id="top-titre">
        <a id="menu-logo" href="#"><img src="PNG/menu.png" alt="menu"></a>
        <a href="index.php"><h3>Clovis | Site 2</h3></a>
    </div>
<!--    <div id="topline">-->
<!--        <div id="jour-nuit">-->
<!--            <button class="btn" id="enable-bright">-->
<!--                <img src="PNG/sun.png" alt="">-->
<!--            </button>-->
<!--            <button class="btn" id="enable-dark">-->
<!--                <img src="PNG/moon.png" alt="">-->
<!--            </button>-->
<!--        </div>-->
<!--    </div>-->
</main>
</body>
</html>