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
                echo "<script>setTimeout(()=>{
                    document.location.href='/projet/favoris'; 
                    }, 100);
                </script>";
                // die('Erreur : '.$e->getMessage());
            }
        }
        //Method to show the bookmark
        public function showAllBookmark($bdd,$id)
        {
            try
            {
                $req = $bdd->prepare("SELECT url_bookmark, name_bookmark, description_bookmark, img_bookmark, id_user 
                FROM bookmark WHERE id_user = :id_user ORDER BY name_bookmark ASC");
                $req->execute(array(
                    'id_user' => $id));
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                return $data;
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>