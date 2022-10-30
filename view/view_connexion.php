<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/projet/asset/css/style_connexion.css">
    <title>Accueil</title>
</head>
<body>
    <!-- Connection form -->
    <div class="form"> <!-- form's div  -->
        <div> <!-- image's div -->
            <img name="logo" src="/projet/asset/img/logo.png" width= 50px height=auto>
        </div>
        <form action="" method="post">
            <label for="mail">E-mail :</label>
                <input type="mail" name="mail" id="mail" width=auto>
            <label for="pass">Mot de passe :</label>
                <input type="password" name="mdp" id="mdp">
                <input class="button" type="submit" name="connexion" value="Connexion">
                <p>Pas encore de compte?</p>
            <a href="/projet/inscription">Inscription</a>
        </form>
    </div>
</body>
</html>