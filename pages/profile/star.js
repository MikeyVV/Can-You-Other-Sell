$(document).ready(function () {

    var rateInURL = window.location.href.charAt((window.location.href.length) - 1);
    if (rateInURL != 1 && rateInURL != 2 && rateInURL != 3 && rateInURL != 4 && rateInURL != 5)rateInURL = 0;

    var rate = 0;

    //rate 1
    $("#rate1").hover(function () {
            //alert("hover rate1");
            $("#rate1").attr("src", "../../img/star-rating/star-active.png");
            $("#rate2").attr("src", "../../img/star-rating/star-empty.png");
            $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
            $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
            $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
        }, function () {
            if (rate == 0) {
                $("#rate1").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate2").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 1) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 2) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 3) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-active.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 4) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-active.png");
                $("#rate4").attr("src", "../../img/star-rating/star-active.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 5) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-active.png");
                $("#rate4").attr("src", "../../img/star-rating/star-active.png");
                $("#rate5").attr("src", "../../img/star-rating/star-active.png");
            }
        }
    );
    $("#rate1").click(function () {
        rate = 1;

        $("#rate1").attr("src", "../../img/star-rating/star-active.png");
        $("#rate2").attr("src", "../../img/star-rating/star-empty.png");
        $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
        $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
        $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
    });

    //rate 2
    $("#rate2").hover(function () {
            //alert("hover rate2");
            $("#rate1").attr("src", "../../img/star-rating/star-active.png");
            $("#rate2").attr("src", "../../img/star-rating/star-active.png");
            $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
            $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
            $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
        }, function () {
            if (rate == 0) {
                $("#rate1").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate2").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 1) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 2) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 3) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-active.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 4) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-active.png");
                $("#rate4").attr("src", "../../img/star-rating/star-active.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 5) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-active.png");
                $("#rate4").attr("src", "../../img/star-rating/star-active.png");
                $("#rate5").attr("src", "../../img/star-rating/star-active.png");
            }
        }
    );
    $("#rate2").click(function () {
        rate = 2;

        $("#rate1").attr("src", "../../img/star-rating/star-active.png");
        $("#rate2").attr("src", "../../img/star-rating/star-active.png");
        $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
        $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
        $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
    });

    //rate 3
    $("#rate3").hover(function () {
            //alert("hover rate3");
            $("#rate1").attr("src", "../../img/star-rating/star-active.png");
            $("#rate2").attr("src", "../../img/star-rating/star-active.png");
            $("#rate3").attr("src", "../../img/star-rating/star-active.png");
            $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
            $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
        }, function () {
            if (rate == 0) {
                $("#rate1").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate2").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 1) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 2) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 3) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-active.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 4) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-active.png");
                $("#rate4").attr("src", "../../img/star-rating/star-active.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 5) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-active.png");
                $("#rate4").attr("src", "../../img/star-rating/star-active.png");
                $("#rate5").attr("src", "../../img/star-rating/star-active.png");
            }
        }
    );
    $("#rate3").click(function () {
        rate = 3;

        $("#rate1").attr("src", "../../img/star-rating/star-active.png");
        $("#rate2").attr("src", "../../img/star-rating/star-active.png");
        $("#rate3").attr("src", "../../img/star-rating/star-active.png");
        $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
        $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
    });

    //rate 4
    $("#rate4").hover(function () {
            //alert("hover rate4");
            $("#rate1").attr("src", "../../img/star-rating/star-active.png");
            $("#rate2").attr("src", "../../img/star-rating/star-active.png");
            $("#rate3").attr("src", "../../img/star-rating/star-active.png");
            $("#rate4").attr("src", "../../img/star-rating/star-active.png");
            $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
        }, function () {
            if (rate == 0) {
                $("#rate1").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate2").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 1) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 2) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 3) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-active.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 4) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-active.png");
                $("#rate4").attr("src", "../../img/star-rating/star-active.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 5) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-active.png");
                $("#rate4").attr("src", "../../img/star-rating/star-active.png");
                $("#rate5").attr("src", "../../img/star-rating/star-active.png");
            }
        }
    );
    $("#rate4").click(function () {
        rate = 4;

        $("#rate1").attr("src", "../../img/star-rating/star-active.png");
        $("#rate2").attr("src", "../../img/star-rating/star-active.png");
        $("#rate3").attr("src", "../../img/star-rating/star-active.png");
        $("#rate4").attr("src", "../../img/star-rating/star-active.png");
        $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
    });

    //rate 5
    $("#rate5").hover(function () {
            //alert("hover rate5");
            $("#rate1").attr("src", "../../img/star-rating/star-active.png");
            $("#rate2").attr("src", "../../img/star-rating/star-active.png");
            $("#rate3").attr("src", "../../img/star-rating/star-active.png");
            $("#rate4").attr("src", "../../img/star-rating/star-active.png");
            $("#rate5").attr("src", "../../img/star-rating/star-active.png");
        }, function () {
            if (rate == 0) {
                $("#rate1").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate2").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 1) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 2) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 3) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-active.png");
                $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 4) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-active.png");
                $("#rate4").attr("src", "../../img/star-rating/star-active.png");
                $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 5) {
                $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                $("#rate3").attr("src", "../../img/star-rating/star-active.png");
                $("#rate4").attr("src", "../../img/star-rating/star-active.png");
                $("#rate5").attr("src", "../../img/star-rating/star-active.png");
            }
        }
    );
    $("#rate5").click(function () {
        rate = 5;

        $("#rate1").attr("src", "../../img/star-rating/star-active.png");
        $("#rate2").attr("src", "../../img/star-rating/star-active.png");
        $("#rate3").attr("src", "../../img/star-rating/star-active.png");
        $("#rate4").attr("src", "../../img/star-rating/star-active.png");
        $("#rate5").attr("src", "../../img/star-rating/star-active.png");
    });

    //====================================================================

    $("#sendcomment").click(function () {
        //alert("send comment");
        event.preventDefault();
        if (rate == 0 && $("textarea#textarea_comment").val() == "")
        {
            $("#error_comment").html("กรุณาให้เรทติ้งหรือแสดงความคิดเห็นก่อนส่ง");
            $("textarea#textarea_comment").addClass("has-error");
        }
        else {
            //alert("false");
            var mycomment = $("textarea#textarea_comment").val();

            $("#main_comment").load("mycomment.php", function () {
                if (rate == 0) {
                    $("#rate1").attr("src", "../../img/star-rating/star-empty.png");
                    $("#rate2").attr("src", "../../img/star-rating/star-empty.png");
                    $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
                    $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                    $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
                } else if (rate == 1) {
                    $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                    $("#rate2").attr("src", "../../img/star-rating/star-empty.png");
                    $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
                    $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                    $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
                } else if (rate == 2) {
                    $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                    $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                    $("#rate3").attr("src", "../../img/star-rating/star-empty.png");
                    $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                    $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
                } else if (rate == 3) {
                    $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                    $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                    $("#rate3").attr("src", "../../img/star-rating/star-active.png");
                    $("#rate4").attr("src", "../../img/star-rating/star-empty.png");
                    $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
                } else if (rate == 4) {
                    $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                    $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                    $("#rate3").attr("src", "../../img/star-rating/star-active.png");
                    $("#rate4").attr("src", "../../img/star-rating/star-active.png");
                    $("#rate5").attr("src", "../../img/star-rating/star-empty.png");
                } else if (rate == 5) {
                    $("#rate1").attr("src", "../../img/star-rating/star-active.png");
                    $("#rate2").attr("src", "../../img/star-rating/star-active.png");
                    $("#rate3").attr("src", "../../img/star-rating/star-active.png");
                    $("#rate4").attr("src", "../../img/star-rating/star-active.png");
                    $("#rate5").attr("src", "../../img/star-rating/star-active.png");
                }

                $("#mycomment").text(mycomment);

                //Todo Ajax store to DB
                $.post("new_comment/",
                    {
                        idMember: $("#seller_id").attr("data-id-member"),
                        txt_comment: mycomment,
                        rate: rate
                    },function()
                    {
                        location.reload()
                    });
            });
        }

    });
});
