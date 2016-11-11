<?php

// Created SESSION.
session_start();
$_SESSION['idMember'] = 1;

/**
 * Created by PhpStorm.
 * User: dell
 * Date: 10/11/2559
 * Time: 13:32
 */

/*
 * import database connect class
 */
require ("PostProduct.php");

class sell_management extends PostProduct
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
    //public $idPost;


    /*
     * PostProduct Status
     */
    //public $status;


    /*
     * Methods
     */

    public function showProductList($idMember)
    {
        $this->getListPostProduct($idMember);
        return;
    }

    public function postProduct($name, $category, $price, $detail, $nameImage)
    {
        $this->name = mysqli_real_escape_string($this->db_link, $name);
        $this->category = mysqli_real_escape_string($this->db_link, $category);
        $this->price = mysqli_real_escape_string($this->db_link, $price);
        $this->detail = mysqli_real_escape_string($this->db_link, $detail);

        mysqli_query($this->db_link, "SET NAMES UTF8");
        $sql = "INSERT INTO `CYOS_PostProduct`(`name`, `price`, `detail`, `view`, `status`, `category`, `idMember`) VALUES (\"".$this->name."\", ".$this->price.", \"".$this->detail."\", 0, 1, ".$this->category.", ".$_SESSION['idMember'].")";
        echo $sql;
        $postProduct = mysqli_query($this->db_link, $sql);
        //echo $postProduct;
        return;

        //"SELECT idPost FROM `CYOS_PostProduct` WHERE name = ".$this->name." AND category = ".$this->category." AND price = ".$this->price." AND detail = ".$this->detail." AND idMember = ".$_SESSION['idMember']." ORDER BY date DESC LIMIT 1"
    }

    public function addImagePostProduct($idPost, $nameImage)
    {
        $this->idPost = mysqli_real_escape_string($this->db_link, $idPost);

        mysqli_query($this->db_link, "SET NAMES UTF8");

        for($i=0; $i < count($nameImage); $i++){
            $sql = "INSERT INTO `CYOS_ProductImage`(`idPost`, `nameImage`) VALUES (".$this->idPost.", \"".$nameImage[$i]."\")";
            //echo $sql;
            mysqli_query($this->db_link, $sql);
        }
        return;
    }

    public function editStatus($idPost, $status)
    {
        $this->idPost = mysqli_real_escape_string($this->db_link, $idPost);
        $this->status = mysqli_real_escape_string($this->db_link, $status);

        mysqli_query($this->db_link, "SET NAMES UTF8");
        $sql = "UPDATE `CYOS_PostProduct` SET status = ".$this->status." WHERE idPost = ".$this->idPost;
        //echo $sql;
        mysqli_query($this->db_link, $sql);
        return;
    }
}


$sell_management = new sell_management();
//$sell_management->showProductList(1);
$img = array("http://th.compare.asia/images/upload/product/2608/2774608/small_product.jpg", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRETsT2odGy9Xj28Zgeat7B6-_-E7-H7g1Gmu3y8gGlHnX8t868");
//$sell_management->postProduct("รถยนต์ฮอนด้า", 1, 1600000, "รถนำเข้า มือหนึ่ง ราคาถู๊ก!! ถูก...", $img);
//$sell_management->editStatus(2,1);
