<!DOCTYPE html>
<html lang="en">
<head>
    <title>ส่งเรื่องร้องเรียนแล้ว</title>
    <!--CSS, Bootstrap-->
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Private CSS -->
<link rel="stylesheet" href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/CSS/style.css">

<!-- Font Aewsome -->
<link rel="stylesheet" href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/CSS/font-awesome-4.6.3/css/font-awesome.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--/CSS, Bootstrap-->
</head>

<body>
<!--แถบบาร์ข้างบน Navbar-->
<?php require("../../bin/navbar.php"); ?><!--/แถบบาร์ข้างบน Navbar-->

<div class="container-fluid">
    <div class="row">
        <!--โลโก้เว็บ-->
        <div class="col-sm-2">
            <img style="witdh: 150px;height: 150px;" src="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/img/basket-full-icon.png">
        </div>
        <!--/โลโก้เว็บ-->
        <div class="col-sm-7">
            <div class="row">
                <div class="col-sm-12">
                    <!--ช่องค้นหา พร้อมปุ่มกด-->
                    <div class="input-group">
    <input type="text" class="form-control" placeholder="ค้นหาชื่อ หรือประเภทของประกาศสินค้า...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">ค้นหา</button>
                        </span>
</div>                    <!--/ช่องค้นหา พร้อมปุ่มกด-->
                </div>
            </div>
            <div class="row">
                <!--ประเภทสินค้ายอดนิยม-->
                <div style="margin-top:10px;" class="col-sm-12">
    <a href="#" class="btn btn-default" role="button">รถยนต์</a>&nbsp&nbsp&nbsp
    <a href="#" class="btn btn-default" role="button">นาฬิกา</a>&nbsp&nbsp&nbsp
    <a href="#" class="btn btn-default" role="button">ตู้เย็น</a>&nbsp&nbsp&nbsp
    <a href="#" class="btn btn-default" role="button">รถไฟ</a>&nbsp&nbsp&nbsp
    <a href="#" class="btn btn-default" role="button">ตู้</a>
</div>
                <!--/ประเภทสินค้ายอดนิยม-->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <!--เมนูกดเลือกประเภทสินค้า-->
            <div class="panel panel-info">
  <div class="panel-heading">
    <b>Category</b>
  </div>
  <div class="list-group">
    <a href="#" class="list-group-item"><i class="fa fa-car" aria-hidden="true"></i>&nbsp&nbspรถยนต์</a>
    <a href="#" class="list-group-item"><i class="fa fa-plug" aria-hidden="true"></i>&nbsp&nbspเครื่องใช้ไฟฟ้า</a>
    <a href="#" class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp&nbspนาฬิกา</a>
    <a href="#" class="list-group-item"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp&nbspแว่นตา</a>
    <a href="#" class="list-group-item"><i class="fa fa-th-large" aria-hidden="true"></i>&nbsp&nbspตู้</a>
    <a href="#" class="list-group-item"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp&nbspโทรศัพท์</a>
    <a href="#" class="list-group-item"><i class="fa fa-shirtsinbulk" aria-hidden="true"></i>&nbsp&nbspเสื้อผ้า</a>
    <a href="#" class="list-group-item"><i class="fa fa-beer" aria-hidden="true"></i>&nbsp&nbspเฟอร์นิเจอร์</a>
    <a href="#" class="list-group-item"><i class="fa fa-suitcase" aria-hidden="true"></i>&nbsp&nbspกระเป๋า</a>
    <a href="#" class="list-group-item"><i class="fa fa-bicycle" aria-hidden="true"></i>&nbsp&nbspจักรยาน</a>
    <a href="#" class="list-group-item"><i class="fa fa-book" aria-hidden="true"></i>&nbsp&nbspหนังสือ</a>
  </div>
</div>
            <!--/เมนูกดเลือกประเภทสินค้า-->
        </div>
        <!-- ทำงานที่นี่ -->
        <div class="col-sm-8">
            <div class="panel panel-primary class">
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <center><img style="witdh: 150px;height: 150px;" src="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/img/basket-full-icon.png">
</center>
                <br>
                <center><h3>ส่งเรื่องร้องเรียนแล้ว</h3></center>
                <br>
                <center><a href="index.php" class="btn btn-success" role="button">ตกลง</a> </center>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
        <!-- /ทำงานที่นี่ -->
        <div class="col-sm-2">
            <!--แสดงสินค้าแนะนำ-->
            <div class="panel panel-default">
  <div class="panel-heading">
    <b>สินค้าแนะนำ</b>
  </div>
  <div class="panel-body">
    <div style="text-align:center" class="list-group">
        <img
            src="http://th-live-01.slatic.net/p/toshiba-tuueyn-1-pratuu-curve-live-khnaad-5-khiw-run-gr-b145tznn-siiekhiiyw-7592-0591382-1.jpg"
            class="recommend-product img-thumbnail">
        <a href="#"><p>ตู้เย็นโตชิบา</p></a>
        <p>ราคา 4,000 บาท</p>
        <p>พัทยา, ชลบุรี</p>
        <img src="https://i.ytimg.com/vi/bMbW4VSHpEg/maxresdefault.jpg"
             class="recommend-product img-thumbnail">
        <a href="#"><p>รถไฟไทย สไตล์วินเทจ</p></a>
        <p>ราคา 120,000,000 บาท</p>
        <p>มักกะสัน, กรุงเทพฯ</p>
        <img src="http://cp.lnwfile.com/_/cp/_raw/zt/86/7g.jpg" class="recommend-product img-thumbnail">
        <a href="#"><p>นาฬิกา TAG</p></a>
        <p>ราคา 20,000 บาท</p>
        <p>หัวหิน, ประจวบคีรีขัน</p>
    </div>
    </div>
</div>
            <!--/แสดงสินค้าแนะนำ-->
        </div>
    </div>
    <footer class="page-footer center-on-small-only ">
  <div class="container">
    <div class="row">
        <hr>
      <div class="col-md-4">
      Copyright&nbsp&copy;&nbsp2559&nbspCYOS&nbspCorporation<br>
      About Us<br>
      Contact 088-345-5511
      </div>
      </div>
  </div>
</footer>
</body>
</html>
