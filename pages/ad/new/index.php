<!DOCTYPE html>
<html lang="en">
<head>
    <title>จัดการโฆษณา</title>
    <!--CSS, Bootstrap-->
    <?php require("../../../bin/header.php"); ?>
    <!--/CSS, Bootstrap-->
</head>


<body>

<!--แถบบาร์ข้างบน Navbar-->
<?php require("../../../bin/navbar.php"); ?>
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
        <div class="col-sm-8 cyos-card" style="background-color: white; height: 59vh;">
            <h1>เพิ่มโฆษณา</h1>
            <div class="cyos-underline" style="margin-bottom: 3vh"></div>
            <form style="margin-top: 1px" id="add_ad_form">
                <div class="form-group">
                    <label id="ad_name_label" for="ad_name">ชื่อ</label>
                    <input type="text" class="form-control" id="ad_name" placeholder="ชื่อประกาศ" required>
                </div>
                <div class="form-group">
                    <label id="ad_location_label" for="ad_location">ที่อยู่</label>
                    <textarea class="form-control" id="ad_location" placeholder="ที่อยู่" required></textarea>
                </div>
                <div class="form-group">
                    <label id="ad_url_label" for="ad_url">ลิงค์ประกาศ</label>
                    <input type="text" class="form-control" id="ad_url" placeholder="ลิงค์ประกาศ" required>
                </div>
                <div class="form-group">
                    <label id="img_label" for="ad_img_input">ลิงค์รูปภาพที่จะแสดง</label>
                    <input type="text" class="form-control" id="ad_img_input" placeholder="วางลิงค์รูปภาพที่นี่" required>
                </div>
                <div class="form-group">
                    <label id="ad_price_label" for="ad_price">ลิงค์รูปภาพที่จะแสดง</label>
                    <input type="number" class="form-control" id="ad_price" placeholder="ราคาของสินค้า" required>
                </div>
                <div class="form-group">
                    <label id="exp_label" for="ad_exp">แพ็คเกจ</label>
                    <select class="form-control" id="ad_exp">
                        <option value="0">เลือกแพ็คเกจ</option>
                        <option value="100">100 ครั้ง/50 บาท</option>
                        <option value="200">200 ครั้ง/80 บาท</option>
                        <option value="500">500 ครั้ง/230 บาท</option>
                        <option value="1000">1,000 ครั้ง/450 บาท</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-10 col-sm-2">
                        <button type="submit" class="btn btn-info pull-right">เพิ่มโฆษณา</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /ทำงานที่นี่ -->
        <div class="col-sm-2">

        </div>
    </div>
    <?php require("../../../bin/footer.php"); ?>
    <script>
        /*
         the form
         */
        var add_ad_form = $("#add_ad_form");

        /*
         label
         */
        var ad_name_label = $("#ad_name_label"),
            ad_location_label = $("#ad_location_label"),
            ad_url_label = $("#ad_url_label"),
            ad_price_label = $("#ad_price_label"),
            img_label = $("#img_label"),
            exp_label = $("#exp_label");

        /*
         ad detail
         */
        var ad_name = $("#ad_name"),
            ad_location = $("#ad_location"),
            ad_url = $("#ad_url"),
            ad_price = $("#ad_price"),
            ad_img_input = $("#ad_img_input"),
            ad_img = $("#ad_img");

        /*
         edit ad
         */
        add_ad_form.submit(function(e){
            e.preventDefault();
            $.post("ad_new.php",
                {
                    adName: ad_name.val(),
                    adLocation: ad_location.val(),
                    adImg: ad_img_input.val(),
                    adURL: ad_img_input.val(),
                    adPrice: ad_price.val(),
                    adExp: $("#ad_exp option:selected").val()
                }, function (data, status) {
                    if(status === "success"){
                        location.assign("ad_new_sec.php");
                    }
                });
        });
    </script>
    <?php } else { ?>
    <h1 style="text-align: center">404 ERROR<br> Page Not Found :( </h1>
        <p style="text-align: center">เราไม่พบหน้าที่คุณต้องการ</p>
    <?php } ?>
</body>
</html>
