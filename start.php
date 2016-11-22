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
        <?php require("bin/popularProduct.php"); ?>
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

<script>
    var nf = new Intl.NumberFormat();
    $(document).ready(function () {
        $.post("http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/bin/ctrl.php",
            {
                function: "getTopFour"
            }
            , function (data, status) {

                if (status === "success") {
                    data = JSON.parse(data);
                    for (var i = 0; i < data.lists.length; i++) {
                        $("#popular-list").append("<div class='col-sm-3'> <div class='thumbnail popular-product'><div class='thumbnail popular-product-img-thumbnail'><a href='http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/detail/ProductDetail.php?idPost="+data.lists[i].idPost+"'><img src='http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/img/products/"+data.lists[i].nameImage+"'></a></div><div class='caption'><a href='http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/detail/ProductDetail.php?idPost="+data.lists[i].idPost+"'><p>"+data.lists[i].name+"</p></a><p>ราคา "+nf.format(data.lists[i].price)+" บาท</p><p>"+data.lists[i].address+"</p></div></div></div>");
                    }

                } else {
                    alert("fail");
                }
            });
    });
</script>
