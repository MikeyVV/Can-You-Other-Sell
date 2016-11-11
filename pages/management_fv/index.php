<!DOCTYPE html>
<html lang="en">
<head>
    <title>สินค้าที่สนใจ</title>
    <!--CSS, Bootstrap-->
  <?php require("../../bin/header.php"); ?>

  <script>

$(document).ready(function(){

  $(".star.glyphicon").click(function() {
$(this).toggleClass("glyphicon-star glyphicon-star-empty");
});

});


    </script>
    <style>

      .star {
    font-size: 25px;
  	color:gold;
  }


    </style>
  </head>
<body>
<!--แถบบาร์ข้างบน Navbar-->
<?php require("../../bin/navbar.php"); ?><!--/แถบบาร์ข้างบน Navbar-->

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
                <?php require("../../bin/popularProduct.php"); ?>
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
          <!--ทำงานที่นี่ ทำงานที่นี่    ทำงานที่นี่ ทำงานที่นี่-->

              <div class="box-header with-border">
                <h3 class="box-title">สินค้าที่สนใจ</h3>

                <div class="box-tools pull-right">
                  <div class="has-feedback">

                  </div>
                </div><!-- /.box-tools -->
              </div><!-- /.box-header -->
              <div class="box-body no-padding">
                <div class="mailbox-controls">




                  <div class="btn-group">

                  </div>

                  <div class="pull-right">

                    1-50/200
                    <div class="btn-group">
                      <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                      <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                    </div><!-- /.btn-group -->

                  </div><!-- /.pull-right -->
                </div>
                <br>
                <div class="table-responsive mailbox-messages">
                  <table class="table table-hover table-striped">
                    <tbody>
                      <tr>
                        <!-- Check all button -->

                        <td></td>
                        <td class="mailbox-name">วัน/เดือน/ปี&nbsp<i class="fa fa-fw fa-sort-down"></i></td>
                        <td class="mailbox-subject"><b>ชื่อประกาศ</b>&nbsp<i class="fa fa-fw fa-sort-down"></i> </td>
                        <td class="mailbox-attachment">ประเภทของสินค้า&nbsp<i class="fa fa-fw fa-sort-down"></i></td>
                        <td class="mailbox-date">ราคาของสินค้า&nbsp<i class="fa fa-fw fa-sort-down"></i></td>
                        <td class="mailbox-date">สถานะ&nbsp<i class="fa fa-fw fa-sort-down"></i></td>
                        <td></td>
                      </tr>
                      <tr>
                      <td ><div>
  <span class="star glyphicon glyphicon-star"></span>
</div></td>
                        <td class="mailbox-name">05/05/2559</td>
                        <td class="mailbox-subject"><a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/ProductDetail.php">รถไฟไทย สไตล์วินเทจ</a></td>
                        <td class="mailbox-attachment">ยานพาหนะ</td>
                        <td class="mailbox-date">200,000,000,000</td>
                          <td class="mailbox-date">ประกาศขายแล้ว</td>
                        <td>


                        <!-- /.btn-group --></td>
                      </tr>
                      <tr>
                        <td ><div>
    <span class="star glyphicon glyphicon-star"></span>
    </div></td>
                        <td class="mailbox-name">05/05/2559</td>
                        <td class="mailbox-subject"><a href="#">รถมือสองราคาถูกจ้า</a></td>
                        <td class="mailbox-attachment">ยานพาหนะ</td>
                        <td class="mailbox-date">500,000</td>
                          <td class="mailbox-date">ประกาศขายแล้ว</td>
                        <td>


                        <!-- /.btn-group --></td>
                      </tr>

                    </tbody>
                  </table><!-- /.table -->
                </div><!-- /.mail-box-messages -->
              </div><!-- /.box-body -->
              <div class="box-footer no-padding">
                <div class="mailbox-controls">
                  <!-- Check all button -->

                  <div class="pull-right">
                    1-50/200
                    <div class="btn-group">
                      <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                      <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                    </div><!-- /.btn-group -->
                  </div><!-- /.pull-right -->
                </div>
              </div>

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
