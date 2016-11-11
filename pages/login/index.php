<?php session_start();
if(isset($_SESSION["idMember"])){ ?>
    <script>location.assign("../../start.php")</script>
<?php } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>เข้าสู่ระบบ</title>
    <!--CSS, Bootstrap-->
    <?php require("../../bin/header.php"); ?>
    <!--/CSS, Bootstrap-->
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

                <center><h2>เข้าสู่ระบบ</h2></center>
                <form style="padding: 1cm" method="post">
                    <div id="err_login"></div>
                    <div class="form-group">
                        <label for="email">อีเมลล์</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="กรุณากรอกอีเมลล์" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">รหัสผ่าน</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="กรุณากรอกรหัสผ่าน" required>
                    </div>
                    <center>
                        <a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/start.php">กลับสู่หน้าหลัก</a>&nbsp;&nbsp;
                        <button type="submit"  class="btn btn-default">เข้าสู่ระบบ</button>
                    </center>

                </form>

            </div>
        </div>

        <div class="col-sm-4"></div>

    </div>
    <?php require("../../bin/footer.php"); ?>
    <script src="script.js"></script>
</body>

</html>
