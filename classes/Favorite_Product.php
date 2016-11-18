<?php
require("db.php");
class  FavoriteManagement  extends db {

 function __construct()
    {
        /*
        * Database Connect
        */
        $this->Open();
       
    }
    public function getPostFavorite($idM)
    {
        mysqli_query($this->db_link, "SET NAMES UTF8");
        //$idMember = mysqli_real_escape_string($this->db_link, $this->idMember);
        $sql = "SELECT * FROM CYOS_PostProduct,CYOS_FavorateProduct,CYOS_Category
                WHERE CYOS_PostProduct.idPost = CYOS_FavorateProduct.idPost 
                AND CYOS_PostProduct.category = CYOS_Category.idCategory 
                AND CYOS_FavorateProduct.idMember = ".$idM;
        $result = mysqli_query($this->db_link, $sql);
        return $result;
    }
 
}
?>
