<?php ob_start(); ?>

    <div id="articles">
        <article>
            <?php
            include "v/fenetre-liens.view.php";
            ?>
        </article>

    </div>
<?php
$titre = "Liens, conseils";
$content = ob_get_clean();
require "v/template.php"
?>