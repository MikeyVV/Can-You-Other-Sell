$("form").submit(function(e){
    e.preventDefault();
    var email = $( "#email" ).val();
    var password =$( "#password" ).val();
    signIn(email, password);
});

function signIn(email, password) {
    $.post( "call/authen.php ",
        { email: email, password: password},
        function (data, status) {
            data = JSON.parse(data);
            if(status == "success"){
                if(data.boolean){
                    location.assign("loginSec.php");
                }else {
                    $("#err_login").html("<div class='alert alert-danger'> " +
                        "อีเมลหรือรหัสผ่านไม่ถูกต้อง" +
                        "</div>");
                }
            }else {
                $("#err_login").html("<div class='alert alert-danger'> " +
                    "ไม่สามารถติดต่อกับเซิฟเวอร์ได้" +
                    "</div>");
            }
        }
    );
}