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
            <div class="cyos-center" style="width: 150px;">
                <?php require("../../bin/logo.php"); ?>
            </div>
        </div>
        <!--/โลโก้เว็บ-->
        <div class="col-sm-5"></div>
    </div>
    <div class="row">
        <div class="col-sm-4"></div>

        <div class="col-sm-4">
            <div style="border: 2px dashed #f08080;background-color:#FFFFE0">
                <h2 style="text-align: center;">สมัครสมาชิก</h2>
                <p id="form_error"></p>
                <form id="user_signup_form" style="padding: 1cm">
                    <div id="email_form" class="form-group">
                        <label id="email_label" for="email">อีเมล</label>
                        <input type="email" class="form-control" id="email" placeholder="John@example.com" required>
                    </div>
                    <div id="password_form" class="form-group">
                        <label id="password_label" for="pwd">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="password" placeholder="กรุณากรอกรหัสผ่าน"
                               required>
                    </div>
                    <div id="repeat_password_form" class="form-group">
                        <label id="repeat_password_label" for="pwd">ยืนยันรหัสผ่าน</label>
                        <input type="password" class="form-control" id="repeat_password"
                               placeholder="กรอกรหัสผ่านอีกครั้ง" required>
                    </div>
                    <div id="FName_form" class="form-group">
                        <label id="FName_label" for="email">ชื่อจริง</label>
                        <input type="text" class="form-control" id="FName" placeholder="กรุณากรอกชื่อ" required>
                    </div>
                    <div id="LName_form" class="form-group">
                        <label id="LName_label" for="email">นามสกุล</label>
                        <input type="text" class="form-control" id="LName" placeholder="กรุณากรอกนามสกุล" required>
                    </div>
                    <div class="cyos-center" style="width: 196px;">
                        <a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/start.php">กลับสู่หน้าหลัก</a>&nbsp;&nbsp;
                        <button type="submit" class="btn btn-default">สมัครสมาชิก</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-sm-4"></div>

    </div>
    <?php require("../../bin/footer.php"); ?>
    <!-- your javascript here -->
    <script src="script.js"></script>
    <!-- /your javascript here -->
</body>
</html>
