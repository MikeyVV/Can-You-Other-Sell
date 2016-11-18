<?php
require("db.php");

  class Complaints extends db
  {

    private $idComplaints;
    private $idMember;
    private $date;
    private $category;
    private $topic;
    private $linkComplaints;
    private $imageComplaints;
    private $detail;
    private $status;

    function __construct($id)
    {
        $this->Open();
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $this->idComplaints = $id;
    }

    public function getIDComplaints()
    {
      $sql = "select * from `CYOS_Complaints` where idComplaints='$this->idComplaints' ";
      $result = mysqli_query($this->db_link, $sql);
      $this->idComplaints = mysqli_fetch_object($result)->idComplaints;
      return $this->idComplaints;
    }

    public function getDate()
    {
      $sql = "select * from `CYOS_Complaints` where idComplaints='$this->idComplaints' ";
      $result = mysqli_query($this->db_link, $sql);
      $this->date = mysqli_fetch_object($result)->date;
      return $this->date;
    }

    public function getCategory()
    {
      $sql = "select * from `CYOS_Complaints` where idComplaints='$this->idComplaints' ";
      $result = mysqli_query($this->db_link, $sql);
      $check = mysqli_fetch_object($result)->category;
      if($check == 1){
        $this->category = "หมวดสินค้าผิดประเภท";
      }else if($check == 2){
        $this->category = "สินค้าผิดกฎหมาย";
      }else if($check == 3){
        $this->category = "ผู้ขายทำผิดกฎของเว็บ";
      }else if($check == 4){
        $this->category = "ไม่ได้รับสินค้า";
      }
      return $this->category;
    }

    public function getTopic()
    {
      $sql = "select * from `CYOS_Complaints` where idComplaints='$this->idComplaints' ";
      $result = mysqli_query($this->db_link, $sql);
      $this->topic = mysqli_fetch_object($result)->topic;
      return $this->topic;
    }

    public function getLinkComplaints()
    {
      $sql = "select * from `CYOS_Complaints` where idComplaints='$this->idComplaints' ";
      $result = mysqli_query($this->db_link, $sql);
      $this->linkComplaints = mysqli_fetch_object($result)->linkComplaints;
      return $this->linkComplaints;
    }

    public function getImageComplaints()
    {
      $sql = "select nameImage from `CYOS_ComplaintImage` where idComplaints='$this->idComplaints' ";
      $result = mysqli_query($this->db_link, $sql);

      $out .= "\"image\": [";

      for($i=0; $i < $result->num_rows; $i++){
        $out .= json_encode(mysqli_fetch_object($result));
        if($i < ($result->num_rows-1)) $out .= ",";
      }

      $out .= "]";

      $this->imageComplaints = $out;
      return $this->imageComplaints;
    }

    public function getDetail()
    {
      $sql = "select * from `CYOS_Complaints` where idComplaints='$this->idComplaints' ";
      $result = mysqli_query($this->db_link, $sql);
      $this->detail = mysqli_fetch_object($result)->detail;
      return $this->detail;
    }

    public function getIDmember()
    {
      $sql = "select * from `CYOS_Complaints` where idComplaints='$this->idComplaints' ";
      $result = mysqli_query($this->db_link, $sql);
      $this->idMember = mysqli_fetch_object($result)->idMember;
      return $this->idMember;
    }

    public function getStatus()
    {
      $sql = "select * from `CYOS_Complaints` where idComplaints='$this->idComplaints' ";
      $result = mysqli_query($this->db_link, $sql);
      $check = mysqli_fetch_object($result)->status;
      if($check == 0){
        $this->status = "รอดำเนินการ";
      }else if($check == 1){
        $this->status = "ดำเนินการเรียบร้อยแล้ว";
      }
      return $this->status;
    }

  }

//  $comp = new Complaints(1);
//  echo $comp->getIDComplaints();
//  echo $comp->getDate();
//  echo $comp->getCategory();
//  echo $comp->getTopic();
//  echo $comp->getLinkComplaints();
//  echo $comp->getImageComplaints();
//  echo $comp->getDetail();
//  echo $comp->getIDmember();
//  echo $comp->getStatus();

?>
