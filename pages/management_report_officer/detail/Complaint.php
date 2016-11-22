<?php
require ("../../../classes/management_complaints.php");
$c = new Management_complaints();
$c = json_decode($c->showComplaintsDetail($_GET["id"]));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>แจ้งข้อร้องเรียน</title>
    <!--CSS, Bootstrap-->
    <?php require("../../../bin/header.php"); ?>
    <!--/CSS, Bootstrap-->
    <style>
    h4 {
      text-align: right;
    }
    textarea {
      width: 100%;
      height: 200px;
      padding: 12px 20px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      background: #f8f8f8;
      resize: none;
    }
    table, th, td {
      border: 2px;
    }
    </style>

    <style>
        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform: scale(0)}
            to {-webkit-transform: scale(1)}
        }

        @keyframes zoom {
            from {transform: scale(0.1)}
            to {transform: scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }
    </style>

</head>

<body>
<!--แถบบาร์ข้างบน Navbar-->
<?php require("../../../bin/navbar.php"); ?>
<!--/แถบบาร์ข้างบน Navbar-->

<div class="container-fluid">
    <div class="row">
        <!--โลโก้เว็บ-->
      <div class="col-sm-2">
            <?php require("../../../bin/logo.php"); ?>
      </div>
      <div class="col-sm-10">
        <center><h1>ไม่ได้รับสินค้าตามที่ต้องการ</h1></center>
        <div class="row">
          <div class="col-sm-2">
            <h4>ผู้ส่งคำร้อง : </h4>
            <h4>เมื่อ : </h4>
            <h4>เรื่อง : </h4>
            <h4>ประเภท : </h4>
            <h4>ลิงค์ประกาศ : </h4>
            <h4>รายละเอียด : </h4>
            <h4>ตอบกลับ : </h4>
          </div>
          <div class="col-sm-6">
            <p><?php echo $c->nameUser; ?></p>
            <p><?php echo mb_substr($c->date, 0,10, 'UTF-8'); ?></p>
            <p><?php echo $c->topic; ?></p>
            <p><?php echo $c->category; ?></p>
            <?php echo "<p><a href=\"".$c->link."\" target='_blank'>".mb_substr($c->link, 0,30, 'UTF-8')."...".mb_substr($c->link,strlen($c->list[$i]->linkComplaints)-5,strlen($c->link), 'UTF-8')."</a></p>"; ?>
            <p><?php echo $c->detail; ?></p>
<!--            <textarea>เราได้ระงับผู้ใช้งาน "ไก่จ๊อ จะครองโลก" เรียบร้อยแล้ว</textarea>-->
              <form method="post">
                  <div id="error1" style="color: red"></div>
                  <textarea class="form-control" rows="10" id="reply" required></textarea>
                  <?php echo "<input type=\"hidden\" class=\"form-control\" name=\"id\" id=\"id\" value=\"".$_GET["id"]."\">"; ?>
                  <br>
                  <div align="right">
                      <button type="submit" onclick="validForm()" class="btn btn-success">ตอบกลับ</button>
                  </div>
              </form>
<!--            <div class="butpos">-->
<!--            <a href='http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/management_report_officer/management_report_officer.php'><button style="float: right;" onclick="alert('ดำเนินการเรียบร้อยแล้ว')">ตอบกลับ</button></a>-->
<!--            </div>-->
          </div>
          <div class="col-sm-4">
              <?php
              $num = count($c->image);
              for($i = 0; $i < $num; $i++){
                  if($i == 0 || $i == 3 || $i == 6 || $i == 9){
                      echo "<div class=\"row-sm-4\">";
                  }
                  echo "<img class=\"popular-product-img-thumbnail\" id=\"mg$i\" onclick=\"showImg(this)\" style=\"width: 100px;height: 100px;\" src=\"../../../img/complaints/".$c->image[$i]->nameImage."\">";
                  if($i == ($num-1) || $i == 2 || $i == 5|| $i == 8){
                      echo "</div>";
                  }
              }
              ?>
          </div>
        </div>
      </div>
    </div>
<!--/โลโก้เว็บ-->
</div>
    <?php require("../../../bin/footer.php"); ?>

<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">×</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

</body>

<script>
    function validForm() {
        event.preventDefault();
        var id = $("#id").val();
        var reply = $("#reply").val();
        var isError = false;
        if(reply == "") {
            $("#error1").html("<b>โปรดระบุข้อความตอบกลับ !!!</b><br>");
            isError = true;

        }else{
            $.post("addReply.php",{
                id: id,
                reply: reply
            },function (data, status) {
                if (status === "success") {
                    alert("ดำเนินการเรียบร้อยแล้ว");
                    location.assign("http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/management_report_officer/management_report_officer.php");
                }
            });
        }
    }

    function showImg(img) {
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById(img.id);
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function (){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    }

</script>
</html>
