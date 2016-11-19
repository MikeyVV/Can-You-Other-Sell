<?php
require("db.php");

class  FavoriteManagement extends db
{
    function __construct()
    {
        /*
        * Database Connect
        */
        $this->Open();

    }

    function saveFavorite($idPost, $idMember)
    {
        //add data ลง Favorite Product
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $saveFavorite = mysqli_query($this->db_link, "INSERT INTO `CYOS_FavorateProduct` 
        (idMember, idPost) VALUES " . $idPost,.$idMember);
        
        return
    }

    function deleteFavorite($idPost, $idMember)
    {
        //delete data ออกจาก Favorite Product
        $saveFavorite = mysqli_query($this->db_link, "DELETE FROM `CYOS_FavorateProduct` 
       WHERE 'idPost' = " . $idPost AND 'idMember' = .$idMember;
    }
}

?>
