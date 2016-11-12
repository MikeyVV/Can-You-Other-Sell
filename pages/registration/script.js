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
            isDuplicateEmail();
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
function isDuplicateEmail() {

    $.post("isDuplicateEmail/",
        {
            email: email.val()
        }, function (data, status) {
            data = JSON.parse(data);
            if (status === "success") {
                if(data.boolean){
                    email_form.addClass("has-error");
                    email_label.html("อีเมลนี้มีผู้อื่นใช้แล้ว");
                }else {
                    email_form.removeClass("has-error");
                    email_label.html("อีเมล");
                }
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
    if (isSetAll() && validateEmail() && isPasswordMatch()) {
        $.post("isDuplicateEmail/",
            {
                email: email.val()
            }, function (data, status) {
                data = JSON.parse(data);
                if (status === "success") {
                    if(!data.boolean){
                        addUserToDB();
                    }
                }

            }
        );
    }
});
