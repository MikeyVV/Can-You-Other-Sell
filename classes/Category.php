<?php

/**
 * Created by PhpStorm.
 * User: dell
 * Date: 10/11/2559
 * Time: 13:32
 */

/*
 * import database connect class
 */
require ("db.php");

class Category extends db
{
    /*
     * Database Connect
     */
    function __construct()
    {
        $this->Open();
    }

    /*
     * Private
     */
    //private $idPost;

    /*
     * Public
     */
    public $idCategory;
    public $nameCategory;


    /*
     * Methods
     */

    public function getCategory()
    {
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $category = mysqli_query($this->db_link, "SELECT * FROM `CYOS_Category`");
        $out = "{\"lists\" : [";
        for ($i = 0; $i < $category->num_rows; $i++) {
            if ($out != "{\"lists\" : [") $out .= ",";
            $out .= json_encode(mysqli_fetch_object($category));
        }
        $out .= "]}";
        echo $out;
        return;
    }

}

//$Category = new Category();
//$Category->getCategory();



