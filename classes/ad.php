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

class ad extends db
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
    public $idAd;
    public $adName;
    public $adLocation;
    public $adImg;
    public $adURL;
    public $adPrice;
    public $adStatus;
    public $adExp;


    /*
     * Methods
     */

    public function addAd($adName, $adLocation, $adImg, $adURL, $adPrice, $adExp)
    {
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $this->adName = mysqli_real_escape_string($this->db_link, $adName);
        $this->adLocation = mysqli_real_escape_string($this->db_link, $adLocation);
        $this->adImg = mysqli_real_escape_string($this->db_link, $adImg);
        $this->adURL = mysqli_real_escape_string($this->db_link, $adURL);
        $this->adPrice = mysqli_real_escape_string($this->db_link, $adPrice);
        $this->adExp = mysqli_real_escape_string($this->db_link, $adExp);

        $result = mysqli_query($this->db_link, "INSERT INTO `CYOS_Ad`(`adName`, `adLoction`, `adImg`, `adURL`, `adPrice`, `adStatus`, `adExp`) VALUES (\"".$this->adName."\",\"".$this->adLocation."\",\"".$this->adImg."\",\"".$this->adURL."\",".$this->adPrice.",1 ,".$this->adExp.")");

        return $result;
    }

    public function editAd($idAd, $adName, $adLocation, $adImg, $adURL, $adPrice, $adStatus, $adExp)
    {
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $this->idAd = mysqli_real_escape_string($this->db_link, $idAd);
        $this->adName = mysqli_real_escape_string($this->db_link, $adName);
        $this->adLocation = mysqli_real_escape_string($this->db_link, $adLocation);
        $this->adImg = mysqli_real_escape_string($this->db_link, $adImg);
        $this->adURL = mysqli_real_escape_string($this->db_link, $adURL);
        $this->adPrice = mysqli_real_escape_string($this->db_link, $adPrice);
        $this->adStatus = mysqli_real_escape_string($this->db_link, $adStatus);
        $this->adExp = mysqli_real_escape_string($this->db_link, $adExp);

        $oldExp = mysqli_fetch_object( mysqli_query($this->db_link, "SELECT adExp FROM `CYOS_Ad` WHERE idPost = ".$this->idAd) );

        $this->adExp = mysqli_real_escape_string($this->db_link,($oldExp->adExp + $adExp));
        $sql = "";
        if($adExp<=0){
            $sql = "UPDATE `CYOS_Ad` SET `adName` = \"".$this->adName."\", `adLoction` = \"".$this->adLocation."\", `adImg` = \"".$this->adImg."\", `adURL` = \"".$this->adURL."\", `adPrice` = ".$this->adPrice.", `adStatus` = 1, `adExp` = ".$this->adExp." WHERE idPost = ".$idAd;
        }else{
            $sql = "UPDATE `CYOS_Ad` SET `adName` = \"".$this->adName."\", `adLoction` = \"".$this->adLocation."\", `adImg` = \"".$this->adImg."\", `adURL` = \"".$this->adURL."\", `adPrice` = ".$this->adPrice.", `adStatus` = ".$this->adStatus.", `adExp` = ".$this->adExp." WHERE idPost = ".$idAd;
        }
        $result = mysqli_query($this->db_link, $sql);

        return $result;
    }

    public function getListAdAll()
    {
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $ad = mysqli_query($this->db_link, "SELECT * FROM `CYOS_Ad`");
        $out = "{\"lists\" : [";
        for ($i = 0; $i < $ad->num_rows; $i++) {
            if ($out != "{\"lists\" : [") $out .= ",";
            $out .= json_encode(mysqli_fetch_object($ad));
        }
        $out .= "]}";
        echo $out;
        return;
    }

    public function getAd()
    {
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $ad = mysqli_query($this->db_link, "SELECT * FROM `CYOS_Ad` WHERE adStatus = 1 ORDER BY adExp DESC LIMIT 3");
        $out = "{\"lists\" : [";
        for ($i = 0; $i < $ad->num_rows; $i++) {
            if ($out != "{\"lists\" : [") $out .= ",";
            $out .= json_encode(mysqli_fetch_object($ad));
        }
        $out .= "]}";
        echo $out;
        return;
    }

    /*
    public function getDetailPostProduct($idPost)
    {
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $out = "{\"detail\": ";
        $postProduct = mysqli_query($this->db_link, "SELECT name, address, detail, price, firstName, lastName, rate, totalVote, phoneNumber, lineID, facebook, idMember, status, view FROM `CYOS_PostProduct` NATURAL JOIN `CYOS_Member` WHERE idPost = ".$idPost);
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

    public function editDetailPostProduct($idPost, $name, $category, $price, $detail)
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
    */
}

$Ad = new ad();
//$Ad->addAd("ตู้เย็นโตชิบา", "พัทยา, ชลบุรี", "http://th-live-01.slatic.net/p/toshiba-tuueyn-1-pratuu-curve-live-khnaad-5-khiw-run-gr-b145tznn-siiekhiiyw-7592-0591382-1.jpg", "http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/detail/ProductDetail.php?idPost=2", 4000, 100);
//$Ad->addAd("ตรถไฟไทย สไตล์วินเทจ", "พัทยา, ชลบุรี", "https://pbs.twimg.com/profile_images/583490137385902081/3LoMyqH9.jpg", "http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/detail/ProductDetail.php?idPost=1", 200000000000, 1000);
//$Ad->addAd("รถยนต์ฮอนด้า", "พัทยา, ชลบุรี", "http://www.carbatterymp.com/wp-content/uploads/2015/05/Honda-Accord-Battery.jpg", "http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/detail/ProductDetail.php?idPost=4", 1600000, 500);
//$Ad->getListAdAll();
$Ad->getAd();



