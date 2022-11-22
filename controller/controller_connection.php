<?php

/*----------------------------------------
                IMPORT
----------------------------------------*/
//Import view connexion
    include './view/view_connection.php';
//Import model
    include './model/model_user.php';
//Import manager
    include './manager/manager_user.php';
/*----------------------------------------
                CONDITIONS
----------------------------------------*/
//We check if the button was pressed
    if (isset($_POST['connexion']))
    {//We check if fields are not empty
        if (isset($_POST['mail']) && isset($_POST['mdp'])
        && $_POST['mail'] !="" && $_POST['mdp'] !="")
        {
        //instanciation of a new Object
            $user = new ManagerUser("", "", "", "");
            $user -> setMailUser($_POST['mail']);
            //Stockage information in an array
            $test = $user->getUserByMail($bdd);
            
            if(!empty($test))
            {//Getting the hash
                $hash = $test[0]['pass_user'];
                //We check the correspondance between the password in the datatbase an in the form
                $password = password_verify($_POST['mdp'], $hash);
                if($password)
                {//Creating super globale SESSION
                    session_start();
                    $_SESSION['connected'] = true;
                    $_SESSION['login'] = $test[0]['login_user'];
                    $_SESSION['img'] = $test[0]['img_user'];
                    $_SESSION['id'] = $test[0]['id_user'];
                    //Connection message
                    echo 'Vous êtes connecté !';
                    //Redirection
                        
                    echo "<script>setTimeout(()=>{
                        document.location.href='/projet/favoris'; 
                        }, 100);
                    </script>";
                }
                else
                {
                    echo 'les informations sont incorrectes';
                }
            }
            else
            {
                echo 'Veuillez compléter les champs !';
            }
        }
    }
?>