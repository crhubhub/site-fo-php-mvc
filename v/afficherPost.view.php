<?php
$titre = $post->getTitre();
$way = $post->getImage();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../CSS/styles.css">
    <title><?= $titre ?></title>
</head>
<body>
<div id="images-view">
    <img src="../public/images/<?= $way ?>>" alt="">
    <h2><?= $titre ?></h2>
    <h2>( <?= $way ?> )</h2>
    <a href="<?= URL ?>galerie"><p>retour</p></a>
<!--    <a href="--><?//= URL ?><!--galerie">-->
        <p>modifier</p>
<!--    </a>-->
<!--    <a href="--><?//= URL ?><!--galerie">-->
        <p>supprimer</p>
<!--    </a>-->
</div>

</body>
</html>