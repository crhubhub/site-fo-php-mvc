<?php
require_once "m/Model.class.php";
require_once "m/Post.class.php";

//  dans cette classe, on fabrique des post (depuis la bdd distante) que l'on insere dans un array de posts

class PostManager extends Model
{

    private $posts;  //tab de posts

//    utile pour ajouter les posts dans le tableau, un par un
    public function ajoutPost($post)
    {
        $this->posts[] = $post;
    }

//  rends accessible les posts
    public function getPosts()
    {
        return $this->posts;
    }

//on cree une fonction qui executera une requete pour nous rendre dispo les posts... SELECT
    public function ChargeMoiLesPosts()
    {

//        on prepare la requete, securité :)
        $req = $this->getMoiLaBdd()->prepare("SELECT * FROM posts ORDER BY id DESC");
//        on exécute la requête
        $req->execute();
//        on instancie et on documente le tableau $posts,       (FETCH ASSOC retire les doublons)
        $mesPosts = $req->fetchAll(PDO::FETCH_ASSOC);
//        fermeture de la requete
        $req->closeCursor();

        foreach ($mesPosts as $post) {
            $p = new Post($post['id'], $post['titre'], $post['image']);
            $this->ajoutPost($p);
        }

    }

    public function getPostById($PostId)
    {
//        on va utilisee la variable posts cree plus tot, trouver le bon post et le retourner
        for ($i = 0; $i < count($this->posts); $i++) {
            if ($this->posts[$i]->getId() === $PostId) {
                return $this->posts[$i];
            }
        }
    }

    public function ajouterPostDansLaBdd($image, $titre, $email, $mdp, $conditionsAcceptees)
    {
        $req = "INSERT INTO posts values (null, :image, :titre, :email)";
        $stmt = $this->getMoiLaBdd()->prepare($req);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        $stmt->bindValue(":titre", $titre, PDO::PARAM_STR);
        $stmt->bindValue(":email", $email, PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if ($resultat > 0)
        {
            $post = new Post($this->getMoiLaBdd()->lastInsertId(), $titre, $image);
            $this->ajoutPost($post);
        }
    }
}


