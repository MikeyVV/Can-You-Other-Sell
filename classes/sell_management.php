<?php

// Created SESSION.
session_start();
//$_SESSION['idMember'] = 1;

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

        //echo "idMember : ".$_SESSION['idMember'];
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $sql = "INSERT INTO `CYOS_PostProduct`(`name`, `price`, `detail`, `view`, `status`, `category`, `idMember`) VALUES (\"".$this->name."\", ".$this->price.", \"".$this->detail."\", 0, 1, ".$this->category.", ".$_SESSION['idMember'].")";
        //echo $sql;
        $postProduct = mysqli_query($this->db_link, $sql);

        $sql = "SELECT idPost FROM `CYOS_PostProduct` WHERE name = \"".$this->name."\" AND category = ".$this->category." AND price = ".$this->price." AND detail = \"".$this->detail."\" AND idMember = ".$_SESSION['idMember']." ORDER BY date DESC LIMIT 1";
        //echo $sql;
        $objectIdPost = mysqli_fetch_object(mysqli_query($this->db_link, $sql));
        $this->idPost = $objectIdPost->idPost;
        //echo $this->idPost;
        $this->addImagePostProduct($this->idPost, $nameImage);
        echo json_encode($objectIdPost);
        return;
    }

    public function addImagePostProduct($idPost, $nameImage)
    {
        $this->idPost = mysqli_real_escape_string($this->db_link, $idPost);

        mysqli_query($this->db_link, "SET NAMES UTF8");

        for($i=0; $i < count($nameImage); $i++){
            //$type = substr($nameImage[$i], (strpos($nameImage[$i],".")+1));
            //$sql = "INSERT INTO `CYOS_ProductImage`(`idPost`, `nameImage`) VALUES (".$this->idPost.", \"".$_SESSION['idMember']."-".$idPost."-".($i+1).".".$type."\")";
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


//$sell_management = new sell_management();
//$sell_management->showProductList(1);
//$img = array("http://www.carbatterymp.com/wp-content/uploads/2015/05/Honda-Accord-Battery.jpg", "http://car250.com/wp-content/uploads/2014/07/New-Honda-Accord-Hybrid-2014-49.png", "http://www.9carthai.com/wp-content/uploads/2016/02/White-Orchid-Pearl.jpg");
//$img = array("http://www.carbatterymp.com/wp-content/uploads/2015/05/Honda-Accord-Battery.jpg");
//$sell_management->postProduct("รถยนต์ฮอนด้า", 1, 1600000, "รถนำเข้า มือหนึ่ง ราคาถู๊ก!! ถูก...", $img);
//$sell_management->editStatus(2,1);
