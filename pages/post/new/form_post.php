<!DOCTYPE html>
<html lang="en">
<head>
    <title>โพสสินค้า</title>
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
               <form enctype="multipart/form-data" style="padding:40px 40px 40px 40px;" method="post" name="fileinfo">
                <TABLE >
                  <TR>
                    <TD align= "right">
                    อัพโหลดรูปภาพ :&nbsp&nbsp&nbsp<br><br>
                    </TD>
                    <TD>
                      <!--input type="file" name="filUpload[] "-->
                      <input id="id_question_pic" name="file[]" size="25" type="file" class="filestyle" max-uploads = 6 accept="image/jpg, image/jpeg, image/png, image/gif" multiple>
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
                    <input type="text" id="namePost" name="name" size="25" required/><br><br>
                  </TD>
                </TR>
                <TR>
                  <TD align= "right">
                    ประเภทสินค้า :&nbsp&nbsp&nbsp<br><br>
                  </TD>
                  <TD>
                    <select id="category" name="category"> </select><br><br>
                  </TD>
                </TR>
                <TR>
                  <TD align= "right">
                    ราคา :&nbsp&nbsp&nbsp<br><br>
                  </TD>
                  <TD>
                    <input type="number" min="0" id="price" name="price" size="25" required/><br><br>
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

                   <input type="hidden" id="idPost">
                   
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

<script>

    $(document).ready(function () {
        $.post("ctrl.php",
            {
                function: "getCategory"
            }
            , function (data, status) {
                if (status === "success") {
                    data = JSON.parse(data);
                    $("#category").append("<option value='' >-- ประเภทสินค้า --</option>");
                    
                    for (var i = 0; i < data.lists.length; i++) {
                        $("#category").append("<option value='"+data.lists[i].idCategory+"' > "+data.lists[i].nameCategory+" </option>");
                    }

                } else {
                    alert("fail");
                }
            });
    });

    function validForm() {
        var number_of_upload = parseInt($("#id_question_pic").get(0).files.length);
        var selected_category = $("#category").val();
        var namePost = $("#namePost").val();
        var price = $("#price").val();
        var detail = $("#detail").val();

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
        if(number_of_upload == 0){
            error += "คุณจำเป็นต้องอัพโหลดรูปสินค้าอย่างน้อย 1 รูป\n";
            isError = true;
            event.preventDefault();
        }


        var form = document.forms.namedItem("fileinfo");
        var photos = document.getElementById('id_question_pic');
        var img = photos.files;
        var image =[];
        for(var i=0; i<img.length ; i++){
            image.push(img[i].name);
            //alert(img[i].name);
        }

        if(isError){
            alert(error);
        }else {
            var r = confirm("ชื่อประกาศ: " + $("#namePost").val() + "\nประเภทสินค้า: " + $("#category :selected").text() + "\nราคา: " + $("#price").val() + "\nรายละเอียด: " + $("textarea#detail").val());
            if(r == true){

                //alert("OK");
                form.addEventListener('submit', function (ev) {
                    //alert("addEventListener");
                    var oData = new FormData(form);
                    var oReq = new XMLHttpRequest();
                    oReq.open("POST", "upload.php", true);
                    oReq.onload = function () {
                        if (oReq.status == 200) {
                            //alert("status 200");
                            if(isError){
                                alert(error);
                            }else {
                                $.post("ctrl.php",{
                                    function: "postProduct",
                                    name : namePost,
                                    category : selected_category,
                                    price : price,
                                    detail : detail,
                                    nameImage : image
                                },function (data, status) {
                                    if (status === "success") {
                                        data = JSON.parse(data);
                                        $("#idPost").val(data.idPost);
                                        window.location.assign("http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/sellSec.php?idPost="+data.idPost);
                                    }
                                });
                            }

                        }
                    };
                    oReq.send(oData);
                    ev.preventDefault();
                }, false);
            } else {
                event.preventDefault();
            }
            //alert("end");
        }
    }



</script>

</html>
