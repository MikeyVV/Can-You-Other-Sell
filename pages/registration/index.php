<!DOCTYPE html>
<html lang="en">
<head>
    <title>สมัครสมาชิก</title>
    <!--CSS, Bootstrap-->
    <?php require("../../bin/header.php"); ?>
    <!--/CSS, Bootstrap-->
    <!-- your css here -->
    <link rel="stylesheet" href="style.css">
    <!-- /your css here -->
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
            <div class="cyos-center" style="width: 150px;">
                <?php require("../../bin/logo.php"); ?>
            </div>
        </div>
        <!--/โลโก้เว็บ-->
        <div class="col-sm-5"></div>
    </div>
    <div class="row">
        <div class="col-sm-4"></div>

        <div class="col-sm-4">
            <div style="border: 2px dashed #f08080;background-color:#FFFFE0">
                <h2 style="text-align: center;">สมัครสมาชิก</h2>
                <p id="form_error"></p>
                <form id="user_signup_form" style="padding: 1cm">
                    <div id="email_form" class="form-group">
                        <label id="email_label" for="email">อีเมล</label>
                        <input type="email" class="form-control" id="email" placeholder="John@example.com" required>
                    </div>
                    <div id="password_form" class="form-group">
                        <label id="password_label" for="pwd">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="password" placeholder="กรุณากรอกรหัสผ่าน"
                               required>
                    </div>
                    <div id="repeat_password_form" class="form-group">
                        <label id="repeat_password_label" for="pwd">ยืนยันรหัสผ่าน</label>
                        <input type="password" class="form-control" id="repeat_password"
                               placeholder="กรอกรหัสผ่านอีกครั้ง" required>
                    </div>
                    <div id="FName_form" class="form-group">
                        <label id="FName_label" for="email">ชื่อจริง</label>
                        <input type="text" class="form-control" id="FName" placeholder="กรุณากรอกชื่อ" required>
                    </div>
                    <div id="LName_form" class="form-group">
                        <label id="LName_label" for="email">นามสกุล</label>
                        <input type="text" class="form-control" id="LName" placeholder="กรุณากรอกนามสกุล" required>
                    </div>
                    <div class="cyos-center" style="width: 196px;">
                        <a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/start.php">กลับสู่หน้าหลัก</a>&nbsp;&nbsp;
                        <button type="submit" class="btn btn-default">สมัครสมาชิก</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-sm-4"></div>

    </div>
    <?php require("../../bin/footer.php"); ?>
    <!-- your javascript here -->
    <!--    <script src="script.js"></script>-->

    <script>

        /*
         the form
         */
        var user_signup_form = $("#user_signup_form"),
            form_error = $("#form_error");

        /*
         form element
         */
        var email_form = $("#email_form"),
            password_form = $("#password_form"),
            repeat_password_form = $("#repeat_password_form"),
            FName_form = $("#FName_form"),
            LName_form = $("#LName_form"),

            /*
             label input
             */
            email_label = $("#email_label"),
            password_label = $("#password_label"),
            repeat_password_label = $("#repeat_password_label"),
            FName_label = $("#FName_label"),
            LName_label = $("#LName_label"),

            /*
             user input
             */
            email = $("#email"),
            password = $("#password"),
            repeat_password = $("#repeat_password"),
            FName = $("#FName"),
            LName = $("#LName");

        /*
         alert empty input
         */

        email.blur(function () {
            if (isEmpty(email.val())) {
                email_form.addClass("has-error");
                email_label.html("โปรดกรอกที่อยู่อีเมล");
            }
            else {
                if (!validateEmail()) {
                    email_form.addClass("has-error");
                    email_label.html("อีเมลไม่ถูกต้องตามรูปแบบ");
                } else {
                    //console.log(isDuplicateEmail().done(function(result){console.log(result)}) + " " + validateEmail() + " " + !isEmpty(email.val()));
                    if (isDuplicateEmail() && validateEmail() && !isEmpty(email.val())) {
                        email_form.addClass("has-error");
                        email_label.html("อีเมลนี้มีผู้อื่นใช้แล้ว");
                    } else {
                        email_form.removeClass("has-error");
                        email_label.html("อีเมล");
                        console.log(isDuplicateEmail() + " " + validateEmail() + " " + !isEmpty(email.val()));
                    }
                }
            }

        });
        password.blur(function () {
            if (isEmpty(password.val())) {
                password_form.addClass("has-error");
                password_label.html("โปรดกรอกรหัสผ่าน");
            }
            else {
                password_form.removeClass("has-error");
                password_label.html("รหัสผ่าน");
            }
        });
        repeat_password.blur(function () {
            if (isEmpty(repeat_password.val())) {
                repeat_password_form.addClass("has-error");
                repeat_password_label.html("โปรดยืนยันรหัสผ่าน");
            }
            else {
                if (!isPasswordMatch()) {
                    repeat_password_form.addClass("has-error");
                    repeat_password_label.html("รหัสผ่านไม่ตรงกัน");
                } else {
                    repeat_password_form.removeClass("has-error");
                    repeat_password_label.html("ยืนยันรหัสผ่าน");
                }
            }
        });
        FName.blur(function () {
            if (isEmpty(FName.val())) {
                FName_form.addClass("has-error");
                FName_label.html("โปรดกรอกชื่อจริง");
            } else {
                FName_form.removeClass("has-error");
                FName_label.html("ชื่อจริง");
            }
        });
        LName.blur(function () {
            if (isEmpty(LName.val())) {
                LName_form.addClass("has-error");
                LName_label.html("โปรดกรอกนามสกุล");
            } else {
                LName_form.remove("has-error");
                LName_label.html("นามสกุล");
            }
        });


        /*
         check input empty
         */
        function isEmpty(input) {
            return input.length <= 0;
        }

        /*
         check all empty
         */
        function isSetAll() {

            return !isEmpty(email.val()) && !isEmpty(password.val()) && !isEmpty(repeat_password.val()) && !isEmpty(FName.val()) && !isEmpty(LName.val());

        }

        /*
         email validation
         return true if email is valid
         otherwise return false
         */
        function validateEmail() {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email.val());
        }

        /*
         check duplicate email
         */
        //Todo fix this to return true or false
        function isDuplicateEmail() {

            return $.post("isDuplicateEmail/",
                {
                    email: email.val()
                }, function (data, status) {
                    data = JSON.parse(data);
                    if (status === "success") {
                        console.log(data.boolean);
                    }
                }
            );

        }

        /*
         password match
         */
        function isPasswordMatch() {
            return password.val() === repeat_password.val();
        }

        /*
         Add user
         */
        function addUserToDB() {
            $.post("new/",
                {
                    email: email.val(),
                    password: password.val(),
                    repeat_password: repeat_password.val(),
                    FName: FName.val(),
                    LName: LName.val()
                }, function (data, status) {
                    if (status === "success") {
                        form_error.html("");
                        signIn();
                    } else {
                        form_error.html("มีบางอย่างผิด ขาดการติดต่อกับเซิฟเวอร์");
                    }
                }
            );
        }

        /*
         Automatic Sign In
         */
        function signIn() {
            $.post("../login/call/authen.php",
                {
                    email: email.val(),
                    password: password.val()
                }, function (data, status) {
                    if (status === "success") {
                        form_error.html("");
                        location.assign("RegSec.php");
                    } else {
                        form_error.html("มีบางอย่างผิด ขาดการติดต่อกับเซิฟเวอร์");
                    }
                }
            );
        }

        /*
         when user press 'สมัครสมาชิก' button
         */
        user_signup_form.submit(function (e) {
            e.preventDefault();
            if (isSetAll() && validateEmail() && isPasswordMatch() && !isDuplicateEmail()) {
                addUserToDB();
            }
        });

    </script>
    <!-- /your javascript here -->
</body>
</html>
