<!DOCTYPE html>
<html lang="en">
<head>
    <title>แจ้งเรื่องร้องเรียน</title>
    <!--CSS, Bootstrap-->
    <?php require("../../../bin/header.php"); ?>
    <!--/CSS, Bootstrap-->
</head>
<script>
    function validForm() {
        var number_of_upload = parseInt($("#problem-photo").get(0).files.length);
        var selected_category = $("#type").val();
        var error = "";
        var isError = false;
        if(selected_category == "") {
            error += "โปรดเลือกประเภทเรื่องร้องเรียน\n";
            isError = true;
            event.preventDefault();
        }
        if(number_of_upload > 10){
            error += "คุณสามารถอัพโหลดได้สูงสุด 10 รูป\n";
            isError = true;
            event.preventDefault();
        }

        if(isError){
            alert(error);
        }else {
            event.preventDefault();
            window.location.assign("http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/management_report_user/send_report_sec.php");
        }
    }

</script>
<body>
<!--แถบบาร์ข้างบน Navbar-->
<?php require("../../../bin/navbar.php"); ?><!--/แถบบาร์ข้างบน Navbar-->

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
              <i class="fa fa-gavel" aria-hidden="true"></i>&nbsp&nbspแจ้งเรื่องร้องเรียน
            </div>
            <div class="panel-body"><center>
              <form style="padding:40px 40px 40px 40px;" method="post">
                <div class="form-group" align="left">
                    <label for="type">ประเภทเรื่องร้องเรียน:</label>
						            <select class="form-control" id="type">
  						                  <option value="">---ระบุประเภทเรื่องร้องเรียน---</option>
						                    <option value="1">หมวดสินค้าผิดประเภท</option>
						                    <option value="2">สินค้าผิดกฎหมาย</option>
						                    <option value="3">ผู้ขายทำผิดกฎของเว็บ</option>
                                <option value="4">ไม่ได้รับสินค้า</option>
						            </select>
                </div>
                <div class="form-group" align="left">
                    <label for="subject">หัวเรื่อง : </label>
                    <input size="25" type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group" align="left">
                    <label for="url">ลิงค์ของประกาศ : </label>
                    <input size="25" type="text" class="form-control" name="url" id="url" required>
                </div>
                <div class="form-group" align="left">
                    <label for="problem-photo">รูปแสดงรายละเอียดปัญหา : *รองรับไฟล์ JPG,PNG,GIF สูงสุด 10 รูป</label>
                    <input id="problem-photo" name="question_pic[]" size="25" type="file" class="filestyle" accept="image/jpg, image/jpeg, image/png, image/gif" multiple>
                </div>
                <div class="form-group" align="left">
					          <label for="problem-detail">รายละเอียด:</label>
                    <textarea class="form-control" rows="10" id="problem-detail" required></textarea>
                </div>
                <div align="center">
                   <button type="submit" onclick="validForm()" class="btn btn-success">ส่งเรื่องร้องเรียน</button>
                </div>
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
