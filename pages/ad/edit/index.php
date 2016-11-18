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
        <div class="col-sm-8 cyos-card" style="background-color: white; height: 50vh;">
            <h1>แก้ไขโฆษณา</h1>
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
                    <label id="url_label" for="url">ลิงค์รูปภาพที่จะแสดง</label>
                    <input type="text" class="form-control" id="url" placeholder="วางลิงค์รูปภาพที่นี่">
                </div>
                <div class="form-group">
                    <label id="pakage_label" for="pakage">แพ็คเกจ</label>
                    <select class="form-control" id="pakage">
                        <option value="0">เลือกแพ็คเกจ</option>
                        <option value="1">100 ครั้ง/50 บาท</option>
                        <option value="2">200 ครั้ง/80 บาท</option>
                        <option value="3">500 ครั้ง/230 บาท</option>
                        <option value="4">1,000 ครั้ง/450 บาท</option>
                    </select>
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
