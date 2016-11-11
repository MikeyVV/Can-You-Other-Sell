<!DOCTYPE html>
<html lang="en">
<head>
    <title>สมัครสมาชิก</title>
    <!--CSS, Bootstrap-->
    <?php require("../../bin/header.php"); ?>
    <!--/CSS, Bootstrap-->
    <!-- your css here -->
    <link rel="stylesheet" href="style.css">
    <!-- /your css here -->
</head>

<body>
<!--แถบบาร์ข้างบน Navbar-->
<?php require("../../bin/navbar.php"); ?>
<!--/แถบบาร์ข้างบน Navbar-->

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-5"></div>
        <!--โลโก้เว็บ-->
        <div class="col-sm-2">
            <center><?php require("../../bin/logo.php"); ?></center>
        </div>
        <!--/โลโก้เว็บ-->
        <div class="col-sm-5"></div>
    </div>
    <div class="row">
        <div class="col-sm-4"></div>

        <div class="col-sm-4">
            <div style="border: 2px dashed #f08080;background-color:#FFFFE0">
                <center><h2>สมัครสมาชิก</h2></center>
                <form style="padding: 1cm">
                    <div id="email_from" class="form-group">
                        <label for="email">อีเมลล์</label>
                        <input type="email" class="form-control" id="email" placeholder="กรุณากรอกอีเมลล์" required>
                    </div>
                    <div id="password_from" class="form-group">
                        <label for="pwd">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="password" placeholder="กรุณากรอกรหัสผ่าน" required>
                    </div>
                    <div id="repeat_password_from" class="form-group">
                        <label for="pwd">ยืนยันรหัสผ่าน</label>
                        <input type="password" class="form-control" id="repeat_password"placeholder="กรุณายืนยันรหัสผ่าน" required>
                    </div>
                    <div id="FName_from" class="form-group">
                        <label for="email">ชื่อจริง</label>
                        <input type="text" class="form-control" id="FName" placeholder="กรุณากรอกชื่อ" required>
                    </div>
                    <div id="LName_from" class="form-group">
                        <label for="email">นามสกุล</label>
                        <input type="text" class="form-control" id="LName" placeholder="กรุณากรอกนามสกุล" required>
                    </div>
                    <center>
                        <a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/start.php">กลับสู่หน้าหลัก</a>&nbsp;&nbsp;
                        <button type="submit" class="btn btn-default"><a href="RegSec.php">สมัครสมาชิก<a/></button>
                    </center>
                </form>
            </div>
        </div>

        <div class="col-sm-4"></div>

    </div>
    <?php require("../../bin/footer.php"); ?>
    <!-- your javascript here -->
<!--    <script src="script.js"></script>-->

    <script>
        /*
        alert empty input
         */

        $("#email").blur(function () {
            $("#email_from").addClass("has-error");
        });
        $("#password").blur(function () {
            $("#password_from").addClass("has-error");
        });
        $("#repeat_password").blur(function () {
            $("#repeat_password_from").addClass("has-error");
        });
        $("#FName").blur(function () {
            $("#FName_from").addClass("has-error");
        });
        $("#LName").blur(function () {
            $("#LName_from").addClass("has-error");
        });


    </script>
    <!-- /your javascript here -->
</body>
</html>
