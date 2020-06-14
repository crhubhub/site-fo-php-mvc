<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        html {
            background: #c6dabf;
        }

        .conteneur-art {
            padding: 3em;

        }

        article {
            background: #88d498;
            margin: 1em 0;
            padding: 1em;
        }

        .blanco {
            /*height: 0.5em;*/
            /*width: 108%;*/
            /*background: #c6dabf;*/
            /*margin-left: -3em;*/
        }
    </style>
    <title>MY TUTO</title>
</head>
<body>

<a href="accueil">Retour à l'accueil</a>
<div class="conteneur-art" id="conteneur-art-petit">
    <h3>Dans ce tutoriel, je vous propose quelques exercices a réaliser dans une fenêtre séparée
        en cliquant sur le lien ci-dessous</h3>
    <h4><a href="http://www.cssdesk.com/35KkA" target="_blank">Cliquez ICI (target="blank"
            ) 👍</a></h4>
    <article>
        <p>Voici ce que l'affichage de 3 div dans une section donnera<strong> sans instruction au niveau
            du css.</strong></p>
        <p>(les éléments section et div étant de type block, ils prennent toute la largeur
            disponible et imposent donc à l'élément suivant le passage à la ligne).</p>
        <p></p>
        <img src="public/tuto-fait/1.png" class="illu" alt="">
        <img src="public/tuto-fait/1b.png" class="illub" alt="">
    </article>
    <article>
        <p>Le positionnement RELATIVE permet le décalage d'un élément
            sans que cela n'influence le comportement des éléments suivants ou précédents</p>
        <p>Essayez d'ajouter à la #div 1: <br><br><strong>position:relative;<br>
            left: 20px;
            <br>top: 5px;</strong> ...et voyons le résultat !</p>
        <p></p>
        <img src="public/tuto-fait/2.png" class="illu" alt="">
        <img src="public/tuto-fait/2b.png" class="illub" alt="">
        <p>la DIV 1 va <strong>se décaler et passer un plan au-dessus du reste et les autres éléments</strong>
            gardent leur position.</p>
    </article>
    <article>
        <p><strong>Le positionnement ABSOLUTE transforme DIV1 en élément inline, sa largeur est donc réduite
            à la taille du texte</strong>,
            et DIV1 passe au premier plan.
        </p>
        <p> A partir d'ici, les autres éléments se comporteront toujours comme si DIV1
            était absent.</p>
        <p>Modifiez à la #div 1: <strong>position: absolute;</strong>
            <br>...et voyons le résultat !</p>
        <img src="public/tuto-fait/3.png" class="illu" alt="">
        <img src="public/tuto-fait/3b.png" class="illub" alt="">
        <p>DIV1 <strong>passe au premier plan</strong> (z-index: 1 automatique) et va <strong>cacher</strong> une partie de
                DIV2
            car autres éléments se placent sans savoir que DIV1 est au même endroit.</p>
    </article>
    <article>
        <p>Passons l'index de calque à <strong>z-index: -1</strong> sur la DIV 1</p>
        <p>...et admirons le résultat</p>
        <p></p>
        <img src="public/tuto-fait/4.png" class="illu" alt="">
        <img src="public/tuto-fait/4b.png" class="illub" alt="">
        <p>DIV1 <strong>disparait sous les autres éléments.</strong></p>
    </article>
    <article>
        <p>Maintenant, <strong>supprimez l'instruction de z-index</strong> et ajoutez la valeur de
            positionnement <strong>top:
            0px</strong>
            .</p>
        <p></p>
        <p></p>
        <img src="public/tuto-fait/5.png" class="illu" alt="">
        <img src="public/tuto-fait/5b.png" class="illub" alt="">
        <p>DIV1 <strong>repasse au premier plan et va se coller en haut de la page
            depuis sa position initiale.</strong></p>
    </article>
    <article>
        <p>De plus, si vous <strong>ajoutez à son parent TOUTE AUTRE POSITION que celle par défaut </strong>
            (nommée static), l'élément DIV 1 limitera son déplacement à la zone du parent.</p>
            <p>(Non-fonctionnel dans l'éditeur on-line que je vous propose, malheureusement. 😖)
            </p>
        <img src="public/tuto-fait/6.png" class="illu" alt="">
        <img src="public/tuto-fait/6b.png" class="illub" alt="">
    </article>
    <article>
        <p>Le positionnement FIXED permettra de placer une flèche de retour en haut, par exemple.
            Cette fois encore, les autres éléments se comportement se comportent comme si DIV1
            était absent.</p>
        <p>Ajouter à la #div 1:<br> <br><strong>position: fixed;
            <br>top: 150px;
            <br>right: 0;</strong></p>
        <p>...et voyons le résultat !</p>
        <img src="public/tuto-fait/7.png" class="illu" alt="">
        <img src="public/tuto-fait/7b.png" class="illub" alt="">
        <p>La DIV1 <strong>restera toujours au même endroit, même en cas de scroll.</strong></p>
    </article>
    <article>
        <p>Enfin, en cas de positionnement STICKY <strong> ET </strong>d'une demande de positionnement
            (exemple: top: 10px;)
            sur la DIV1, celle-ci aura un comportement à priori tout régulier, mais respectera ce <strong>top:10px</strong>
            comme une <strong>distance minimale à respecter.</strong>
            </p>
        <p>🥱 De nouveau, cela ne fonctionne pas dans l'éditeur online… à tester sur votre éditeur
            habituel.</p>
        <p>Voici un aperçu… c'est parfait pour un menu qui doit rester en haut de la page lors du scroll,
            <strong>mais qui n'était pas tout en haut à la base.</strong> (section 1 était
            au-dessus)</p>
        <img src="public/tuto-fait/8.png" class="illu" alt="">
        <img src="public/tuto-fait/8b.png" class="illub" alt="">
        <img src="public/tuto-fait/8c.png" class="illub" alt="">
        <p></p>
    </article>
    <article>
        <p><strong>On a fait le tour des positionnements de base.</strong>
            </p>
        <p>Cependant, 2 autres paradigmes très efficaces pour le responsive existent: </p>
        <p><strong>Flexbox</strong> et <strong>Grid</strong>
            Ces 2 systèmes peuvent se mélanger, mais <strong>on choisira plutôt flexbox OU grid</strong> en addition du système classique</p>
        <p>Vous pouvez <strong>cliquer sur les images</strong> afin d'acceder aux exercices</p>
        <a href="https://codepip.com/games/grid-garden/" target="_blank"><img
                    src="public/tuto-fait/10.png"
                                                               class="illu" alt=""></a>
        <a href="https://codepip.com/games/flexbox-froggy/"target="_blank"><img
                    src="public/tuto-fait/9.png" class="illub" alt=""></a>

    </article>

</div>
</body>
</html>