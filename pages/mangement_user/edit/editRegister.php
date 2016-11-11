<!DOCTYPE html>
<html lang="en">
<head>
    <title>แก้ไขข้อมูลส่วนตัว</title>
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
        <div class="col-sm-5"></div>
        <!--โลโก้เว็บ-->
        <div class="col-sm-2">
            <center><?php require("../../../bin/logo.php"); ?></center>
        </div>
        <!--/โลโก้เว็บ-->
        <div class="col-sm-5"></div>
    </div>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <div style="border: 2px dashed #f08080;background-color:#FFFFE0">
                <center><h3>แก้ไขข้อมูลส่วนตัว(1/2)</h3></center>
                <form style="padding: 1cm">
                    <div class="form-group">
                        <label for="email">อีเมล์</label>
                        <input type="email" class="form-control" value="tanachot@gmail.com" id="email">
                    </div>
                    <div class="form-group">
                        <label>เปลี่ยนรหัสผ่าน</label>
                    </div>
                    <div class="form-group">
                        <label for="pwd">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="pw">
                    </div>
                    <div class="form-group">
                        <label for="pwd1">รหัสผ่านใหม่</label>
                        <input type="password" class="form-control" id="pw1">
                    </div>
                    <div class="form-group">
                        <label for="pwd2">ยืนยันรหัสผ่านใหม่</label>
                        <input type="password" class="form-control" id="pw2">
                    </div>
                    <div class="form-group">
                        <label for="name">ชื่อจริง</label>
                        <input type="text" class="form-control" value="ไก่จ๊อ" id="name">
                    </div>
                    <div class="form-group">
                        <label for="lname">นามสกุล</label>
                        <input type="text" class="form-control" value="จะครองโลก" id="lname">
                    </div>

                </form>
            </div>
        </div>
        <div class="col-sm-0.5"></div>
        <div class="col-sm-4">
            <div style="border: 2px dashed #f08080;background-color:#FFFFE0">
                <center><h3>แก้ไขข้อมูลส่วนตัว(2/2)</h3></center>
                <form style="padding: 1cm">
                    <div class="form-group">
                        <label for="tel">เบอร์ติดต่อ</label>
                        <input type="text" class="form-control" value="089-999-9999" id="tel">
                    </div>
                    <div class="form-group">
                        <label for="addr">ที่อยู่</label>
                        <input type="text" class="form-control" value="พัทยา ,ชลบุรี" id="addr">
                    </div>
                    <div class="form-group">
                        <label for="line">Line ID</label>
                        <input type="text" class="form-control" value="tanachot" id="line">
                    </div>
                    <div class="form-group">
                        <label for="fb">Facebook</label>
                        <input type="text" class="form-control" value="tanachot" id="fb">
                    </div>
                    <center>
                        <a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/start.php">กลับสู่หน้าหลัก</a>&nbsp;&nbsp;
                        <a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/mangement_user/editRegisterSec.php"><button type="button" class="btn btn-default">บันทึก</button></a>
                    </center>

                </form>
            </div>
        </div>

    </div>
    <?php require("../../../bin/footer.php"); ?>
</body>
</html>
