<?php ob_start(); ?>

    <div id="articles">
        <article>
            <?php
            include "v/fenetre-tuto-concu.view.php";
            ?>
        </article>

    </div>
<?php
$titre = "Tutoriel conçu";
$content = ob_get_clean();
require "v/template.php"
?>