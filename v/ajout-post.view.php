<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout d'une image</title>
</head>
<body>
<p>Attention! Si vous avez déja posté une image, l'effort fourni sera vain.
    ..😿</p>

<!--obligation de preciser enctype="multipart/form-data" si on fait passer des fichiers par le -->
<!--formulaire-->
<form method="post" action="<?= URL ?>galerie/av" enctype="multipart/form-data">
    <div>
        <label for="email">Email address</label>
        <input type="email" placeholder="Votre email" id="email" name="email">
    </div>
    <div>
        <label for="mdp">Mot de passe</label>
        <input type="password" placeholder="Votre mdp" id="mdp" name="mdp">
    </div>
    <div>
        <label for="image">Image (type: jpg, gif ou png) : </label>
        <input type="file" id="image" name="image">
    </div>
    <div>
        <label for="titre">Titre</label>
        <input type="text" placeholder="Choisissez un titre" id="titre" name="titre">
    </div>
    <div>
        <input type="checkbox" id="conditions-acceptees" name="conditions-acceptees">
        <label for="conditions">J'accepte les conditions
            générales</label>
    </div>
    <button type="submit" class="">Valider</button>
</form>
</body>
</html>