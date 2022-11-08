<?php

    class ManagerBookmark extends Bookmark {
        /*---------------------------------------------
                        METHODS
        ---------------------------------------------*/
        //bookmark creation
        public function addBookmark($bdd):void 
        {//instanciation of a new object
            $name = $this->getNameBookmark();
            $url = $this->getUrlBookmark();
            $desc = $this->getDescriptionBookmark();
            $img = $this->getImgBookmark();
            $id_user = $this->getIdUser();
            try
            {//SQL request
                $req = $bdd->prepare('INSERT INTO bookmark(name_bookmark, url_bookmark, description_bookmark, img_bookmark, id_user)
                VALUES (:name_bookmark, :url_bookmark, :description_bookmark, :img_bookmark, :id_user )');
                $req -> execute(array(
                    'name_bookmark' => $name,
                    'url_bookmark' => $url,
                    'description_bookmark' => $desc,
                    'img_bookmark' => $img,
                    'id_user' => $id_user,
                ));
            }//Catching and return exception:
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }
        }
        //Method to show the bookmark
        
    }
?>