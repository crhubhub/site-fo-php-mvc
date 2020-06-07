<?php

//la classe Post, jusqu'en bas
class Post {
    private $id;
    private $titre;
    private $image;

//    le constructeur
    public function __construct ($id, $titre, $image) {
        $this->id = $id;
        $this->titre = $titre;
        $this->image = $image;

    }

//    les getters et les setters, pour requetes depuis manager de post, par ex
    public function getId(){return $this->id;}
    public function setId($id): void{$this->id = $id;}

    public function getTitre(){return $this->titre;}
    public function setTitre($titre): void{$this->titre = $titre;}

    public function getImage(){return $this->image;}
    public function setImage($image): void{$this->image = $image;}
}