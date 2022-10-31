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
            // $user -> setImgUser($_POST['img']);
            //Stockage the information in an array
            
            $test = $user->show_user_by_mail($bdd);
            
            var_dump($user);//If the user exist in database, we check the password
            if(!empty($test))
            {//Getting the hash
                $hash = $test[0]['pass_user'];
                var_dump($hash);
                //We check the correspondance between the password in the datatbase an in the form
                $password = password_verify($_POST['mdp'], $hash);
                var_dump($password);
                if($password)
                {//Creating super globale SESSION
                    $_SESSION['connected'] = true;
                    $_SESSION['login'] = $test[0]['login'];
                    $_SESSION['mail'] = $test[0]['mail'];
                    $_SESSION['pass'] = $test[0]['pass'];
                    $_SESSION['img'] = $test[0]['img'];
                    $_SESSION['statut'] = $test[0]['statut'];
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