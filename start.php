<!DOCTYPE html>
<html lang="en">
<head>
    <title>ยินดีต้อนรับ : Can your other sell?</title>
    <!--CSS, Bootstrap-->
    <?php require("bin/header.php"); ?>
    <!--/CSS, Bootstrap-->
</head>

<body class="web-bg">
<!--แถบบาร์ข้างบน Navbar-->
<?php require("bin/navbar.php"); ?>
<!--/แถบบาร์ข้างบน Navbar-->

<div class="container-fluid">
    <div class="row">
        <!--โลโก้เว็บ-->
        <div class="col-sm-2">
            <?php require("bin/logo.php"); ?>
        </div>
        <!--/โลโก้เว็บ-->
        <div class="col-sm-7">
            <div class="row">
                <div class="col-sm-12">
                    <!--ช่องค้นหา พร้อมปุ่มกด-->
                    <?php require("bin/searchBox.php"); ?>
                    <!--/ช่องค้นหา พร้อมปุ่มกด-->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <!--เมนูกดเลือกประเภทสินค้า-->
            <?php require("bin/categoryMenu.php"); ?>
            <!--/เมนูกดเลือกประเภทสินค้า-->
        </div>
        <!-- ทำงานที่นี่ -->
        <?php //require("bin/popularProduct.php"); ?>
        <!-- สินค้าทั่วไป -->
        <?php require("bin/commonProduct.php"); ?>
        <!-- /สินค้าทั่วไป -->
    </div>
    <!-- /ทำงานที่นี่ -->
    <div class="col-sm-2">
        <!--แสดงสินค้าแนะนำ-->
        <?php require("bin/recommendProduct.php"); ?>
        <!--/แสดงสินค้าแนะนำ-->
    </div>
</div>


</body>
<?php require("bin/footer.php"); ?>
</html>
