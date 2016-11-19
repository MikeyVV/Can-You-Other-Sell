<!DOCTYPE html>
<html lang="en">
<head>
    <title>จัดการโฆษณา</title>
    <!--CSS, Bootstrap-->
    <?php require("../../bin/header.php"); ?>
    <!--/CSS, Bootstrap-->
</head>

<body>
<!--แถบบาร์ข้างบน Navbar-->
<?php require("../../bin/navbar.php"); ?>
<!--/แถบบาร์ข้างบน Navbar-->
<?php if($isLogin AND $isOfficer) {?>
<div class="container-fluid">
    <div class="row">
        <!--โลโก้เว็บ-->
        <div class="col-sm-2">

        </div>
        <!--/โลโก้เว็บ-->
        <div class="col-sm-7"></div>
    </div>
    <div class="row" style="margin-top: 3vh">
        <div class="col-sm-2">

        </div>
        <!-- ทำงานที่นี่ -->
        <div class="col-sm-8 cyos-card cyos-table-white">
            <div style="margin-top:2vh">
            <h1 style="display: inline">จัดการโฆษณา</h1>
            <a class="btn btn-default pull-right" role="button" href="new/">+ เพิ่มโฆษณา</a>
            <div class="cyos-underline"></div>
            <!--Display table-->
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>ชื่อ</th>
                    <th>ที่อยู่</th>
                    <th>ลิงค์ประกาศ</th>
                    <th>ราคา</th>
                    <th>สถานะ</th>
                    <th>จำนวนครั้ง</th>
                    <th>ดำเนินการ</th>
                </tr>
                </thead>
                <tbody id="ad-list">
                </tbody>
            </table>
            </div>
        </div>
        <!-- /ทำงานที่นี่ -->
        <div class="col-sm-2">

        </div>
    </div>
</div>

<?php require("../../bin/footer.php"); ?>
<script>
    $.get("show_ad_list.php"
        , function (data, status) {
            if (status === "success") {
                data = JSON.parse(data).lists;
                for (var i = 0; i < data.length; i++) {
                    var rowOpen = "<tr>";
                    var No = "<td>" + (i + 1) + "</td>";
                    var adName = "<td>" + data[i].adName + "</td>";
                    var adLocation = "<td>" + data[i].adLoction + "</td>";
                    var adURL = "<td><a href='" + data[i].adURL + "' target = '_blank'>ไปหน้าประกาศ</a></td>";
                    var adPrice = "<td>" + data[i].adPrice + "</td>";
                    var adStatus = "<td>" + data[i].adStatus + "</td>";
                    var adExp = "<td>" + data[i].adExp + "</td>";
                    var editAd = "<td><a href='edit/?idAd="+data[i].idAd+"' target='_blank'>แก้ไข</a></td>";
                    var rowEnd = "</tr>";
                    $("#ad-list").append(rowOpen + No + adName + adLocation + adURL + adPrice + adStatus + adExp + editAd + rowEnd);
                }
            }
        });
</script>
<?php } else { ?>
    <h1 style="text-align: center">404 ERROR<br> Page Not Found :( </h1>
    <p style="text-align: center">เราไม่พบหน้าที่คุณต้องการ</p>
<?php } ?>
</body>
</html>
