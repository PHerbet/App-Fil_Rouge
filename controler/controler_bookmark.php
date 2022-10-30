<?php
session_start();
/*----------------------------------------
                IMPORT
----------------------------------------*/
//Import view creation
    include './view/view_bookmark.php';
//Connexion BDD
    include './util/connect_bdd.php';
//Import model
    include './model/model_bookmark.php';
?>