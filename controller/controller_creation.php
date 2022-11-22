<?php
    /*----------------------------------------
                    IMPORT
    ----------------------------------------*/
    //Import view creation
        include './view/view_creation.php';
    //Import model
        include './model/model_user.php';
    //Import manager
        include './manager/manager_user.php';
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
            $user = new ManagerUser(null, null, null, null);
            $user -> setLoginUser($_POST['login']);
            $user -> setMailUser($_POST['mail']);
            $user -> setImgUser($_POST['img']);
            {//Hash password
                $option= 10;
                $user->setPassUser(password_hash($_POST['mdp'],PASSWORD_BCRYPT),$option);

            //Checking if mail are already in the db
                $mail = $user->getUserByMail($bdd);
                if ($mail)
                {//Using method add_user to create an account
                    echo' les informations sont incorrecte';
                }
                else
                {//Error message for existing mail in database
                    $user->addUser($bdd);
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