<?php ob_start(); ?>
    <div id="articles">
        <article>
            <div class="conteneur-art" )>
                <a href="<?= URL?>galerie"><h2>Galerie</h2>
                <img src="public/images/1.png" alt="">
                </a>
            </div>
        </article>
        <article>
            <img src="" alt="">
            <div class="conteneur-art">
                <a href="<?php URL ?>liens-conseils">
                <h2>Liens, conseils (cliquez pour la page complète) </h2></a>
                <?php
                include "v/fenetre-liens.view.php";
                ?>
            </div>
        </article>
        <article>
            <img src="" alt="">
            <div class="conteneur-art">
                <a href="<?php URL ?>tutos-trouves">
                    <h2>Tutos shared (cliquez pour la page complète)</h2></a>
                <?php
                include "v/fenetre-tutos.view.php";
                ?>
            </div>
        </article>
        <article>
            <img src="" alt="">
            <div class="conteneur-art">
                <a href="<?php URL ?>tuto-concu">
                    <h2>Mon tuto (cliquez pour la page complète)</h2></a>
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