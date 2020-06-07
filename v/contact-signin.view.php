<?php
//$servername = 'localhost';
//$username = 'root';
//$psw = '';
////connexion a la base de donnee
//$conn = new mysqli($servername, $username, $psw);
////verif connexion
//if ($conn->connect_error) {
//    die("Erreur de connexion: ". $conn->connect_error);
//} echo "Connexion réussie";
//$conn->query('DELETE FROM `users` WHERE `id` = `7`');
//?>

<?php ob_start(); ?>

    <div id="articles-forms-params">
        <article>
            <div class="conteneur-art" id="conteneur-form">
                <form method="POST" action="contact_me.php">
                    <div>
                        <p>Pseudonyme : </p>
                        <input type="text" class="obl" id="pseudo" name="pseudo" placeholder="obligatoire">
                    </div>
                    <div>
                        <p>Date de naissance : </p>
                        <input type="date" class="opt" name="d_naissance" placeholder="optionnel">
                    </div>
                    <div>
                        <p>Adresse e-mail : </p>
                        <input type="email" class="obl" id="mail" name="email" placeholder="obligatoire">
                    </div>


                    <div>
                        <p><strong>Je souscris à la newsletter :</strong></p>
                    </div>
                    <div>
                        <label class="switch">
                            <input type="checkbox" checked="checked" name="newsletter_active">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div>
                        <p><strong id="leftie">Je souhaite créer un compte</strong><br><strong>et j'accepte les <a href="" id="gene">conditions
                                    générales</a>
                            </strong>
                        </p>
                    </div>
                    <div>
                        <label class="switch">
                            <input type="checkbox" name="condition_acceptees">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div>
                        <p>Nouveau mot de passe : </p>
                        <input type="text" name="passwd" id="passwd" placeholder="obligatoire">
                    </div>
                    <div>
                        <p>Confirmer mot de passe : </p>
                        <input type="text" name="repasswrd" id="repasswd" placeholder="obligatoire">
                    </div>
                    <div>

                        <input type="text" id="message" name="message" placeholder="votre message...">
                    </div>
                    <div id="mes">
                        <input type="submit" class="green-button" id="valid-button" value="J'envoie le formulaire"/>
                    </div>

                </form>
        </article>

    </div>
<?php
$titre = "Formulaire de contact 🗣 / Création de compte 🧾";
$content = ob_get_clean();
require "v/template.php";
?>