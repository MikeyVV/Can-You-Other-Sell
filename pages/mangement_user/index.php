<?php

require('../../classes/Member.php');
$member = new Member();

$detail = $member->getUserDetail();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>แก้ไขข้อมูลส่วนตัว</title>
    <!--CSS, Bootstrap-->
    <?php require("../../bin/header.php"); ?>
    <!--/CSS, Bootstrap-->
</head>

<body>
<!--แถบบาร์ข้างบน Navbar-->
<?php require("../../bin/navbar.php"); ?>
<!--/แถบบาร์ข้างบน Navbar-->

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-5"></div>
        <!--โลโก้เว็บ-->
        <div class="col-sm-2">
            <center><?php require("../../bin/logo.php"); ?></center>
        </div>
        <!--/โลโก้เว็บ-->
        <div class="col-sm-5"></div>
    </div>
    <div class="row">
        <form id="user_info_form">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <div style="border: 2px dashed #f08080;background-color:#FFFFE0">
                    <center><h3>แก้ไขข้อมูลส่วนตัว(1/2)</h3></center>
                    <div style="padding: 1cm">
                        <div class="form-group">
                            <label for="email">อีเมล์</label>
                            <input type="email" class="form-control" value="<?php echo $detail->email; ?>" id="email"
                                   readonly>
                        </div>
                        <div class="form-group">
                            <label>เปลี่ยนรหัสผ่าน</label>
                        </div>
                        <div id="old_password_form" class="form-group">
                            <label id="old_password_label" for="old_password">รหัสผ่าน</label>
                            <input type="password" class="form-control" id="old_password">
                        </div>
                        <div id="new_password_form" class="form-group">
                            <label for="new_password">รหัสผ่านใหม่</label>
                            <input type="password" class="form-control" id="new_password">
                        </div>
                        <div id="repeat_new_password_form" class="form-group">
                            <label id="repeat_new_password_label" for="repeat_new_password">ยืนยันรหัสผ่านใหม่</label>
                            <input type="password" class="form-control" id="repeat_new_password">
                        </div>
                        <p style="color: crimson;">*ต้องการเปลี่ยนชื่อกรุณาติดต่อเจ้าหน้าที่</p>
                        <div class="form-group">
                            <label for="FName">ชื่อจริง</label>
                            <input type="text" class="form-control" value="<?php echo $detail->firstName; ?>" id="FName"
                                   readonly>
                        </div>
                        <div class="form-group">
                            <label for="LName">นามสกุล</label>
                            <input type="text" class="form-control" value="<?php echo $detail->lastName; ?>" id="LName"
                                   readonly>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-0.5"></div>
            <div class="col-sm-4">
                <div style="border: 2px dashed #f08080;background-color:#FFFFE0">
                    <center><h3>แก้ไขข้อมูลส่วนตัว(2/2)</h3></center>
                    <div style="padding: 1cm">
                        <div id="tel_form" class="form-group">
                            <label id="tel_label" for="tel">เบอร์ติดต่อ</label>
                            <input type="tel" class="form-control" value="<?php echo $detail->phoneNumber; ?>" id="tel">
                        </div>
                        <div class="form-group">
                            <label for="address">ที่อยู่</label>
                            <input type="text" class="form-control" value="<?php echo $detail->address; ?>"
                                   id="address">
                        </div>
                        <div class="form-group">
                            <label for="lineID">Line ID</label>
                            <input type="text" class="form-control" value="<?php echo $detail->lineID; ?>" id="lineID">
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" class="form-control" value="<?php echo $detail->facebook; ?>"
                                   id="facebook">
                        </div>
                        <center>
                            <a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/start.php">กลับสู่หน้าหลัก</a>&nbsp;&nbsp;
                            <button type="submit" class="btn btn-default">บันทึก</button>
                        </center>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php require("../../bin/footer.php"); ?>
    <script>
        /*
         the form
         */
        var user_info_form = $("#user_info_form");

        /*
         user form
         */
        var tel_form = $("#tel_form"),
            old_password_form = $("#old_password_form"),
            repeat_new_password_form = $("#repeat_new_password_form");

        /*
         user label
         */
        var tel_label = $("#tel_label"),
            old_password_label = $("#old_password_label"),
            repeat_new_password_label = $("#repeat_new_password_label");

        /*
         user information
         */
        var old_password = $("#old_password"),
            new_password = $("#new_password"),
            repeat_new_password = $("#repeat_new_password"),
            FName = $("#FName"),
            LName = $("#LName"),
            phoneNumber = $("#tel"),
            address = $("#address"),
            lineID = $("#lineID"),
            facebook = $("#facebook"),
            email = $("#email");


        function numberValidate(number) {
            var NUMBER_PATTERN = /^\d+$/;
            return NUMBER_PATTERN.test(number);
        }
        /*
         check input empty
         */
        function isEmpty(input) {
            return input.length <= 0;
        }
        phoneNumber.blur(function () {
            if (!isEmpty(phoneNumber.val())) {
                if (!numberValidate(phoneNumber.val())) {
                    tel_form.addClass("has-error");
                    tel_label.html("เบอร์ติดต่อต้องเป็นตัวเลขเท่านั้น");
                } else {
                    tel_form.removeClass("has-error");
                    tel_label.html("เบอร์ติดต่อ");
                }
            }
        });

        /*
         password match
         */
        function isPasswordMatch() {
            return new_password.val() === repeat_new_password.val();
        }

        /*
         verify password
         */
        function signIn(email, password) {
            $.post("../login/call/authen.php ",
                {email: email, password: password},
                function (data, status) {
                    data = JSON.parse(data);
                    if (status == "success") {
                        if (data.boolean) {
                            old_password_label.html("รหัสผ่าน");
                            old_password_form.removeClass("has-error");
                            $.post("edit/",
                                {
                                    old_password: old_password.val(),
                                    new_password: new_password.val(),
                                    repeat_new_password: repeat_new_password.val(),
                                    FName: FName.val(),
                                    LName: LName.val(),
                                    phoneNumber: phoneNumber.val(),
                                    address: address.val(),
                                    lineID: lineID.val(),
                                    facebook: facebook.val()
                                }, function () {
                                    console.log("info and password.");
                                    location.assign("editRegisterSec.php");
                                });
                        } else {
                            console.log("รหัสผ่านไม่ถูกต้อง");
                            old_password_label.html("รหัสผ่านไม่ถูกต้อง");
                            old_password_form.addClass("has-error");
                        }
                    }
                }
            );
        }

        user_info_form.submit(function (e) {
            e.preventDefault();
            if(isEmpty(phoneNumber.val()) || numberValidate(phoneNumber.val())) {
                if (isEmpty(old_password.val()) && isEmpty(new_password.val()) && isEmpty(repeat_new_password.val())) {

                    $.post("edit/",
                        {
                            old_password: old_password.val(),
                            new_password: new_password.val(),
                            repeat_new_password: repeat_new_password.val(),
                            FName: FName.val(),
                            LName: LName.val(),
                            phoneNumber: phoneNumber.val(),
                            address: address.val(),
                            lineID: lineID.val(),
                            facebook: facebook.val()
                        }, function () {
                            console.log("1");
                            location.assign("editRegisterSec.php");
                        });
                } else if (!isEmpty(old_password.val()) && !isEmpty(new_password.val()) && !isEmpty(repeat_new_password.val())) {
                    console.log("2");
                    if (isPasswordMatch()) {
                        repeat_new_password_label.html("ยืนยันรหัสผ่านใหม่");
                        repeat_new_password_form.removeClass("has-error");
                        signIn(email.val(), old_password.val());
                    } else {
                        repeat_new_password_label.html("รหัสผ่านไม่ตรงกัน");
                        repeat_new_password_form.addClass("has-error");
                    }
                }
            }
        });
    </script>
</body>
</html>
