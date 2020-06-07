<?php
//    on cree une constante contenant http ou https selon le cas et ensuite notre http
//      host, nom de domaine
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" :
        "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "c/PostController.controller.php";
$postController = new PostController();

try {
    if (empty($_GET['page'])) {
        require "v/accueil.view.php";
    } else {

//        on cree le tableau $url qui va contenir [0]= galerie, [1]= modifier depuis (url)/
//galerie/modifier etc.     FILTER SANITIZE : Améliore sécurité only
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);

        switch ($url[0]) {
            case "accueil":
                require "v/accueil.view.php";
                break;
            case "galerie":
                if (empty($url[1])) {
                    $postController->afficherPosts();
                } else {
                    switch ($url[1]) {
                        case "p" :
//                            on demandera au postController d'afficher le post précisé en $url[2]
                            $postController->afficherPost($url[2]);
                            break;
                        case "a" :
                            $postController->ajouterPost();
                            break;
                        case "av" :
                            $postController->ajouterPostValidation();
                            break;
                        case "s" :
                            echo "supprimer un post";
                            break;

                        default :
                            throw new Exception("La page galerie/$url[1] n'existe pas");
                    }

                }
//                $postController->afficherPosts();
                break;
            case "liens-conseils":
                require "v/liens-conseils.view.php";
                break;
            case "tutos-trouves":
                require "v/tutos-trouves.view.php";
                break;
            case "tuto-concu":
                require "v/tuto-concu.view.php";
                break;
            case "contact-signin":
                require "v/contact-signin.view.php";
                break;
            case "parametres":
                require "v/parametres.view.php";
                break;
            case "conditions":
                require "v/conditions.view.php";
                break;
            case "ajout-post":
                require "v/ajout-post.view.php";
                break;
            default :
                throw new Exception("La page $url[0] n'existe pas");
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
