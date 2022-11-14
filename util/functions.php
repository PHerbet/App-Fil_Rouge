<?php
    /*---------------------------------------------
                    IMPORTS
    ---------------------------------------------*/
    //import phpscrapper library
    use spekulatius\phpscrapper;
    /*---------------------------------------------
                    FUNCTIONS
    ---------------------------------------------*/
    //function for getting bookmark information with the URL
    function getBookmark($url){
            require "./vendor/autoload.php";

            try{
            $web = new \spekulatius\phpscraper;
            $web->go($url);
            if($web->openGraph['og:title']){
                $name = $web->openGraph['og:title'];   
            }else{
                $name = $web->title;
            };
            if($web->openGraph['og:image']){
                $img = $web->openGraph['og:image'];
            }else{      
                $img = $web->image;
            }
            if($web->openGraph['og:description']){
                $desc = $web->openGraph['og:description'];   
            }else{
                $desc = $web->description;
            };
            return [$name,$desc,$img];
        }
        catch (Exception $e){
            // echo "<script>alert('Mauvais Url')</script>";
            // echo "<script>setTimeout(()=>{
            //     document.location.href='/projet/favoris'; 
            //     }, 100);
            // </script>";

        }
    }

    //cleanse code function against SQL injection or XSS
    function cleanseCode($input){
        return htmlspecialchars(strip_tags(trim($input)));
    }

?>