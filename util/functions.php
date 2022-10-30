<?php
    /*---------------------------------------------
                    IMPORTS
    ---------------------------------------------*/
    //import phpscrapper library
    use spekulatius\phpscrapper;
    /*---------------------------------------------
                    FUNCTIONS
    ---------------------------------------------*/
    function get_bookmark($url){
        require "./vendor/autoload";
        $url=$_POST['url'];
        $web = new \spekulatius\phpscraper;
        $web->go($url);
        if($web->openGraph['og:title']){
            $web->openGraph['og:title'];   
        }else{
            $name = $web->title;
        };
        if($web->openGraph['og:image']){
            $img = $web->openGraph['og:img'];
        }else{
            $img = $web->image;
        }
        if($web->openGraph['og:description']){
            $desc = $web->openGraph['og:description'];   
        }else{
            $desc = $web->description;
        };
        return($name,$title ,$img);
    }

?>