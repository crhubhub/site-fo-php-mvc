<!--demarrage du buffer-->
<?php ob_start(); ?>
    <div id="articles-forms-params">
        <article>
            <div class="conteneur-art">
                <div class="pm-box">
                    <h4>Connexion</h4>
                    <form action="v/parameters.php" id="centrage" method="post">
                        <input type="email" name="email" id="mail2" placeholder="Adresse e-mail">
                        <input type="text" name="password" id="passwd2" placeholder="Mot de passe">
                        <input type="submit" class="green-button" value="Je me connecte"/>
                    </form>
                </div>

                <div class="pm-box">
                    <h4>
                        <form action="v/parameters.php" method="post">
                            <input type="email" id="mail3" name="email" placeholder="Adresse e-mail">
                            <input type="submit" class="green-button" value="Je me désabonne de la newsletter"/>
                        </form>
                    </h4>
                </div>


            </div>
        </article>

    </div>
<?php
//déclaration du titre de chaque page
$titre = "Paramètres 🛠";

//j'ai ajoute la decla de laccroche, optionnelle ici
$accroche = "Bonjour ...";

//chargement du buffer (contenant le html situe entre cette balise php ci et celle avec le ob_start() en haut)
$content = ob_get_clean();

//demande de la template qui, elle, ajoutera le content (par un echo) venant de cette page-ci (auto),
//et ensuite appelera le footer par exemple (require). voir template
require "v/template.php"
?>