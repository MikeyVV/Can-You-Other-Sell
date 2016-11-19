<!DOCTYPE html>
<html lang="en">
<head>
    <title>สินค้าที่สนใจ</title>
    <!--CSS, Bootstrap-->
    <?php require("../../bin/header.php"); ?>

    <script>

        $(document).ready(function () {

            $(".star.glyphicon").click(function () {
                $(this).toggleClass("glyphicon-star glyphicon-star-empty");
            });


    </script>
    <script type="text/javascript">
        function delete_id(idPost,idMemder) {
            if (confirm('Sure To Remove This Record ?')) {
                $.post("callRest.php",
                    {
                        idPost: idPost,
                        idMemder : idMemder
                    }
                    , function (data, status) {
                        if (status === "success") {

                        }
                    });
            }
        }
    </script>
    <style>

        .star {
            font-size: 25px;
            color: gold;
        }


    </style>
</head>
<body>
<!--แถบบาร์ข้างบน Navbar-->
<?php require("../../bin/navbar.php");
require("../../classes/Favorite_Product.php");
$favor = new FavoriteManagement();
$idM = $_SESSION['idMember'];
$query = $favor->getPostFavorite($idM);

//echo $idM;


?><!--/แถบบาร์ข้างบน Navbar-->

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
                            <td class="mailbox-subject"><b>ชื่อประกาศ</b>&nbsp<i class="fa fa-fw fa-sort-down"></i></td>
                            <td class="mailbox-attachment">ประเภทของสินค้า&nbsp<i class="fa fa-fw fa-sort-down"></i>
                            </td>
                            <td class="mailbox-date">ราคาของสินค้า&nbsp<i class="fa fa-fw fa-sort-down"></i></td>
                            <td class="mailbox-date">สถานะ&nbsp<i class="fa fa-fw fa-sort-down"></i></td>
                            <td></td>
                        </tr>
                        <?php while ($row = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td>
                                    <div>
                                        <span class="star glyphicon glyphicon-star"></span>
                                    </div>
                                </td>
                                <td class="mailbox-name"><?php echo $row['date']; ?></td>
                                <td class="mailbox-subject"><a></a><?php echo $row['name']; ?></td>
                                <td class="mailbox-attachment"><?php echo $row['nameCategory']; ?></td>
                                <td class="mailbox-date"><?php echo $row['price']; ?></td>
                                <td class="mailbox-date"><?php
                                    echo $row['status']; ?></td>

                                <td>
                                <td class="mailbox-date"><a
                                        href="javascript:delete_id(<?php echo $row["idPost"]; ?>,<?php echo $row["idMember"]; ?>)">Delete</a></td>


                                <!-- /.btn-group --></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td>
                                <div>


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
