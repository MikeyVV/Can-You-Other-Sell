var isOpen = true;
$("#buttoneditcomment").click(function (){
    console.log("buttoneditcomment is clicked")
    if(isOpen) {
        $("#view_comment_panel").hide()
        $("#main_comment").show()
        isOpen = false;
    }else {
        $("#view_comment_panel").show()
        $("#main_comment").hide()
        isOpen = true;
    }
});

$(document).ready(function () {

    var rateInURL = window.location.href.charAt((window.location.href.length) - 1);
    if (rateInURL != 1 && rateInURL != 2 && rateInURL != 3 && rateInURL != 4 && rateInURL != 5)rateInURL = 0;


    var rate = $("#main_comment").attr("data-rate"),
        star0 = $("#edit_star0"),
        star1 = $("#edit_star1"),
        star2 = $("#edit_star2"),
        star3 = $("#edit_star3"),
        star4 = $("#edit_star4"),
        star5 = $("#edit_star5");


    //rate 1
    star1.hover(function () {
            //alert("hover rate1");
            star1.attr("src", "../../img/star-rating/star-active.png");
            star2.attr("src", "../../img/star-rating/star-empty.png");
            star3.attr("src", "../../img/star-rating/star-empty.png");
            star4.attr("src", "../../img/star-rating/star-empty.png");
            star5.attr("src", "../../img/star-rating/star-empty.png");
        }, function () {
            if (rate == 0) {
                star1.attr("src", "../../img/star-rating/star-empty.png");
                star2.attr("src", "../../img/star-rating/star-empty.png");
                star3.attr("src", "../../img/star-rating/star-empty.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 1) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-empty.png");
                star3.attr("src", "../../img/star-rating/star-empty.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 2) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-empty.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 3) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-active.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 4) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-active.png");
                star4.attr("src", "../../img/star-rating/star-active.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 5) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-active.png");
                star4.attr("src", "../../img/star-rating/star-active.png");
                star5.attr("src", "../../img/star-rating/star-active.png");
            }
        }
    );
    star1.click(function () {
        rate = 1;

        star1.attr("src", "../../img/star-rating/star-active.png");
        star2.attr("src", "../../img/star-rating/star-empty.png");
        star3.attr("src", "../../img/star-rating/star-empty.png");
        star4.attr("src", "../../img/star-rating/star-empty.png");
        star5.attr("src", "../../img/star-rating/star-empty.png");
    });

    //rate 2
    star2.hover(function () {
            //alert("hover rate2");
            star1.attr("src", "../../img/star-rating/star-active.png");
            star2.attr("src", "../../img/star-rating/star-active.png");
            star3.attr("src", "../../img/star-rating/star-empty.png");
            star4.attr("src", "../../img/star-rating/star-empty.png");
            star5.attr("src", "../../img/star-rating/star-empty.png");
        }, function () {
            if (rate == 0) {
                star1.attr("src", "../../img/star-rating/star-empty.png");
                star2.attr("src", "../../img/star-rating/star-empty.png");
                star3.attr("src", "../../img/star-rating/star-empty.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 1) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-empty.png");
                star3.attr("src", "../../img/star-rating/star-empty.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 2) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-empty.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 3) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-active.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 4) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-active.png");
                star4.attr("src", "../../img/star-rating/star-active.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 5) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-active.png");
                star4.attr("src", "../../img/star-rating/star-active.png");
                star5.attr("src", "../../img/star-rating/star-active.png");
            }
        }
    );
    star2.click(function () {
        rate = 2;

        star1.attr("src", "../../img/star-rating/star-active.png");
        star2.attr("src", "../../img/star-rating/star-active.png");
        star3.attr("src", "../../img/star-rating/star-empty.png");
        star4.attr("src", "../../img/star-rating/star-empty.png");
        star5.attr("src", "../../img/star-rating/star-empty.png");
    });

    //rate 3
    star3.hover(function () {
            //alert("hover rate3");
            star1.attr("src", "../../img/star-rating/star-active.png");
            star2.attr("src", "../../img/star-rating/star-active.png");
            star3.attr("src", "../../img/star-rating/star-active.png");
            star4.attr("src", "../../img/star-rating/star-empty.png");
            star5.attr("src", "../../img/star-rating/star-empty.png");
        }, function () {
            if (rate == 0) {
                star1.attr("src", "../../img/star-rating/star-empty.png");
                star2.attr("src", "../../img/star-rating/star-empty.png");
                star3.attr("src", "../../img/star-rating/star-empty.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 1) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-empty.png");
                star3.attr("src", "../../img/star-rating/star-empty.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 2) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-empty.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 3) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-active.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 4) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-active.png");
                star4.attr("src", "../../img/star-rating/star-active.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 5) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-active.png");
                star4.attr("src", "../../img/star-rating/star-active.png");
                star5.attr("src", "../../img/star-rating/star-active.png");
            }
        }
    );
    star3.click(function () {
        rate = 3;

        star1.attr("src", "../../img/star-rating/star-active.png");
        star2.attr("src", "../../img/star-rating/star-active.png");
        star3.attr("src", "../../img/star-rating/star-active.png");
        star4.attr("src", "../../img/star-rating/star-empty.png");
        star5.attr("src", "../../img/star-rating/star-empty.png");
    });

    //rate 4
    star4.hover(function () {
            //alert("hover rate4");
            star1.attr("src", "../../img/star-rating/star-active.png");
            star2.attr("src", "../../img/star-rating/star-active.png");
            star3.attr("src", "../../img/star-rating/star-active.png");
            star4.attr("src", "../../img/star-rating/star-active.png");
            star5.attr("src", "../../img/star-rating/star-empty.png");
        }, function () {
            if (rate == 0) {
                star1.attr("src", "../../img/star-rating/star-empty.png");
                star2.attr("src", "../../img/star-rating/star-empty.png");
                star3.attr("src", "../../img/star-rating/star-empty.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 1) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-empty.png");
                star3.attr("src", "../../img/star-rating/star-empty.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 2) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-empty.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 3) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-active.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 4) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-active.png");
                star4.attr("src", "../../img/star-rating/star-active.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 5) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-active.png");
                star4.attr("src", "../../img/star-rating/star-active.png");
                star5.attr("src", "../../img/star-rating/star-active.png");
            }
        }
    );
    star4.click(function () {
        rate = 4;

        star1.attr("src", "../../img/star-rating/star-active.png");
        star2.attr("src", "../../img/star-rating/star-active.png");
        star3.attr("src", "../../img/star-rating/star-active.png");
        star4.attr("src", "../../img/star-rating/star-active.png");
        star5.attr("src", "../../img/star-rating/star-empty.png");
    });

    //rate 5
    star5.hover(function () {
            //alert("hover rate5");
            star1.attr("src", "../../img/star-rating/star-active.png");
            star2.attr("src", "../../img/star-rating/star-active.png");
            star3.attr("src", "../../img/star-rating/star-active.png");
            star4.attr("src", "../../img/star-rating/star-active.png");
            star5.attr("src", "../../img/star-rating/star-active.png");
        }, function () {
            if (rate == 0) {
                star1.attr("src", "../../img/star-rating/star-empty.png");
                star2.attr("src", "../../img/star-rating/star-empty.png");
                star3.attr("src", "../../img/star-rating/star-empty.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 1) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-empty.png");
                star3.attr("src", "../../img/star-rating/star-empty.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 2) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-empty.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 3) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-active.png");
                star4.attr("src", "../../img/star-rating/star-empty.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 4) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-active.png");
                star4.attr("src", "../../img/star-rating/star-active.png");
                star5.attr("src", "../../img/star-rating/star-empty.png");
            } else if (rate == 5) {
                star1.attr("src", "../../img/star-rating/star-active.png");
                star2.attr("src", "../../img/star-rating/star-active.png");
                star3.attr("src", "../../img/star-rating/star-active.png");
                star4.attr("src", "../../img/star-rating/star-active.png");
                star5.attr("src", "../../img/star-rating/star-active.png");
            }
        }
    );
    star5.click(function () {
        rate = 5;

        star1.attr("src", "../../img/star-rating/star-active.png");
        star2.attr("src", "../../img/star-rating/star-active.png");
        star3.attr("src", "../../img/star-rating/star-active.png");
        star4.attr("src", "../../img/star-rating/star-active.png");
        star5.attr("src", "../../img/star-rating/star-active.png");
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
                //Todo Ajax store to DB
                $.post("edit_comment/",
                    {
                        idMember: $("#seller_id").attr("data-id-member"),
                        txt_comment: mycomment,
                        rate: rate
                    },function()
                    {
                        //location.reload()
                    });

        }

    });
});
