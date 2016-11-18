<?php

  session_start();
  

    require("Complaints.php");
    class Management_complaints extends Complaints
    {
        public function addComplaints($topic, $category, $link, $detail, $status, $image)
        {
          $this->topic = mysqli_real_escape_string($this->db_link, $title);
          $this->category = mysqli_real_escape_string($this->db_link, $category);
          $this->link = mysqli_real_escape_string($this->db_link, $link);
          $this->detail = mysqli_real_escape_string($this->db_link, $detail);
          $this->status = mysqli_real_escape_string($this->db_link, $status);

          mysqli_query($this->db_link, "SET NAMES UTF8");
          $sql = "INSERT INTO `CYOS_Complaints`(`category`, `topic`, `linkComplaints`, `detail`, `status`, `idMember`) VALUES ('$this->category','$this->topic','$this->link','$this->detail','$this->status','".$_SESSION['idMember']."')";
          mysqli_query($this->db_link, $sql);

          $sql = "select idComplaints from CYOS_Complaints where topic='$this->topic' and idMember='".$_SESSION['idMember']."' and detail='$this->detail' ";
          $id = mysqli_fetch_object(mysqli_query($this->db_link, $sql))->idComplaints;

          for($i=0; $i < count($image); $i++){
            $sql= "INSERT INTO `CYOS_ComplaintImage`(`idComplaints`, `nameImage`) VALUES ('$id','$image[$i]')";
            mysqli_query($this->db_link, $sql);
          }

        }

        public function showListComplaints()
        {
          mysqli_query($this->db_link, "SET NAMES UTF8");
          $sql = "SELECT `idComplaints`, CYOS_Complaints.date , `category`, `topic`, `linkComplaints`, `detail`, CYOS_Complaints.status , CYOS_Member.firstName, CYOS_Member.lastName, CYOS_Member.idMember FROM `CYOS_Complaints` INNER JOIN `CYOS_Member` WHERE CYOS_Complaints.idMember = CYOS_Member.idMember ";
          $result = mysqli_query($this->db_link, $sql);
          $n = $result->num_rows;
          $i = 0;

           $out = "{\"list\": [";
          while($obj = mysqli_fetch_object($result)){
            if($n-1 == $i){
              $out .= json_encode($obj);
            }else{
              $out .= json_encode($obj).",";
            }
            $i++;
          }
           $out .= "]}";

          return $out;
        }

        public function showListComplaintsUser()
        {
          
          $sql = "select * from `CYOS_Complaints` where idMember='".$_SESSION['idMember']."' ";
          $result = mysqli_query($this->db_link, $sql);

          $out = "\"list\": [";
          while($list = mysqli_fetch_object($result)){
            $out .= json_encode(mysqli_fetch_object($result));
          }
          $out .= "]";
          return $out;
        }

        public function showComplaintsDetail($comID)
        {
          $id = $comID;
          $comp = new Complaints($id);

          $out = "{\"idComplaints\": [\"".$comp->getIDComplaints()."\"],";
          $out .= "\"topic\": [\"".$comp->getTopic()."\"],";
          $out .= "\"date\": [\"".$comp->getDate()."\"],";
          $out .= "\"category\": [\"".$comp->getCategory()."\"],";
          $out .= "\"topic\": [\"".$comp->getLinkComplaints()."\"],";
          $out .= "\"detail\": [\"".$comp->getDetail()."\"],";
          $out .= $comp->getImageComplaints().",";

          $memID = $comp->getIDmember();
          $sql = "select * from `CYOS_Member` where idMember='".$comp->getIDmember()."'";
          $result = mysqli_query($this->db_link, $sql);
          $result = mysqli_fetch_object($result);
          $name = $result->firstName." ".$result->lastName;

          $out .= "\"nameUser\": [\"".$name."\"]}";

          return $out;


          // echo $comp->getDate();
          // echo $comp->getTopic();
          // echo $comp->getCategory();
          // echo $comp->getLinkComplaints();
          // echo $comp->getDetail();
          // echo $comp->getImageComplaints();
          // echo $comp->getCategory();
        }

    }

$c = new Management_complaints();
$c->showListComplaints();

?>
