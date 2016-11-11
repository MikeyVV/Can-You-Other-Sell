<!DOCTYPE html>
<html lang="en">
<head>
    <title>แก้ไขข้อมูลสินค้า</title>
    <!--CSS, Bootstrap-->
    <?php require("../../../bin/header.php"); ?>
    <!--/CSS, Bootstrap-->
</head>

<body>
<!--แถบบาร์ข้างบน Navbar-->
<?php require("../../../bin/navbar.php"); ?>
<!--/แถบบาร์ข้างบน Navbar-->

<div class="container-fluid">
    <div class="row">
        <!--โลโก้เว็บ-->
        <div class="col-sm-2">
            <?php require("../../../bin/logo.php"); ?>
        </div>
        <!--/โลโก้เว็บ-->
        <div class="col-sm-7">
            <div class="row">
                <div class="col-sm-12">
                    <!--ช่องค้นหา พร้อมปุ่มกด-->
                    <?php require("../../../bin/searchBox.php"); ?>
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
            <?php require("../../../bin/categoryMenu.php"); ?>
            <!--/เมนูกดเลือกประเภทสินค้า-->
        </div>

        <!-- ทำงานที่นี่ -->
        <div class="col-sm-8">
          <div class="panel panel-danger">
            <div class="panel-heading">
              <i class="fa fa-fire" aria-hidden="true"></i>&nbsp&nbspแก้ไขข้อมูลสินค้า
            </div>
            <div class="panel-body"><center>

              <br><br>
              <form method="post" name="" enctype="multipart/form-data">
                <TABLE >
                  <TR>
                    <TD align = "right">
                    สถานะสินค้า :&nbsp&nbsp&nbsp<br><br>
                    </TD>
                    <TD>
                      <select name="colors">
                        <option value="au">สถานะสินค้า</option>
                        <option value="au">ขายแล้ว</option>
                        <option value="ca" selected>ประกาศขาย</option>
                        <option value="usa">ยกเลิกการขาย</option>
                     </select><br><br>
                    </TD>
                  </TR>
                  <TR>
                    <TD>
                    </TD>
                    <TD align= "left">
                        <img src="http://angsila.cs.buu.ac.th/~57160177/SA/Mockup/img/basket-full-icon.png" width="180" height="180"><br><br>
                    </TD>

                  </TR>
                  <TR>
                    <TD align= "right">
                    อัพโหลดรูปภาพ :&nbsp&nbsp&nbsp<br><br>
                    </TD>
                    <TD>
                      <input type="file" name="filUpload[] ">
                      <br>
                    </TD>
                  </TR>
                  <TR>
                    <TD>
                    </TD>
                    <TD>
                    *รองรับไฟล์ JPG,PNG,GIF สูงสุด 6 รูป<br><br>
                    </TD>
                  </TR>
                <TR>
                  <TD align= "right">
                  ตั้งชื่อประกาศ :&nbsp&nbsp&nbsp<br><br>
                  </TD>
                  <TD>
                    <input type="text" id="name" name="name" size="25" value="รถไฟไทย สไตล์วินเทจ"/><br><br>
                  </TD>
                </TR>
                <TR>
                  <TD align= "right">
                  ประเภทสินค้า :&nbsp&nbsp&nbsp<br><br>
                  </TD>
                  <TD>
                    <select name="colors">
                 	 <option value="" >-- ประเภทสินค้า --</option>
                 	 <option value="a" > เครื่องใช้ไฟฟ้า </option>
                 	 <option value="b" > คอมพิวเตอร์ </option>
                 	 <option value="c" > รถยนต์ </option>
                 	 <option value="d" > นาฬิกา </option>
                   <option value="e" selected> ยานพาหนะ </option>
                 	 </select><br><br>
                  </TD>
                </TR>
                <TR>
                  <TD align= "right">
                  ราคา :&nbsp&nbsp&nbsp<br><br>
                  </TD>
                  <TD>
                    <input type="text" id="name" name="name" size="25" value="200,000,000"/><br><br>
                  </TD>
                </TR>
                <TR >
                  <TD align= "right">
                  รายละเอียด :&nbsp&nbsp&nbsp<br><br>
                  </TD>
                  <TD>
                      <textarea id="address" name="address" rows="5" cols="50">ของแบบนี้ไม่มีขายที่ไหนหรอกนอกจากที่นี่เท่านั้น!!</textarea><br><br>
                  </TD>
                </TR>
              </table>

              <div>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">&nbsp&nbsp แก้ไข &nbsp&nbsp</button>
              </div>

              <br><br>
            </form>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><p><h2>ยืนยันการแก้ไขข้อมูลสินค้าหรือไม่?</h2></p></center>
              </div>
              <div class="modal-footer">
                <a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/ProductDetail.php" type="button" class="btn btn-success">&nbsp&nbsp ยืนยัน &nbsp&nbsp</a>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <button type="button" class="btn btn-default" data-dismiss="modal">&nbsp&nbsp ยกเลิก &nbsp&nbsp</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /Modal -->
        <!-- /ทำงานที่นี่ -->

        <div class="col-sm-2">
            <!--แสดงสินค้าแนะนำ-->
            <?php require("../../../bin/recommendProduct.php"); ?>
            <!--/แสดงสินค้าแนะนำ-->
        </div>
    </div>
    <?php require("../../../bin/footer.php"); ?>
</body>
</html>
