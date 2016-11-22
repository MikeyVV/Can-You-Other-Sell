<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>รายละเอียดของสินค้า</title>
    <!--CSS, Bootstrap-->
    <?php require("../../../bin/header.php"); ?>

</head>

<body class="web-bg">
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
                <div class="panel-body">
                    <div align='right' id='editButton'></div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!--รูป-->
                            <div class="row">
                                <div class="col-sm-8">
                                    <br><br><span id="img1"></span>
                                </div>
                                <br><br>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-sm-12" id="img2"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-12" id="img3"></div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4" id="img4"></div>
                                <div class="col-sm-4" id="img5"></div>
                                <div class="col-sm-4" id="img6"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h2 id="name"></h2></div>
                                <div class="col-sm-2">
                                    <?php if (isset($_SESSION["idMember"])) echo "<img src='../../../img/Star-unactive.png' id='unactive'>
                                                                                  <img src='../../../img/Star-active.png' id='active'>"; ?>

                                </div>
                            </div>
                            <h5><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp&nbsp<span id="address"></span>
                            </h5>
                            <h5><span id="detail"></span></h5><br><br><br>
                            <h5><i class="fa fa-tags" aria-hidden="true"></i>&nbsp&nbspราคา</h5>
                            <h3 style="color:red;"><span id="price"></span> บาท</h3>
                            <h5><span id="seller"></span>&nbsp&nbsp&nbsp<span id="rate"></span>&nbsp(<span
                                    id="totalVote"></span>)</h5>
                            <h5><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp&nbsp<span id="phoneNumber">089-999-9999</span>
                            </h5>
                            <h5><b>L</b> : <span id="lineID">tanachot</span></h5>
                            <h5><i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp&nbsp<span id="facebook">tanachot</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <!-- สินค้าทั่วไป -->
            <?php require("../../../bin/commonProduct.php"); ?>
            <!-- /สินค้าทั่วไป -->
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
        var idPost = "<?php echo $_GET['idPost'] ?>";
        $.post("ctrl.php",
            {
                function: "getDetailPostProduct",
                idPost: idPost
            }
            , function (data, status) {
                if (status === "success") {
                    data = JSON.parse(data);
                    $("#name").html(data.detail.name);
                    $("#address").html(data.detail.address);
                    $("#detail").html(data.detail.detail);

                    var nf = new Intl.NumberFormat();
                    $("#price").html(nf.format(data.detail.price));
                    $("#seller").html("<a href='../../profile/index.php?idMember=" + data.detail.idMember + "'><i class='fa fa-user' aria-hidden='true'></i>&nbsp&nbsp" + data.detail.firstName + " " + data.detail.lastName + "</a>");
                    var rate = Math.floor(data.detail.rate);
                    //alert(data.detail.rate);
                    //alert(rate);
                    if (rate == 0) {
                        $("#rate").html("<img src='../../../img/star-rating/star-0.png'>");
                    } else if (rate == 1) {
                        $("#rate").html("<img src='../../../img/star-rating/star-1.png'>");
                    } else if (rate == 2) {
                        $("#rate").html("<img src='../../../img/star-rating/star-2.png'>");
                    } else if (rate == 3) {
                        $("#rate").html("<img src='../../../img/star-rating/star-3.png'>");
                    } else if (rate == 4) {
                        $("#rate").html("<img src='../../../img/star-rating/star-4.png'>");
                    } else if (rate == 5) {
                        $("#rate").html("<img src='../../../img/star-rating/star-5.png'>");
                    }
                    $("#totalVote").html(nf.format(data.detail.totalVote));
                    $("#phoneNumber").html(data.detail.phoneNumber);
                    $("#lineID").html(data.detail.lineID);
                    $("#facebook").html(data.detail.facebook);
                    for (var i = 0; i < data.image.length; i++) {
                        $("#img" + (i + 1)).html("<img src='../../../img/products/" + data.image[i].nameImage + "' class='img-responsive'>");
                    }

                    var sessionIdMember = "<?php echo $_SESSION["idMember"]; ?>";
                    if (sessionIdMember == data.detail.idMember) {
                        $("#editButton").html("<a href='http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/edit/form_edit.php?idPost=" + idPost + "' type='button' class='btn btn-warning'>แก้ไข</a></div>");
                    }
                } else {
                    alert("fail");
                }
            });
    });

</script>

<script>

    $(document).ready(function () {
        var id = "<?php echo $_GET['idPost'] ?>";
        var user = "<?php echo $_SESSION["idMember"]; ?>";
        <?php require("../../../classes/Favorite_Product.php");
        $check = new FavoriteManagement();
        $checkRow = $check->getFavorite($_GET['idPost'], $_SESSION["idMember"]);
        if($checkRow == 0){
        ?>
        $("#unactive").show();
        $("#active").hide();
        <?php
        }else{
        ?>
        $("#active").show();
        $("#unactive").hide();
        <?php
        }
        ?>
        $("#unactive").click(function () {
            //alert(id);
            //alert(user);
            $("#active").show();
            $("#unactive").hide();
            $.post("../../../classes/favorite_management.php",
                {
                    id: id,
                    user: user
                }, function (data, status) {
                    if (status === "success") {
                        $("#active").show();
                    }
                });

        });
        $("#active").click(function () {
            $("#unactive").show();
            $("#active").hide();
        });
    });
</script>
</html>
                                                                                                                                                                                                                                                      