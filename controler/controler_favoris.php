<?php
session_start();
/*----------------------------------------
                IMPORT
----------------------------------------*/
//Import view creation
    include './view/view_favoris.php';
//Connexion BDD
    include './util/connect_bdd.php';
//Import model
    include './model/model_favoris.php';
?>