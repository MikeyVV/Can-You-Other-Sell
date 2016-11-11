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
            <p>นายธนโชติ หนวดเฟิ้ม</p>
            <p>05/09/59</p>
            <p>ไม่ได้รับสินค้าตามที่ต้องการ</p>
            <p>สินค้าไม่ตรงกับประกาศ</p>
            <p><a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/ProductDetail.php" target='_blank'>www.cyos.com/vehicles/train/pr...</a></p>
            <p>สั่งซื้อรถไฟ แต่กลับได้ ไก่จ๊อ5ดาวมาแทน รบกวนดำเนินการให้ทีครับ</p>
            <textarea>เราได้ระงับผู้ใช้งาน "ไก่จ๊อ จะครองโลก" เรียบร้อยแล้ว</textarea>
            <div class="butpos">
            <a href='http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/management_report_officer/management_report_officer.php'><button style="float: right;" onclick="alert('ดำเนินการเรียบร้อยแล้ว')">ตอบกลับ</button></a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="col-sm-4">
              <img style="width: 100px;height: 100px;" src="http://angsila.cs.buu.ac.th/~57160598/SA/Mockup/img/kaijo.jpg">
              <img style="width: 100px;height: 100px;" src="http://angsila.cs.buu.ac.th/~57160598/SA/Mockup/img/kaijo.jpg">
            </div>
            <div class="col-sm-4">
              <img style="width: 100px;height: 100px;" src="http://angsila.cs.buu.ac.th/~57160598/SA/Mockup/img/kaijo.jpg">
            </div>
            <div class="col-sm-4">
              <img style="width: 100px;height: 100px;" src="http://angsila.cs.buu.ac.th/~57160598/SA/Mockup/img/kaijo.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>
<!--/โลโก้เว็บ-->
</div>
    <?php require("../../../bin/footer.php"); ?>
</body>
</html>
