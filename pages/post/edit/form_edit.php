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
                <div class="panel-body">
                    <center>
                        <form enctype="multipart/form-data" style="padding:40px 40px 40px 40px;" method="post"
                              name="fileinfo">
                            <TABLE>
                                <!--
                                 <TR>
                                   <TD align = "right">
                                   สถานะสินค้า :&nbsp&nbsp&nbsp<br><br>
                                   </TD>

                                   <TD>
                                       <select id="status" name="status" >
                                           <option value="none">---- แก้ไขสถานะ ----</option>
                                           <option value="1">ประกาศขาย</option>
                                           <option value="2">สินค้าหมด</option>
                                           <option value="0">ยกเลิกการขาย</option>
                                           <option value="3">ขายแล้ว</option>
                                       </select><br><br>
                                   </TD>
                                 </TR>//-->
                                <TR>
                                    <TD>
                                    </TD>
                                    <TD align="left">
                                        <div id="imgView" class="thumbnail popular-product-img-thumbnail"
                                             style="width: 376px; height: auto;"></div>
                                        <br>
                                    </TD>

                                </TR>
                                <TR>
                                    <TD align="right">
                                        อัพโหลดรูปภาพ :&nbsp&nbsp&nbsp<br><br>
                                    </TD>
                                    <TD>
                                        <!--input type="file" name="filUpload[] "-->
                                        <input id="id_question_pic" name="file[]" size="25" type="file"
                                               class="filestyle" max-uploads=6
                                               accept="image/jpg, image/jpeg, image/png, image/gif" multiple>
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
                                    <TD align="right">
                                        ตั้งชื่อประกาศ :&nbsp&nbsp&nbsp<br><br>
                                    </TD>
                                    <TD>
                                        <input type="text" id="namePost" name="name" size="25" required/><br><br>
                                    </TD>
                                </TR>
                                <TR>
                                    <TD align="right">
                                        ประเภทสินค้า :&nbsp&nbsp&nbsp<br><br>
                                    </TD>
                                    <TD id="tdCategory">
                                        <select id="category" name="category"> </select><br><br>
                                    </TD>
                                </TR>
                                <TR>
                                    <TD align="right">
                                        ราคา :&nbsp&nbsp&nbsp<br><br>
                                    </TD>
                                    <TD>
                                        <input type="number" min="0" id="price" name="price" size="25"
                                               required/><br><br>
                                    </TD>
                                </TR>
                                <TR>
                                    <TD align="right">
                                        รายละเอียด :&nbsp&nbsp&nbsp<br><br>
                                    </TD>
                                    <TD>
                                        <textarea id="detail" name="detail" rows="5" cols="50"
                                                  required></textarea><br><br>
                                    </TD>
                                </TR>
                            </table>

                            <p>
                                <input name="Submit" type="submit" class="btn btn-success" onclick="validForm()"
                                       value="&nbsp&nbsp แก้ไข &nbsp&nbsp"/>
                            </p>

                            <br><br>
                        </form>
                </div>
            </div>
        </div>

        <div class="col-sm-2">
            <!--แสดงสินค้าแนะนำ-->
            <?php require("../../../bin/recommendProduct.php"); ?>
            <!--/แสดงสินค้าแนะนำ-->
        </div>
    </div>
    <?php require("../../../bin/footer.php"); ?>
</body>

<script>
    var idPost = <?php echo $_GET['idPost']; ?>;
    var idCat;

    $(document).ready(function () {

        $.post("ctrl.php",
            {
                function: "getDetailPostProductForEdit",
                idPost: idPost
            }
            , function (data, status) {
                if (status === "success") {
                    data = JSON.parse(data);

                    //$("#status").val(data.detail.status);
                    $("#imgView").html("<img src='../../../img/products/" + data.image[0].nameImage + "'>");
                    $("#namePost").val(data.detail.name);
                    $("#price").val(data.detail.price);
                    $("#detail").val(data.detail.detail);

                    var idCat = data.detail.category;

                    $.post("ctrl.php",
                        {
                            function: "getCategory"
                        }
                        , function (dataCat, status) {
                            if (status === "success") {
                                dataCat = JSON.parse(dataCat);
                                $("#category").append("<option value='' >-- ประเภทสินค้า --</option>");
                                for (var i = 0; i < dataCat.lists.length; i++) {
                                    if (dataCat.lists[i].idCategory == idCat) {
                                        $("#category").append("<option value='" + dataCat.lists[i].idCategory + "' selected> " + dataCat.lists[i].nameCategory + " </option>");
                                    } else {
                                        $("#category").append("<option value='" + dataCat.lists[i].idCategory + "' > " + dataCat.lists[i].nameCategory + " </option>");
                                    }
                                }
                            } else {
                                alert("fail");
                            }
                        });

                } else {
                    alert("fail");
                }
            });
    });

    function validForm() {
        event.preventDefault();
        var number_of_upload = parseInt($("#id_question_pic").get(0).files.length);
        var selected_category = $("#category").val();
        var namePost = $("#namePost").val();
        var price = $("#price").val();
        var detail = $("#detail").val();

        var error = "";
        var isError = false;
        if (selected_category == "") {
            error += "โปรดเลือกประเภทสินค้า\n";
            isError = true;

        }
        if (number_of_upload > 6) {
            error += "คุณสามารถอัพโหลดได้สูงสุด 6 รูป\n";
            isError = true;

        }


        var form = document.forms.namedItem("fileinfo");
        var photos = document.getElementById('id_question_pic');
        var img = photos.files;
        var image = [];
        for (var i = 0; i < img.length; i++) {
            image.push(img[i].name);
            //alert(img[i].name);
        }

        if (isError) {
            alert(error);
        } else {
            var r = confirm("ชื่อประกาศ: " + $("#namePost").val() + "\nประเภทสินค้า: " + $("#category :selected").text() + "\nราคา: " + $("#price").val() + "\nรายละเอียด: " + $("textarea#detail").val());
            if (r == true) {

                //alert("OK");
                //alert(form);
                //alert("addEventListener");
                var oData = new FormData(form);
                var oReq = new XMLHttpRequest();
                oReq.open("POST", "upload.php", true);
                oReq.onload = function () {
                    if (oReq.status == 200) {
                        //alert("status 200");
                        if (isError) {
                            alert(error);
                        } else {
                            $.post("ctrl.php", {
                                function: "editDetailPostProduct",
                                idPost: idPost,
                                name: namePost,
                                category: selected_category,
                                price: price,
                                detail: detail,
                                nameImage: image
                            }, function (data, status) {
                                if (status === "success") {
                                    //alert("complete");
                                    window.location.assign("http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/detail/ProductDetail.php?idPost=" + idPost);
                                }
                            });
                        }

                    }
                };
                oReq.send(oData);

            }
            //alert("end");
        }
    }
</script>
</html>
