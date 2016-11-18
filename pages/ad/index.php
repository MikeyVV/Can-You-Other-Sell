<!DOCTYPE html>
<html lang="en">
<head>
    <title>จัดการโฆษณา</title>
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
        <div class="col-sm-8">
            <h1 style="display: inline">จัดการโฆษณา</h1>
            <a class="btn btn-default pull-right" role="button" href="new/">+ เพิ่มโฆษณา</a>
            <!--Display table-->
            <table class="table table-striped cyos-table-white">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>ชื่อ</th>
                    <th>ที่อยู่</th>
                    <th>ลิงค์ประกาศ</th>
                    <th>ราคา</th>
                    <th>สถานะ</th>
                    <th>วันสิ้นสุด</th>
                </tr>
                </thead>
                <tbody id="ad-list">
                <tr></tr>
                </tbody>
            </table>
        </div>
        <!-- /ทำงานที่นี่ -->
        <div class="col-sm-2">

        </div>
    </div>
    <?php require("../../bin/footer.php"); ?>
</body>
</html>
