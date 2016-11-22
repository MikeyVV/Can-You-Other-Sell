<?php
$keyword = $_GET['keyword'];

require("../../classes/SearchProduct.php");

$detail = new SearchProduct();

$out = json_decode($detail->search($keyword));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $keyword; ?> | ผลการค้นหา</title>
    <!--CSS, Bootstrap-->
    <?php require("../../bin/header.php"); ?>
    <!--/CSS, Bootstrap-->

</head>

<body class="web-bg">
<!--แถบบาร์ข้างบน Navbar-->
<?php require("../../bin/navbar.php"); ?>
<!--/แถบบาร์ข้างบน Navbar-->

<div class="container-fluid">
    <div class="row">
        <!--โลโก้เว็บ-->
        <div class="col-sm-2">
            <?php require("../../bin/logo.php"); ?>
        </div>

        <!--/โลโก้เว็บ-->
        <div class="col-sm-7">
            <div class="row">
                <div class="col-sm-12">
                    <!--ช่องค้นหา พร้อมปุ่มกด-->
                    <?php require("../../bin/searchBox.php"); ?>
                    <!--/ช่องค้นหา พร้อมปุ่มกด-->
                </div>
            </div>
            <div class="row">
                <!--ประเภทสินค้ายอดนิยม-->
                <?php //require("../../bin/popularProduct.php"); ?>
                <!--/ประเภทสินค้ายอดนิยม-->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <!--เมนูกดเลือกประเภทสินค้า-->
            <?php require("../../bin/categoryMenu.php"); ?>
            <!--/เมนูกดเลือกประเภทสินค้า-->
        </div>
        <!-- ทำงานที่นี่ -->
        <div class="col-sm-8">
            <!-- ผลการค้นหา -->

            <div class="alert alert-info">
                <i class="fa fa-search" aria-hidden="true"></i>&nbsp&nbsp<strong><?php echo $keyword; ?></strong> -
                ผลการค้นหา
            </div>

            <div class="row">
                <?php for ($i = 0; $i < count($out->lists); $i++) { ?>
                    <div class="col-sm-2">

                        <div class="thumbnail popular-product">
                            <div class="thumbnail popular-product-img-thumbnail">
                                <div id="img"><img src="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/img/products/<?php echo $out->lists[$i]->nameImage ?>" style="width:100px;height:100px;"></div>
                            </div>
                            <div class="caption">
                                
                                <a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/detail/ProductDetail.php?idPost=<?php echo $out->lists[$i]->idPost ?>"><p><?php echo $out->lists[$i]->name ?></p></a>
                                <p><?php echo $out->lists[$i]->price ?></p>
                                <p><?php echo $out->lists[$i]->address ?></p>

                            </div>
                        </div>

                    </div>
                    <?php
                }
                ?>
            </div>

            <?php if (count($out->lists) == 0) {
                echo " 
                <div class='jumbotron'>
                    <h1>แย่จัง :(</h1>
                    <p>เราไม่พบประกาศขายที่คุณค้นหา โปรดลองใช้คำค้นที่สั้นกว่านี้</p>
                </div>";
            }
            ?>

            <!-- /ผลการค้นหา -->
        </div>
        <!-- /ทำงานที่นี่ -->
        <div class="col-sm-2">
            <!--แสดงสินค้าแนะนำ-->
            <?php require("../../bin/recommendProduct.php"); ?>
            <!--/แสดงสินค้าแนะนำ-->
        </div>
    </div>
    <?php require("../../bin/footer.php"); ?>
</body>
</html>
