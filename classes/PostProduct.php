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


// Created SESSION.
session_start();


require ("db.php");

class PostProduct extends db
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
    public $idPost;
    public $date;
    public $name;
    public $category;
    public $price;
    public $detail;
    public $image;
    public $sellerEmail;
    public $view;


    /*
     * PostProduct Status
     */
    public $status;


    /*
     * Methods
     */

    public function getDetailPostProduct($idPost)
    {
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $out = "{\"detail\": ";
        $postProduct = mysqli_query($this->db_link, "SELECT p.name, m.address, p.detail, p.price, m.firstName, m.lastName, m.rate, m.totalVote, m.phoneNumber, m.lineID, m.facebook, m.idMember, p.status, view FROM CYOS_PostProduct p JOIN CYOS_Member m WHERE p.idMember = m.idMember AND idPost = ".$idPost);
        $temPost = mysqli_fetch_object($postProduct);
        $out .= json_encode($temPost);
        $out .= ",\"image\": [";
        $imgList = mysqli_query($this->db_link, "SELECT * FROM `CYOS_ProductImage` WHERE idPost = ".$idPost);

        for ($i=0; $i < $imgList->num_rows; $i++){
            $out .= json_encode(mysqli_fetch_object($imgList));
            if($i < ($imgList->num_rows-1)) $out .= ",";
        }
        $out .= "]}";
        echo $out;
        $view = ($temPost->view) + 1;
        mysqli_query($this->db_link, "UPDATE `CYOS_PostProduct` SET view = ".$view." WHERE idPost = ".$idPost);
        return;
    }

    public function getDetailPostProductForEdit($idPost)
    {
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $out = "{\"detail\": ";
        $postProduct = mysqli_query($this->db_link, "SELECT p.name, p.detail, p.price, p.category, p.status, view FROM CYOS_PostProduct p JOIN CYOS_Member m WHERE p.idMember = m.idMember AND idPost = ".$idPost);
        $temPost = mysqli_fetch_object($postProduct);
        $out .= json_encode($temPost);
        $out .= ",\"image\": [";
        $imgList = mysqli_query($this->db_link, "SELECT * FROM `CYOS_ProductImage` WHERE idPost = ".$idPost);

        for ($i=0; $i < $imgList->num_rows; $i++){
            $out .= json_encode(mysqli_fetch_object($imgList));
            if($i < ($imgList->num_rows-1)) $out .= ",";
        }
        $out .= "]}";
        echo $out;
        
        return;
    }

    public function getListPostProduct($idMember)
    {
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $postProduct = mysqli_query($this->db_link, "SELECT DISTINCT idPost, DATE, name, nameCategory, price, status FROM `CYOS_PostProduct` p LEFT JOIN  `CYOS_Category` c ON p.category = c.idCategory WHERE idMember = ".$idMember);
        $out = "{\"lists\" : [";
        for ($i = 0; $i < $postProduct->num_rows; $i++) {
            if ($out != "{\"lists\" : [") $out .= ",";
            $out .= json_encode(mysqli_fetch_object($postProduct));
        }
        $out .= "]}";
        echo $out;
        return;
    }

    public function getRecentProduct($num)
    {
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $listIdPost = mysqli_query($this->db_link, "SELECT idPost FROM `CYOS_PostProduct` ORDER BY date DESC LIMIT ".$num);

        $out = "{\"lists\" : [";
        while ($id = mysqli_fetch_object($listIdPost)){
            $sql = "SELECT DISTINCT p.idPost, name, price, address, nameImage FROM CYOS_PostProduct p JOIN CYOS_Member m JOIN CYOS_ProductImage i WHERE p.idMember = m.idMember AND p.idPost = i.idPost AND p.idPost = ".$id->idPost." LIMIT 1";
            //echo $sql;
            $postProduct = mysqli_query($this->db_link, $sql);

            if ($out != "{\"lists\" : [") $out .= ",";
            $out .= json_encode(mysqli_fetch_object($postProduct));
        }
        $out .= "]}";
        echo $out;
        //echo json_encode(mysqli_fetch_object($postProduct));
        return;
    }

    public function getTopFour()
    {
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $listIdPost = mysqli_query($this->db_link, "SELECT idPost FROM `CYOS_PostProduct` ORDER BY view DESC LIMIT 4");

        $out = "{\"lists\" : [";
        while ($id = mysqli_fetch_object($listIdPost)){
            $sql = "SELECT DISTINCT p.idPost, name, price, address, nameImage FROM CYOS_PostProduct p JOIN CYOS_Member m JOIN CYOS_ProductImage i WHERE p.idMember = m.idMember AND p.idPost = i.idPost AND p.idPost = ".$id->idPost." LIMIT 1";
            //echo $sql;
            $postProduct = mysqli_query($this->db_link, $sql);

            if ($out != "{\"lists\" : [") $out .= ",";
            $out .= json_encode(mysqli_fetch_object($postProduct));
        }
        $out .= "]}";
        echo $out;
        //echo json_encode(mysqli_fetch_object($postProduct));
        return;
    }

    public function getProductByCategory($category)
    {
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $listIdPost = mysqli_query($this->db_link, "SELECT idPost FROM `CYOS_PostProduct` WHERE category = ".$category." ORDER BY view DESC");

        $out = "{\"lists\" : [";
        while ($id = mysqli_fetch_object($listIdPost)){
            $sql = "SELECT DISTINCT p.idPost, name, price, address, nameImage FROM CYOS_PostProduct p JOIN CYOS_Member m JOIN CYOS_ProductImage i WHERE p.idMember = m.idMember AND p.idPost = i.idPost AND p.idPost = ".$id->idPost." LIMIT 1";
            //echo $sql;
            $postProduct = mysqli_query($this->db_link, $sql);

            if ($out != "{\"lists\" : [") $out .= ",";
            $out .= json_encode(mysqli_fetch_object($postProduct));
        }
        $out .= "]}";
        echo $out;
        //echo json_encode(mysqli_fetch_object($postProduct));
        return;
    }

    public function editDetailPostProduct($idPost, $name, $category, $price, $detail, $nameImage)
    {
        $this->idPost = mysqli_real_escape_string($this->db_link, $idPost);
        $this->name = mysqli_real_escape_string($this->db_link, $name);
        $this->category = mysqli_real_escape_string($this->db_link, $category);
        $this->price = mysqli_real_escape_string($this->db_link, $price);
        $this->detail = mysqli_real_escape_string($this->db_link, $detail);

        mysqli_query($this->db_link, "SET NAMES UTF8");
        $sql = "UPDATE `CYOS_PostProduct` SET name = \"".$this->name."\", category = ".$this->category.", price = ".$this->price.", detail = \"".$this->detail."\" WHERE idPost = ".$this->idPost;
        //echo $sql;
        $editPostProduct = mysqli_query($this->db_link, $sql);

        if(isset($nameImage)){
            $this->editImagePostProduct($idPost, $nameImage);
        }
        echo $editPostProduct;
        return;
    }

    public function editImagePostProduct($idPost, $nameImage)
    {
        $this->idPost = mysqli_real_escape_string($this->db_link, $idPost);

        mysqli_query($this->db_link, "SET NAMES UTF8");
        $sql = "DELETE FROM `CYOS_ProductImage` WHERE idPost = ".$this->idPost;
        //echo $sql;
        mysqli_query($this->db_link, $sql);

        for($i=0; $i < count($nameImage); $i++){
            $sql = "INSERT INTO `CYOS_ProductImage`(`idPost`, `nameImage`) VALUES (".$this->idPost.", \"".$nameImage[$i]."\")";
            //echo $sql;
            mysqli_query($this->db_link, $sql);
        }
        return;
    }
}

//$postPro = new PostProduct();
//$postPro->getDetailPostProduct(1);
//$postPro->getListPostProduct(1);
//$postPro->getRecentProduct(2);
//$postPro->getTopFour();
//$postPro->editDetailPostProduct(2, "ตู้เย็นโตชิบา", 2, 4000, "รุ่นนี้ คือที่สุด!! ไม่พอใจยินดีคืนเงิน");
//$img = array("http://th.compare.asia/images/upload/product/2608/2774608/small_product.jpg", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRETsT2odGy9Xj28Zgeat7B6-_-E7-H7g1Gmu3y8gGlHnX8t868");
//$postPro->editImagePostProduct(2, $img);
//$postPro->getProductByCategory(1);
