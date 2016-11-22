<?php
require("db.php");
$id = $_POST['id'];
$user = $_POST['user'];
class  FavoriteManagement extends db
{
    function __construct()
    {
        /*
        * Database Connect
        */
        $this->Open();

    }
    public function save($id, $user){
        $sql = "INSERT INTO `CYOS_FavorateProduct`
            (`idPost`, `idMember`) 
            VALUES ('$id','$user')";

        mysqli_query($this->db_link, $sql);
        return $sql;
    }


    function deleteFavorite($idPost, $idMember)
    {
        mysqli_query($this->db_link, "SET NAMES UTF8");
        //delete data ออกจาก Favorite Product
        $sql = mysqli_query($this->db_link, "DELETE FROM `CYOS_FavorateProduct` 
        WHERE idPost = $idPost AND idMember = $idMember");
        $result = mysqli_query($this->db_link, $sql);
        return $result;
    }
}
$use = new FavoriteManagement();
$use->save($id,$user);
?>
