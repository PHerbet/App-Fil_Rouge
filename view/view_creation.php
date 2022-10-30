<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/projet/asset/css/style_connexion.css">
    <title>Inscription</title>
</head>
<body>
    <!-- Account creation form-->
    <div class="form"> <!-- form's div  -->
        <div> <!-- image's div -->
            <img name="logo" src="/projet/asset/img/logo.png" width= 50px height=auto>
        </div>
        <form action="" method="post">
            <label for="login">Login :</label>
                <input type="text" name="login" id="login">
            <label for="mail">E-mail :</label>
                <input type="mail" name="mail" id="mail">
            <label for="pass">Mot de passe :</label>
                <input type="password" name="mdp" id="mdp">
            <label for="pass">Confirmation du mot de passe :</label>
                <input type="password" name="mdp2" id="mdp2">
            <label for="img">Image :</label>
                <input type="file" name="img" id="img">
            <input class="button" type="submit" name="inscription" value="Inscription">
            <a href="/projet/accueil">Connection</a>
        </form>
    </div>
</body>
</html>