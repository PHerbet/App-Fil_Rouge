<?php
session_start();

/*----------------------------------------
                IMPORT
----------------------------------------*/

//Import model
    include './model/model_bookmark.php';
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
            $id = $_SESSION['id'];
            //Get bookmark informations 
            $info = getBookmark($url);
            $name = $info[0];
            $desc = $info[1];
            $img = $info[2];
            //Checking information has returned
            if($info == 'null'){
                //Error message (need to be updated)
                echo "<script>alert('Mauvais Url')</script>";
                echo "<script>setTimeout(()=>{
                document.location.href='/projet/favoris'; 
                }, 100);
                </script>";
            }
            else{
                $cleanUrl = cleanseCode($url);
                //instanciation of new object
                $bookmark = new ManagerBookmark(null, null, null, null);
                $bookmark -> setUrlBookmark($cleanUrl);
                $bookmark -> setNameBookmark(cleanseCode($name));
                $bookmark -> setDescriptionBookmark(cleanseCode($desc));
                $bookmark -> setImgBookmark(cleanseCode($img));
                $bookmark -> setIdUser($id);

                //Check if thebookmark exist
                $test = $bookmark->checkBookmark($bdd, $id, $cleanUrl);
                if(empty($test)){
                    $bookmark->addBookmark($bdd);
                    //Validation message (need to be update): 
                    echo "<script>alert('Favoris ajouté!')</script>";
                    // Refresh the page 
                    echo "<script>setTimeout(()=>{
                        document.location.href='/projet/favoris'; 
                        }, 100);
                    </script>";
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
    }
    //We show all the bookmark of the account with the id
    $bookmark = new ManagerBookmark(null, null, null, null);
    $id = $_SESSION['id'];
    $data = $bookmark->showAllBookmark($bdd, $id);

/*----------------------------------------
                IMPORT
----------------------------------------*/
//Import view creation at last for the data
include './view/view_bookmark.php';

?>
