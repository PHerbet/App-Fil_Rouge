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
            //Get bookmark informations 
            $info = getBookmark($url);
            $name = $info[0];
            $desc = $info[1];
            $img = $info[2];

            $bookmark = new ManagerBookmark(null, null, null, null);
            $bookmark -> setUrlBookmark($url);
            $bookmark -> setNameBookmark($name);
            $bookmark -> setDescriptionBookmark($desc);
            $bookmark -> setImgBookmark($img);
            $bookmark -> setIdUser($_SESSION['id']);
            $bookmark->addBookmark($bdd);
            //Validation message: 
            echo "Favoris ajouté!";
            //Refresh the page 
            echo "<script>setTimeout(()=>{
                document.location.href='/projet/favoris'; 
                }, 100);
            </script>";
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
