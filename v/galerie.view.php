<?php

//on instancie une fois la classe VignetteManager dans un objet, variable, pour utiliser ses fonctions
$postManager = new PostManager();

ob_start();
?>
    <div id="articles">
        <section id="images-view">
            <?php

            //dans cette FOR, on va cibler l'image avec le getter via l instanciation manager d'images
            for ($i = 0; $i < count($tableauDesPostsRecuperes); $i++) : ?>
                <div>
                    <a href="<?= URL ?>/galerie/p/<?= $tableauDesPostsRecuperes[$i]->getId();
                    ?>"><div><img src="public/images/<?=
                            $tableauDesPostsRecuperes[$i]->getImage()
                        ?>" alt=""></div>
                    <div><?= $tableauDesPostsRecuperes[$i]->getTitre() ?></div>
                    </a>
                </div>
            <?php endfor ?>

                <a class="green-button" id="aj-image" href="<?= URL ?>/galerie/a">Ajouter
                    une
                    image</a>
        </section>
    </div>
<?php
$titre = "Gallerie d'images";
$content = ob_get_clean();
require "template.php"
?>