<?php
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
    case $path === "/projet/accueil":
    include "./controler/controler_connexion.php";
    break;

    case $path === "/projet/connexion":
        include "./controler/controler_connexion.php";
        break;

    case $path === "/projet/inscription":
        include "./controler/controler_creation.php";
        break;

    case $path === "/projet/favoris":
        include "./controler/controler_favoris.php"; 
        break;

            case $path === "/projet/deconnexion":
        include "./controler/controler_deconnexion.php"; 
        break;
    }
?>