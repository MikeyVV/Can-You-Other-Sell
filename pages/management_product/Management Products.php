<!DOCTYPE html>
<html lang="en">
<head>
    <title>จัดการขายสินค้า</title>
    <!--CSS, Bootstrap-->
    <?php require("../../bin/header.php"); ?>

<script type="text/javascript">
$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });

    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });


});
</script>
<script>
$(document).ready(function(){
    $("#country").hide();
    $('#select_all').on('click',function(){
      if( $('.checkbox:checked').length > 0 ) {
          $("#country").show();
      } else {
          $("#country").hide();
      }
    });
  $('.checkbox').click(function() {
      if( $('.checkbox:checked').length > 0 ) {
          $("#country").show();
      } else {
          $("#country").hide();
      }
  });
});
</script>
<style>
select {
    width: 100%;
    padding: 5px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
}
</style>
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
          <!--ทำงานที่นี่ ทำงานที่นี่    ทำงานที่นี่ ทำงานที่นี่-->

              <div class="box-header with-border">
                <h3 class="box-title">จัดการขายสินค้า</h3>

                <div class="box-tools pull-right">
                  <div class="has-feedback">

                  </div>
                </div><!-- /.box-tools -->
              </div><!-- /.box-header -->
              <div class="box-body no-padding">
                <div class="mailbox-controls">




                  <div class="btn-group">
                    <form>
    <select id="country" name="country" >
      <option value="au">สถานะสินค้า</option>
      <option value="au">ขายแล้ว</option>
      <option value="ca">ประกาศขาย</option>
      <option value="usa">ยกเลิกการขาย</option>
    </select>
  </form>
                  </div>

                  <div class="pull-right">

                    1-50/200
                    <div class="btn-group">
                      <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                      <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                    </div><!-- /.btn-group -->
                    <a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/form_post.php" class="btn btn-default" role="button"">ประกาศขายสินค้า</a>
                  </div><!-- /.pull-right -->
                </div>
                <br>
                <div class="table-responsive mailbox-messages">
                  <table class="table table-hover table-striped">
                    <tbody>
                      <tr>
                        <!-- Check all button -->
                        <td><input type="checkbox" id="select_all"  /></td>
                        <td></td>
                        <td class="mailbox-name">วัน/เดือน/ปี</a>&nbsp<i class="fa fa-fw fa-sort-down"></i></td>
                        <td class="mailbox-subject"><b>ชื่อประกาศ</b>&nbsp<i class="fa fa-fw fa-sort-down"></i> </td>
                        <td class="mailbox-attachment">ประเภทของสินค้า&nbsp<i class="fa fa-fw fa-sort-down"></i></td>
                        <td class="mailbox-date">ราคาของสินค้า&nbsp<i class="fa fa-fw fa-sort-down"></i></td>
                        <td class="mailbox-date">สถานะ&nbsp<i class="fa fa-fw fa-sort-down"></i></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="checkbox" value="1" /><td>
                        <td class="mailbox-name">05/05/2559</td>
                        <td class="mailbox-subject"><a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/ProductDetail.php">รถไฟมือสองราคาถูกจ้า</a></td>
                        <td class="mailbox-attachment">ยานพาหนะ</td>
                        <td class="mailbox-date">200,000,000,000</td>
                          <td class="mailbox-date">ประกาศขายแล้ว</td>
                        <td>
                          <button ><i class="fa fa-edit"></i></button>

                        <!-- /.btn-group --></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="checkbox" value="1" id="check"/><td>
                        <td class="mailbox-name">18/02/2559</td>
                        <td class="mailbox-subject"><a href="#">กล้องถ่ายสาว</a></td>
                        <td class="mailbox-attachment">กล้องถ่ายภาพ</td>
                        <td class="mailbox-date">200,000</td>
                          <td class="mailbox-date">ขายแล้ว</td>
                        <td>
                          <button ><i class="fa fa-edit"></i></button>

                        <!-- /.btn-group --></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="checkbox" value="1" id="check"/><td>
                        <td class="mailbox-name">05/02/2559</td>
                        <td class="mailbox-subject"><a href="#">คอมมมมมม</a></td>
                        <td class="mailbox-attachment">คอมพิวเตอร์</td>
                        <td class="mailbox-date">200</td>
                          <td class="mailbox-date">ประกาศขายแล้ว</td>
                        <td>
                          <button ><i class="fa fa-edit"></i></button>

                        <!-- /.btn-group --></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="checkbox" value="1" id="check"/><td>
                        <td class="mailbox-name">05/05/2559</td>
                        <td class="mailbox-subject"><a href="#">รถเจ้ามือ</a></td>
                        <td class="mailbox-attachment">ยานพาหนะ</td>
                        <td class="mailbox-date">200,000,000,000,000</td>
                          <td class="mailbox-date">ประกาศขายแล้ว</td>
                        <td>
                          <button ><i class="fa fa-edit"></i></button>

                        <!-- /.btn-group --></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="checkbox" value="1" id="check"/><td>
                        <td class="mailbox-name">05/05/2559</td>
                        <td class="mailbox-subject"><a href="#">มอเตอร์ไซน์</a></td>
                        <td class="mailbox-attachment">ยานพาหนะ</td>
                        <td class="mailbox-date">20</td>
                          <td class="mailbox-date">ประกาศขายแล้ว</td>
                        <td>
                          <button ><i class="fa fa-edit"></i></button>

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
            <div class="panel panel-default">
  <div class="panel-heading">
    <b>สินค้าแนะนำ</b>
  </div>
  <div class="panel-body">
    <div style="text-align:center" class="list-group">
        <img
            src="http://th-live-01.slatic.net/p/toshiba-tuueyn-1-pratuu-curve-live-khnaad-5-khiw-run-gr-b145tznn-siiekhiiyw-7592-0591382-1.jpg"
            class="recommend-product img-thumbnail">
        <a href="#"><p>ตู้เย็นโตชิบา</p></a>
        <p>ราคา 4,000 บาท</p>
        <p>พัทยา, ชลบุรี</p>
        <img src="https://i.ytimg.com/vi/bMbW4VSHpEg/maxresdefault.jpg"
             class="recommend-product img-thumbnail">
        <a href="#"><p>รถไฟไทย สไตล์วินเทจ</p></a>
        <p>ราคา 120,000,000 บาท</p>
        <p>มักกะสัน, กรุงเทพฯ</p>
        <img src="http://cp.lnwfile.com/_/cp/_raw/zt/86/7g.jpg" class="recommend-product img-thumbnail">
        <a href="#"><p>นาฬิกา TAG</p></a>
        <p>ราคา 20,000 บาท</p>
        <p>หัวหิน, ประจวบคีรีขัน</p>
    </div>
    </div>
</div>
            <!--/แสดงสินค้าแนะนำ-->
        </div>
    </div>
    <footer class="page-footer center-on-small-only ">
  <div class="container">
    <div class="row">
        <hr>
      <div class="col-md-4">
      Copyright&nbsp&copy;&nbsp2559&nbspCYOS&nbspCorporation<br>
      About Us<br>
      Contact 088-345-5511
      </div>
      </div>
  </div>
</footer>



</body>
</html>
