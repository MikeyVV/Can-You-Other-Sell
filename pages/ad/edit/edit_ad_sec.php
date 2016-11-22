<!DOCTYPE html>
<html lang="en">
<head>
    <title>ฃื่อหน้า</title>
    <!--CSS, Bootstrap-->
    <?php require("../../../bin/header.php"); ?>
    <!--/CSS, Bootstrap-->
</head>

<body>
<!--แถบบาร์ข้างบน Navbar-->
<?php require("../../../bin/navbar.php"); ?>
<!--/แถบบาร์ข้างบน Navbar-->
<?php if($isLogin AND $isOfficer) {?>
<div class="container-fluid">
    <div class="row">
        <!--โลโก้เว็บ-->
        <div class="col-sm-2">

        </div>
        <!--/โลโก้เว็บ-->
        <div class="col-sm-7">
            <div class="row">
                <div class="col-sm-12">
                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
        </div>
        <!-- ทำงานที่นี่ -->
        <div class="col-sm-8">
            <div class="cyos-card" style="background-color: white; padding: 5vh;">
                <h1 style="text-align: center;color: gray;border: 1px solid;padding: 7vh;margin: -4vh;">แก้ไขโฆษณาเรียบร้อยแล้ว</h1>
            </div>
        </div>
        <!-- /ทำงานที่นี่ -->
        <div class="col-sm-2">

        </div>
    </div>

    <script>
        setTimeout(function () {
            location.assign("./?idAd=<?php echo $_GET['idAd']; ?>");
        }, 3000);

    </script>
    <?php } else { ?>
        <h1 style="text-align: center">404 ERROR<br> Page Not Found :( </h1>
        <p style="text-align: center">เราไม่พบหน้าที่คุณต้องการ</p>
    <?php } ?>
</body>
</html>
