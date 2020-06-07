<?php ob_start(); ?>

    <div id="articles">
        <article>
            <?php
            include "v/fenetre-tutos.view.php";
            ?>
        </article>

    </div>
<?php
$titre = "Tutoriels partagés";
$content = ob_get_clean();
require "v/template.php"
?>