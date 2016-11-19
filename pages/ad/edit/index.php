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
<?php if ($isLogin AND $isOfficer) { ?>
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
        <div class="col-sm-8 cyos-card" style="background-color: white; height: 81vh;">
            <h1>แก้ไขโฆษณา</h1>
            <div class="cyos-underline" style="margin-bottom: 3vh"></div>
            <form style="margin-top: 1px" id="edit_ad_form">
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
                    <label id="ad_price_label" for="ad_price">ราคา</label>
                    <input type="text" class="form-control" id="ad_price" placeholder="ราคา" required>
                </div>
                <div class="form-group">
                    <label id="ad_status_label" for="ad_status">สถานะ</label>
                    <select class="form-control" id="ad_status">
                        <option value="0">ปกติ</option>
                        <option value="1">หมดอายุ</option>
                        <option value="2">ระงับ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label id="img_label" for="url">ลิงค์รูปภาพที่จะแสดง</label>
                    <input type="text" class="form-control" id="ad_img_input" placeholder="วางลิงค์รูปภาพที่นี่ "
                           required>
                </div>
                <div class="form-group" style="text-align: center">
                    <img id="ad_img" style="height: 14vh;" class="cyos-center img-thumbnail">
                </div>
                <div class="form-group">
                    <label id="exp_label" for="ad_exp">ต่ออายุ</label>
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
                        <button type="submit" class="btn btn-default pull-right">บันทึก</button>
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
        var edit_ad_form = $("#edit_ad_form");

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
            ad_status = $("#ad_status option:selected"),
            ad_status1 = $("#ad_status option"),
            ad_exp = $("#ad_exp option:selected"),
            ad_img_input = $("#ad_img_input"),
            ad_img = $("#ad_img");

        /*
         show an ad
         */

        $.post("show_ad.php",
            {
                idAd: <?php echo $_GET['idAd']; ?>
            }
            , function (data, status) {
                if (status === "success") {
                    data = JSON.parse(data);
                    ad_name.attr("value", data.adName);
                    ad_location.html(data.adLoction);
                    ad_price.attr("value", data.adPrice);
                    ad_url.attr("value", data.adURL);
                    ad_status1.eq(data.adStatus).prop('selected', true);
                    ad_img_input.attr("value", data.adImg);
                    ad_img.attr("src", data.adImg);
                }
            }
        );

        /*
         edit ad
         */
        edit_ad_form.submit(function(e){
            e.preventDefault();
            $.post("edit_ad.php",
                {
                    idAd: <?php echo $_GET['idAd']; ?>,
                    adName: ad_name.val(),
                    adLocation: ad_location.val(),
                    adImg: ad_img_input.val(),
                    adURL: ad_img_input.val(),
                    adPrice: ad_price.val(),
                    adStatus: ad_status.prop("selectedIndex"),
                    adExp: ad_exp.prop("selectedIndex")
                }, function (data, status) {
                    if(status === "success"){
                        location.reload();
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
