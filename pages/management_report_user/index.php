<?php
require ("../../classes/management_complaints.php");
$c = new Management_complaints();
$c = json_decode($c->showListComplaintsUser());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>จัดการเรื่องร้องเรียน</title>
    <!--CSS, Bootstrap-->
    <?php require("../../bin/header.php"); ?>
<!--/CSS, Bootstrap-->

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
                <h3 class="box-title">จัดการเรื่องร้องเรียน</h3>

                <div class="box-tools pull-right">
                    <div class="has-feedback">

                    </div>
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body no-padding">
                <div class="mailbox-controls">

                    <div class="btn-group"></div>
                    <div class="pull-right">
                        <a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/management_report_user/new/write_report.php" class="btn btn-default" role="button">เพิ่มเรื่องร้องเรียน</i> </a>
                    </div><!-- /.pull-right -->
                </div>
                <br>

                <div class="table-responsive mailbox-messages cyos-card cyos-table-white">
                    <table class="table table-hover table-striped">
                        <tbody>

                        <tr>
                            <!-- Check all button -->
                            <th>No.</th>
                            <th class="mailbox-name">วัน/เดือน/ปี</th>
                            <th class="mailbox-subject">หัวเรื่อง</th>
                            <th class="mailbox-attachment">ลิงค์ประกาศ</th>
                            <th class="mailbox-date">ประเภทเรื่องร้องเรียน</th>
                            <th class="mailbox-date">สถานะ</th>
                        </tr>

                        <?php
                        $num = count($c->list);
                        for($i = 0; $i < $num; $i++){
                            echo "<tr><td>".($i+1)."</td>";
                            echo "<td class=\"mailbox-name\">".mb_substr($c->list[$i]->date, 0,10, 'UTF-8')."</td>";
                            echo "<td class=\"mailbox-subject\">".$c->list[$i]->topic."</td>";
                            echo "<td class=\"mailbox-attachment\"><a href=\"".$c->list[$i]->linkComplaints."\">".mb_substr($c->list[$i]->linkComplaints, 0,30, 'UTF-8')."...".mb_substr($c->list[$i]->linkComplaints,strlen($c->list[$i]->linkComplaints)-5,strlen($c->list[$i]->linkComplaints), 'UTF-8')."</a></td>";
                            echo "<td class=\"mailbox-date\">";
                                if($c->list[$i]->category == 1){
                                    echo "หมวดสินค้าผิดประเภท";
                                }elseif($c->list[$i]->category == 2){
                                    echo "สินค้าผิดกฎหมาย";
                                }elseif($c->list[$i]->category == 3){
                                    echo "ผู้ขายทำผิดกฎของเว็บ";
                                }elseif($c->list[$i]->category == 4){
                                    echo "ไม่ได้รับสินค้า";
                                }
                            echo "</td>";
                            echo "<td class=\"mailbox-date\">";
                                if($c->list[$i]->status == 0){
                                    echo "รอดำเนินการ";
                                }elseif($c->list[$i]->status == 1){
                                    echo "ดำเนินการแล้ว (".$c->list[$i]->reply.")";
                                }
                            echo "</td>";
                        }

                        ?>

<!--                        <tr>-->
<!--                            <td>1</td>-->
<!--                            <td class="mailbox-name">05/09/2559</td>-->
<!--                            <td class="mailbox-subject"><a href="#">ไม่ได้รับสินค้าตามที่กำหนด</a></td>-->
<!--                            <td class="mailbox-attachment"><a href="www.cyos.com/vehicles/train/products.php?id=vt24352">www.cyos.com/vehicles/train/pr...</a></td>-->
<!--                            <td class="mailbox-date">สินค้าไม่ตรงกับประกาศ</td>-->
<!--                            <td class="mailbox-date">รอดำเนินการ</td>-->
<!--                        </tr>-->
<!---->
<!--                        <tr>-->
<!--                            <td>2</td>-->
<!--                            <td class="mailbox-name">10/09/2559</td>-->
<!--                            <td class="mailbox-subject"><a href="#">ถูกโกง</a></td>-->
<!--                            <td class="mailbox-attachment"><a href="www.cyos.com/vehicles/car/products.php?id=vt1154">www.cyos.com/vehicles/train/pr...</a></td>-->
<!--                            <td class="mailbox-date">ไม่ได้สินค้า</td>-->
<!--                            <td class="mailbox-date">ดำเนินการเสร็จสิ้น(เราได้แบนสมาชิกที่ชื่อ....เรียบร้อบแล้ว)</td>-->
<!--                        </tr>-->
                        </tbody>
                    </table><!-- /.table -->
                </div><!-- /.mail-box-messages -->
            </div><!-- /.box-body -->

        </div>

        <!-- /ทำงานที่นี่ -->
        <div class="col-sm-2">
            <!--แสดงสินค้าแนะนำ-->
            <?php require "../../bin/recommendProduct.php"; ?>
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
