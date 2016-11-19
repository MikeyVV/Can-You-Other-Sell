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
            <!--div class="row">
                <!--ประเภทสินค้ายอดนิยม-->
            <?php //require("bin/popularProduct.php"); ?>
            <!--/ประเภทสินค้ายอดนิยม-->
            <!-- /div -->
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <!--เมนูกดเลือกประเภทสินค้า-->
            <?php require("bin/categoryMenu.php"); ?>
            <!--/เมนูกดเลือกประเภทสินค้า-->
        </div>
        <!-- ทำงานที่นี่ -->
        <div class="col-sm-8">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <i class="fa fa-fire" aria-hidden="true"></i>&nbsp&nbspสินค้ายอดนิยม
                </div>
                <div class="panel-body">
                    <div class="row">

                        <div class="col-sm-3">
                            <div class="thumbnail popular-product">
                                <div class="thumbnail popular-product-img-thumbnail">
                                    <a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/ProductDetail.php"><img
                                            src="https://i.ytimg.com/vi/bMbW4VSHpEg/maxresdefault.jpg"></a>
                                </div>
                                <div class="caption">
                                    <a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/ProductDetail.php">
                                        <p>รถไฟไทย สไตล์วินเทจ</p></a>
                                    <p>ราคา 200,000,000 บาท</p>
                                    <p>มักกะสัน, กรุงเทพฯ</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="thumbnail popular-product">
                                <div class="thumbnail popular-product-img-thumbnail">
                                    <a href="#"><img
                                            src="http://www.carbatterymp.com/wp-content/uploads/2015/05/Honda-Accord-Battery.jpg"></a>
                                </div>
                                <div class="caption">
                                    <a href="#"><p>รถยนต์ฮอนด้า</p></a>
                                    <p>ราคา 6,000,000 บาท</p>
                                    <p>พัทยา, ชลบุรี</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="thumbnail popular-product">
                                <div class="thumbnail popular-product-img-thumbnail">
                                    <a href="#"><img src="http://cp.lnwfile.com/_/cp/_raw/zt/86/7g.jpg"></a>
                                </div>
                                <div class="caption">
                                    <a href="#"><p>นาฬิกา TAG</p></a>
                                    <p>ราคา 20,000 บาท</p>
                                    <p>หัวหิน, ประจวบคีรีขันี</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="thumbnail popular-product">
                                <div class="thumbnail popular-product-img-thumbnail">
                                    <a href="#"><img
                                            src="http://th-live-01.slatic.net/p/toshiba-tuueyn-1-pratuu-curve-live-khnaad-5-khiw-run-gr-b145tznn-siiekhiiyw-7592-0591382-1.jpg"></a>
                                </div>
                                <div class="caption">
                                    <a href="#"><p>ตู้เย็นโตชิบา</p></a>
                                    <p>ราคา 4,000 บาท</p>
                                    <p>พัทยา, ชลบุรี</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <hr>
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
</div>

</body>
<?php require("bin/footer.php"); ?>
</html>
