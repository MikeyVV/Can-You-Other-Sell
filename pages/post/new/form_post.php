<!DOCTYPE html>
<html lang="en">
<head>
    <title>โพสสินค้า</title>
    <!--CSS, Bootstrap-->
    <?php require("../../../bin/header.php"); ?>
    <!--/CSS, Bootstrap-->
</head>
<script>
    function validForm() {
        var number_of_upload = parseInt($("#id_question_pic").get(0).files.length);
        var selected_category = $("#category").val();
        var error = "";
        var isError = false;
        if(selected_category == "") {
            error += "โปรดเลือกประเภทสินค้า\n";
            isError = true;
            event.preventDefault();
        }
        if(number_of_upload > 6){
            error += "คุณสามารถอัพโหลดได้สูงสุด 6 รูป\n";
            isError = true;
            event.preventDefault();
        }

        if(isError){
            alert(error);
        }else {
            var r = confirm("ชื่อประกาศ: " + $("#name").val() + "\nประเภทสินค้า: " + $("#category :selected").text() + "\nราคา: " + $("#price").val() + "\nรายละเอียด: " + $("textarea#detail").val());
            if(r == true){ event.preventDefault(); window.location.assign("http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/sellSec.php"); }
            else {event.preventDefault();}
        }
    }

</script>

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
                <?php require("../../../bin/popularProduct.php"); ?>
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
              <i class="fa fa-fire" aria-hidden="true"></i>&nbsp&nbspประกาศขายสินค้า
            </div>
            <div class="panel-body"><center>
                    <img style="witdh: 150px;height: 150px;" src="../../../img/basket-full-icon.png">
              <br><br>
              <form method="post" name="">
                <TABLE >
                  <TR>
                    <TD align= "right">
                    อัพโหลดรูปภาพ :&nbsp&nbsp&nbsp<br><br>
                    </TD>
                    <TD>
                      <!--input type="file" name="filUpload[] "-->
                        <input type="file" name="question_pic[]" id="id_question_pic" max-uploads = 6 accept="image/jpg, image/jpeg, image/png, image/gif" multiple/>
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
                    <input type="text" id="name" name="name" size="25" required/><br><br>
                  </TD>
                </TR>
                <TR>
                  <TD align= "right">
                    ประเภทสินค้า :&nbsp&nbsp&nbsp<br><br>
                  </TD>
                  <TD>
                    <select id="category" name="colors">
                 	 <option value="" >-- ประเภทสินค้า --</option>
                 	 <option value="a" > เครื่องใช้ไฟฟ้า </option>
                 	 <option value="b" > คอมพิวเตอร์ </option>
                 	 <option value="c" > รถยนต์ </option>
                 	 <option value="d" > นาฬิกา </option>
                   <option value="e"> ยานพาหนะ </option>
                 	 </select><br><br>
                  </TD>
                </TR>
                <TR>
                  <TD align= "right">
                    ราคา :&nbsp&nbsp&nbsp<br><br>
                  </TD>
                  <TD>
                    <input type="number" min="0" id="price" onkeypress="isNumber()" name="price" size="25" required/><br><br>
                  </TD>
                </TR>
                <TR >
                  <TD align= "right">
                    รายละเอียด :&nbsp&nbsp&nbsp<br><br>
                  </TD>
                  <TD>
                      <textarea id="detail" name="detail" rows="5" cols="50" required></textarea><br><br>
                  </TD>
                </TR>
              </table>

              <p>
              	<input name="Submit" type="submit" class="btn btn-success" onclick="validForm()" value="&nbsp&nbsp ยืนยัน &nbsp&nbsp" />
              </p>

              <br><br>
            </form>
            </div>
          </div>
        </div>
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
