<?php
/*----------------------------------------
                IMPORT
----------------------------------------*/
//Import view creation
    include './view/view_creation.php';
//Connexion BDD
    include './util/connect_bdd.php';
//Import model
    include './model/model_user.php';
/*----------------------------------------
                CONDITIONS
----------------------------------------*/
//We check that the require conditions for create an account are present and not null
if (isset($_POST['inscription']))
{//We check the conditions
    if (isset($_POST['login']) && isset($_POST['mail']) && isset($_POST['mdp'])
    && $_POST['login'] !="" && $_POST['mail'] !="" && $_POST['mdp'] !="")
    {
        //instanciation of a new Object
        $user = new User(null, null, null, null);
        $user -> setLoginUser($_POST['login']);
        $user -> setMailUser($_POST['mail']);
        $user -> setImgUser($_POST['img']);
        {//Hash password
            $option= 10;
            echo $user->setPassUser(password_hash($_POST['mdp'],PASSWORD_BCRYPT),$option);

        //Checking if mail are already in the db
            $mail = $user->show_user_by_mail($bdd);
            if ($mail)
            {//Using method add_user to create an account
                // var_dump($mail);
                echo' les informations sont incorrecte';
            }
            else
            {//Error message for existing mail in database
                // var_dump($mail);
                $user->add_user($bdd);
                echo '<p> Inscription réussie!<p>';
            }
        }
    }
    else
    {
        echo '<p> Veuillez remplir les champs du formulaires<p>';
    }
}
?>