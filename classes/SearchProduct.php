<?php
require("db.php");

class SearchProduct extends db
{
    function __construct()
    {
        $this->Open();
    }

    public $keyWord;



    public function search($idPost)
    {

        mysqli_query($this->db_link, "SET NAMES UTF8");
        $listIdPost = mysqli_query($this->db_link, "SELECT idPost FROM CYOS_PostProduct p JOIN CYOS_Category c WHERE p.category = c.idCategory AND (name LIKE '" . $idPost . "%' OR nameCategory LIKE '" . $idPost . "%')");

        $out = "{\"lists\" : [";
        while ($id = mysqli_fetch_object($listIdPost)) {
            $sql = "SELECT DISTINCT p.idPost, name, price, address, nameImage FROM CYOS_PostProduct p JOIN CYOS_Member m JOIN CYOS_ProductImage i WHERE p.idMember = m.idMember AND p.idPost = i.idPost AND p.idPost = " . $id->idPost . " LIMIT 1";

            $postProduct = mysqli_query($this->db_link, $sql);

            if ($out != "{\"lists\" : [") $out .= ",";
            $out .= json_encode(mysqli_fetch_object($postProduct));
        }
        $out .= "]}";
        //echo $idPost;
        if ($listIdPost->num_rows != 0) {
           // echo "UPDATE `CYOS_SearchKeyword` SET numOfSearchKeywordcol =+1 WHERE searchKeyword = \"" . $idPost . "\"";
            mysqli_query($this->db_link, "UPDATE `CYOS_SearchKeyword` SET numOfSearchKeywordcol = numOfSearchKeywordcol+1 WHERE searchKeyword = \"" . $idPost . "\"");
            //echo "ok";
        }


        return $out;
    }

    public function showPopularKeyWord()
    {
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $out = "{\"detail\": [";
        $SearchKeyword = mysqli_query($this->db_link, "SELECT * FROM `CYOS_SearchKeyword` ORDER BY numOfSearchKeywordcol DESC LIMIT 5");
        for ($i = 0; $i < $SearchKeyword->num_rows; $i++) {
            $out .= json_encode(mysqli_fetch_object($SearchKeyword));
            if ($i < ($SearchKeyword->num_rows - 1)) $out .= ",";

        }
        $out .= "]}";
        echo $out;
        return 0;
    }

}

?>
