<?php
//interface à usage du manager de posts, afin de se connecter et charger la bdd dans l'objet $pdo

abstract class Model {

//    on doit mettre en private static ses variables, pour activer l'héritage vers l'enfant
    private static $pdo;

    private static function setMoiLaBdd() {

//        on injecte les info de connexion: langage (mysql), dedans le host, le nom de la base, le charset... et ensuite l user et pwd
        self::$pdo = new PDO("mysql:host=localhost; dbname=site-2_php-en-mvc; charset=utf8", "root", "");

//        parametrage de l'affichage des erreurs ? mais on dirait qu on pourrait y paramètrer d'autres choses...
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

//    fonction destinee a charger l'objet $pdo, si il est null, on chargera d'abord la bdd dans celui-ci
    protected function getMoiLaBdd() {
        if(self::$pdo == null) {
            self::setMoiLaBdd();
        }
        return self::$pdo;
    }
}