<?php
$category =  $_GET['nameCategory'];
$idCategory =  $_GET['idCategory'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $category;?></title>
    <!--CSS, Bootstrap-->
    <?php require("../../bin/header.php"); ?>
    <!--/CSS, Bootstrap-->
</head>

<body class="web-bg">
<input id="idCate" type="hidden" value="<?php echo $idCategory; ?>">
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
            &nbsp&nbsp<strong><?php echo $category;?></strong>
          </div>

          <div id="list" class="row"></div>



          <div id="errorCate"></div>

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

<script>
  var nf = new Intl.NumberFormat();
  $(document).ready(function () {
    $.post("http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/category/ctrl.php",
        {
          function: "getProductByCategory",
          idCategory: $('#idCate').val()
        }
        , function (data, status) {
          if (status === "success") {
            data = JSON.parse(data);
            //alert(data.lists[0].price);
            var nf = new Intl.NumberFormat()
            if(data.lists.length == 0){
              $("#errorCate").append("<div class='jumbotron'> <h1>ขอโทษที T_T</h1><p>ยังไม่มีประกาศขายสินค้าประเภทนี้ คุณสามารถลงประกาศได้ที่ หน้าสมาชิก > จัดการขายสินค้า > ประกาศขายสินค้า</p></div>");
            }else{
              for(var i = 0; i < data.lists.length; i++){
                $("#list").append("<div class='col-sm-3'> <div class='thumbnail popular-product'><div class='thumbnail popular-product-img-thumbnail'><a href='http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/detail/ProductDetail.php?idPost="+data.lists[i].idPost+"'><img src='http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/img/products/"+data.lists[i].nameImage+"'></a></div><div class='caption'><a href='http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/detail/ProductDetail.php?idPost="+data.lists[i].idPost+"'><p>"+data.lists[i].name+"</p></a><p>ราคา "+nf.format(data.lists[i].price)+" บาท</p><p>"+data.lists[i].address+"</p></div></div></div>");
              }

            }

          }
        });
  });
</script>
