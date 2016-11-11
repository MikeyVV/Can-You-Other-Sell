<!DOCTYPE html>
<html lang="en">
<head>
    <title>ข้อร้องเรียนจากสมาชิก</title>
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
        <div class="col-sm-10">
            <!--ทำงานที่นี่ ทำงานที่นี่    ทำงานที่นี่ ทำงานที่นี่-->

            <div class="box-header with-border">
                <h3 class="box-title">ข้อร้องเรียนจากสมาชิก</h3>

                <div class="box-tools pull-right">
                    <div class="has-feedback">

                    </div>
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body no-padding">
                <div class="mailbox-controls">

                    <div class="btn-group"></div>
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
                            <th>No.</th>
                            <th class="mailbox-name">ผู้ส่งคำร้อง <i class="fa fa-fw fa-sort-down"></i></th>
                            <th class="mailbox-name">วัน/เดือน/ปี <i class="fa fa-fw fa-sort-down"></i></th>
                            <th class="mailbox-subject">หัวเรื่อง <i class="fa fa-fw fa-sort-down"></i></th>
                            <th class="mailbox-attachment">ลิงค์ประกาศ <i class="fa fa-fw fa-sort-down"></i></th>
                            <th class="mailbox-date">ประเภทเรื่องร้องเรียน <i class="fa fa-fw fa-sort-down"></i></th>
                            <th class="mailbox-date">สถานะ <i class="fa fa-fw fa-sort-down"></i></th>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td class="mailbox-name">ธนโชติ หนวดเฟิ้ม</td>
                            <td class="mailbox-name">05/09/2559</td>
                            <td class="mailbox-subject"><a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/management_report_officer/Complaint.php">ไม่ได้รับสินค้าตามที่กำหนด</a></td>
                            <td class="mailbox-attachment"><a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/post/ProductDetail.php" target="_blank">www.cyos.com/vehicles/train/pr...</a></td>
                            <td class="mailbox-date">สินค้าไม่ตรงกับประกาศ</td>
                            <td class="mailbox-date">รอดำเนินการ</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td class="mailbox-name">ธนโชติ หนวดเฟิ้ม</td>
                            <td class="mailbox-name">10/09/2559</td>
                            <td class="mailbox-subject"><a href="#">ถูกโกง</a></td>
                            <td class="mailbox-attachment"><a href="www.cyos.com/vehicles/car/products.php?id=vt1154">www.cyos.com/vehicles/train/pr...</a></td>
                            <td class="mailbox-date">ไม่ได้สินค้า</td>
                            <td class="mailbox-date">ดำเนินการเสร็จสิน(เราได้แบนสมาชิกที่ชื่อ....เรียบร้อบแล้ว</td>
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
