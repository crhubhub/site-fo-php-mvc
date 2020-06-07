<?php
require_once "m/PostManager.class.php";


//    demandée par l'index, cette classe CONTROLLER chargera des donnees et fabriquera un objet
//    qui stocke le nécessaire. ici: un array d'arrays contenant les infos des posts

//    celle-ci instancie un objet prive au nom de la classe ou elle travaille afin de l'utiliser ($postManager)

class PostController
{
    private $postManager;

    public function __construct()
    {

//        lors d'une instanciation, ce controleur instanciera auto un $livreManager
//        et executera la f° chargement des posts
        $this->postManager = new PostManager();
        $this->postManager->ChargeMoiLesPosts();
    }


//    l'unique fonction du PostController
    public function afficherPosts()
    {
//        cette f° crée une variable contenant les infos nécessaires à la vue galerie.view.php.
        $tableauDesPostsRecuperes = $this->postManager->getPosts();

//        et celle-ci préparée, cette même f° demande l'affichage de la vue galerie.view.php
        require "v/galerie.view.php";
    }

    public function afficherPost($PostId)
    {
        $post = $this->postManager->getPostById($PostId);
        require "v/afficherPost.view.php";
    }

    public function ajouterPost()
    {
        require "v/ajout-post.view.php";
    }

    public function ajouterPostValidation()
    {
        $file = $_FILES['image'];
        $repertoire = "public/images/";
        $nomImageAjoutee = $this->ajoutImage($file, $repertoire);

        $this->postManager->ajouterPostDansLaBdd($_POST['image'],$_POST['titre'],$_POST['email'],
            $_POST['mdp'],
            $_POST['conditions-acceptees']);
//        a la fin du traitement précedant, redirection vers ce lien
        header('Location : ' . URL . "galerie");
    }

    private function ajoutImage($file, $dir)
    {
        if (!isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez choisir une image");

        if (!file_exists($dir)) mkdir($dir, 0777);

        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $random = rand(0, 99999);
        $target_file = $dir . $random . "_" . $file['name'];

        if (!getimagesize($file["tmp_name"]))
            throw new Exception("Le fichier n'est pas une image");
        if ($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif")
            throw new Exception("L'extension du fichier n'est pas reconnu");
        if (file_exists($target_file))
            throw new Exception("Le fichier existe déjà");
        if ($file['size'] > 500000)
            throw new Exception("Le fichier est trop gros");
        if (!move_uploaded_file($file['tmp_name'], $target_file))
            throw new Exception("l'ajout de l'image n'a pas fonctionné");
        else return ($random . "_" . $file['name']);
    }
}