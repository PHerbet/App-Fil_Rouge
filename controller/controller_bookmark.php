<?php
session_start();
$id = $_SESSION['id'];

/*----------------------------------------
                IMPORT
----------------------------------------*/
//Import manager
    include './manager/manager_bookmark.php';

/*----------------------------------------
                CONDITIONS
----------------------------------------*/
//We check if the button was pressed
    if (isset($_POST['submit']))
    {//We check the conditions
        if(isset($_POST['url']) && $_POST['url'] !='')
        {
            $url = $_POST['url'];
            //Get bookmark informations 
            $info = getBookmark($url);
            //Checking information has returned
            if($info == null){
                //Error message (need to be updated)
                echo "<script>alert('Mauvais Url')</script>";
            }
            else{//cleanning variable
                $name = cleanseCode($info[0]);
                $desc = cleanseCode($info[1]);
                $img  = cleanseCode($info[2]);
                $cleanUrl = cleanseCode($url);
                //instanciation of new object
                $bookmark = new ManagerBookmark(null, null, null, null);
                $bookmark -> setUrlBookmark($cleanUrl);
                $bookmark -> setNameBookmark($name);
                $bookmark -> setDescriptionBookmark($desc);
                $bookmark -> setImgBookmark($img);
                $bookmark -> setIdUser($id);
                //Check if thebookmark exist
                $test = $bookmark->checkBookmark($bdd, $id, $cleanUrl);
                if(empty($test)){
                    try{
                        $bookmark->addBookmark($bdd);
                        //Validation message (need to be update): 
                        echo "<script>alert('Favoris ajouté!')</script>";
                        // Refresh the page 
                        echo "<script>setTimeout(()=>{
                            document.location.href='/projet/favoris'; 
                            }, 100);
                        </script>";
                    }
                    catch(Exception $e)
                    {
                        //Error message (need to be update): 
                        echo "<script>alert('Problème d'enregistrement')</script>";
                        // Refresh the page 
                        // echo "<script>setTimeout(()=>{
                        //     document.location.href='/projet/favoris'; 
                        //     }, 100);
                        // </script>";
                    }
                }
                else
                {
                    //Error message (need to be updated)
                    echo "<script>alert('Favoris déjà existant!')</script>";
                    echo "<script>setTimeout(()=>{
                    document.location.href='/projet/favoris'; 
                    }, 100);
                </script>";
                }
            }
        }
        else 
        {
            //Error message (need to be updated)
            echo "<script>alert('Aucune URL')</script>";
        }
    }
    //We show all the bookmark of the account with the id
    $bookmark = new ManagerBookmark(null, null, null, null);
    $data = $bookmark->showAllBookmark($bdd, $id);

/*----------------------------------------
                IMPORT
----------------------------------------*/
//Import view creation at last for the data
include './view/view_bookmark.php';

?>
