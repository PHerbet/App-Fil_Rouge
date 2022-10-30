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
        $utilisateur = new Utilisateur(null, null, null, null);
        $utilisateur -> setLoginUtilisateur($_POST['login']);
        $utilisateur -> setMailUtilisateur($_POST['mail']);
        $utilisateur -> setImgUtilisateur($_POST['img']);
        {//Hash password
            $option= 10;
            echo $utilisateur->setMdpUtilisateur(password_hash($_POST['mdp'],PASSWORD_BCRYPT),$option);

        //Checking if mail are already in the db
            $mail = $utilisateur->show_user_by_mail($bdd);
            if ($mail)
            {//Using method add_utilisateur to create an account
                // var_dump($mail);
                echo' les informations sont incorrecte';
            }
            else
            {//Error message for existing mail in database
                // var_dump($mail);
                $utilisateur->add_utilisateur($bdd);
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