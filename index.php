<?php
    /*-------------------------------------------
                    IMPORTS
    -------------------------------------------*/
    //Connexion BDD
    include './util/connect_bdd.php';
    //Functions
    include './util/functions.php';
    /*-------------------------------------------
                        TEST
    -------------------------------------------*/
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);

    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    /*-------------------------------------------
                        ROUTER
    -------------------------------------------*/
    //test de la valeur $path dans l'URL et import de la ressource
    switch($path){
    //route /routing/test -> ./test.php
    case $path === "/projet/":
    include "./controller/controller_connection.php";
    break;

    case $path === "/projet/inscription":
        include "./controller/controller_creation.php";
        break;

    case $path === "/projet/favoris":
        include "./controller/controller_bookmark.php"; 
        break;

            case $path === "/projet/deconnection":
        include "./controller/controller_deconnection.php"; 
        break;
    }
?>