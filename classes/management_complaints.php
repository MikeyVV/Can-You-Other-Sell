<?php
    require("Complaints.php");
    class Management_complaints extends Complaints
    {
        public function addComplaints()
        {
          # code...
        }

        public function showListComplaints()
        {
          # code...
        }

        public function showListComplaintsUser($memID)
        {
          # code...

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

          echo $out;


          // echo $comp->getDate();
          // echo $comp->getTopic();
          // echo $comp->getCategory();
          // echo $comp->getLinkComplaints();
          // echo $comp->getDetail();
          // echo $comp->getImageComplaints();
          // echo $comp->getCategory();
        }

    }

    $ma = new Management_complaints();
    $ma->showComplaintsDetail(1);

?>
