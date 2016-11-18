<!DOCTYPE html>
<html lang="en">
<head>
    <title>จัดการโฆษณา</title>
    <!--CSS, Bootstrap-->
    <?php require("../../../bin/header.php"); ?>
    <!--/CSS, Bootstrap-->
</head>

<body>
<!--แถบบาร์ข้างบน Navbar-->
<?php require("../../../bin/navbar.php"); ?>
<!--/แถบบาร์ข้างบน Navbar-->

<div class="container-fluid">
    <div class="row">
        <!--โลโก้เว็บ-->
        <div class="col-sm-2">

        </div>
        <!--/โลโก้เว็บ-->
        <div class="col-sm-7"></div>
    </div>
    <div class="row" style="margin-top: 3vh">
        <div class="col-sm-2">

        </div>
        <!-- ทำงานที่นี่ -->
        <div class="col-sm-8 cyos-card" style="background-color: white">
            <h1>เพิ่มโฆษณา</h1>
            <div class="cyos-underline" style="margin-bottom: 3vh"></div>
            <form style="margin-top: 1px" id="add_ad_form">
                <div class="form-group">
                    <label id="name_label" for="name">ชื่อ</label>
                    <input type="text" class="form-control" id="name" placeholder="ชื่อประกาศ">
                </div>
                <div class="form-group">
                    <label id="location_label" for="location">ที่อยู่</label>
                    <textarea class="form-control" id="location" placeholder="ที่อยู่"></textarea>
                </div>
                <div class="form-group">
                    <label id="url_label" for="url">ลิงค์ประกาศ</label>
                    <input type="text" class="form-control" id="url" placeholder="ลิงค์ประกาศ">
                </div>
                <div class="form-group">
                    <label id="price_label" for="peice">ราคา</label>
                    <input type="number" class="form-control" id="peice" placeholder="ราคา">
                </div>
                <div class="form-group">
                    <label id="state_label" for="state">สถานะ</label>
                    <input type="text" class="form-control" id="state" placeholder="สถานะ">
                </div>
                <div class="form-group">
                    <label id="exp_label" for="exp">วันสิ้นสุด</label>
                    <input type="text" class="form-control" id="exp" placeholder="วันสิ้นสุด">
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-10 col-sm-2">
                        <button type="submit" class="btn btn-default pull-right">เพิ่มโฆษณา</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /ทำงานที่นี่ -->
        <div class="col-sm-2">

        </div>
    </div>
    <?php require("../../../bin/footer.php"); ?>
</body>
</html>
