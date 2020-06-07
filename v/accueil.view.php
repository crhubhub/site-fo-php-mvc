<?php ob_start(); ?>
    <div id="articles">
        <article>
            <div class="conteneur-art" )>
                <a href="<?= URL?>galerie"><h4>GALERIE D'IMAGES</h4>
                <img src="public/images/1.png" alt="">
                </a>
            </div>
        </article>
        <article>
            <img src="" alt="">
            <div class="conteneur-art">
                <a href="<?php URL ?>liens-conseils">
                <h4>LIENS / CONSEILS</h4></a>
                <?php
                include "v/fenetre-liens.view.php";
                ?>
            </div>
        </article>
        <article>
            <img src="" alt="">
            <div class="conteneur-art">
                <a href="<?php URL ?>tutos-trouves">
                    <h4>JE PARTAGE DES TUTOS</h4></a>
                <?php
                include "v/fenetre-tutos.view.php";
                ?>
            </div>
        </article>
        <article>
            <img src="" alt="">
            <div class="conteneur-art">
                <a href="<?php URL ?>tuto-concu">
                    <h4>J'AI CONCU UN TUTO</h4></a>
                <?php
                include "v/fenetre-tuto-concu.view.php";
                ?>
            </div>
        </article>
    </div>'
<?php
$titre = "Bienvenue sur mon site 2 : PHP en MVC";
$content = ob_get_clean();
require "v/template.php"
?>