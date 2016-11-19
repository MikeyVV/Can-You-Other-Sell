<!DOCTYPE html>
<html lang="en">
<head>
    <title>ข้อมูลผู้ขาย</title>
    <!--CSS, Bootstrap-->
    <?php require("../../bin/header.php"); ?>
    <style>
    /*
	Ratings Stars
	(with as little code as possible)
*/
.rating {
  unicode-bidi: bidi-override;
  direction: rtl;
  text-align: left;
}
.rating > span {
  display: inline-block;
  position: relative;
  width: 1.1em;
  font-size: 1.5em;
}
.rating > span:hover,
.rating > span:hover ~ span {
  color: transparent;
}
.rating > span:hover:before,
.rating > span:hover ~ span:before {
   content: "\2605";
   position: absolute;
   left: 0;
   color: gold;
}

    </style>
    <!--/CSS, Bootstrap-->

</head>

<script>
    $(document).ready(function(){

        var rateInURL = window.location.href.charAt((window.location.href.length)-1);
        if(rateInURL!=1 && rateInURL!=2 && rateInURL!=3 && rateInURL!=4 && rateInURL!=5)rateInURL=0;

        var rate = 0;

        //rate 1
        $("#rate1").hover(function(){
                //alert("hover rate1");
                $("#rate1").attr("src","../../img/star-active.png");
                $("#rate2").attr("src","../../img/star-empty.png");
                $("#rate3").attr("src","../../img/star-empty.png");
                $("#rate4").attr("src","../../img/star-empty.png");
                $("#rate5").attr("src","../../img/star-empty.png");
            }, function(){
                if(rate == 0){
                    $("#rate1").attr("src","../../img/star-empty.png");
                    $("#rate2").attr("src","../../img/star-empty.png");
                    $("#rate3").attr("src","../../img/star-empty.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 1){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-empty.png");
                    $("#rate3").attr("src","../../img/star-empty.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 2){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-empty.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 3){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-active.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 4){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-active.png");
                    $("#rate4").attr("src","../../img/star-active.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 5){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-active.png");
                    $("#rate4").attr("src","../../img/star-active.png");
                    $("#rate5").attr("src","../../img/star-active.png");
                }
            }
        );
        $("#rate1").click(function(){
            rate = 1;
            $("#rate1").attr("src","../../img/star-active.png");
            $("#rate2").attr("src","../../img/star-empty.png");
            $("#rate3").attr("src","../../img/star-empty.png");
            $("#rate4").attr("src","../../img/star-empty.png");
            $("#rate5").attr("src","../../img/star-empty.png");
        });

        //rate 2
        $("#rate2").hover(function(){
                //alert("hover rate2");
                $("#rate1").attr("src","../../img/star-active.png");
                $("#rate2").attr("src","../../img/star-active.png");
                $("#rate3").attr("src","../../img/star-empty.png");
                $("#rate4").attr("src","../../img/star-empty.png");
                $("#rate5").attr("src","../../img/star-empty.png");
            }, function(){
                if(rate == 0){
                    $("#rate1").attr("src","../../img/star-empty.png");
                    $("#rate2").attr("src","../../img/star-empty.png");
                    $("#rate3").attr("src","../../img/star-empty.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 1){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-empty.png");
                    $("#rate3").attr("src","../../img/star-empty.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 2){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-empty.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 3){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-active.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 4){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-active.png");
                    $("#rate4").attr("src","../../img/star-active.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 5){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-active.png");
                    $("#rate4").attr("src","../../img/star-active.png");
                    $("#rate5").attr("src","../../img/star-active.png");
                }
            }
        );
        $("#rate2").click(function(){
            rate = 2;
            $("#rate1").attr("src","../../img/star-active.png");
            $("#rate2").attr("src","../../img/star-active.png");
            $("#rate3").attr("src","../../img/star-empty.png");
            $("#rate4").attr("src","../../img/star-empty.png");
            $("#rate5").attr("src","../../img/star-empty.png");
        });

        //rate 3
        $("#rate3").hover(function(){
                //alert("hover rate3");
                $("#rate1").attr("src","../../img/star-active.png");
                $("#rate2").attr("src","../../img/star-active.png");
                $("#rate3").attr("src","../../img/star-active.png");
                $("#rate4").attr("src","../../img/star-empty.png");
                $("#rate5").attr("src","../../img/star-empty.png");
            }, function(){
                if(rate == 0){
                    $("#rate1").attr("src","../../img/star-empty.png");
                    $("#rate2").attr("src","../../img/star-empty.png");
                    $("#rate3").attr("src","../../img/star-empty.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 1){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-empty.png");
                    $("#rate3").attr("src","../../img/star-empty.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 2){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-empty.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 3){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-active.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 4){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-active.png");
                    $("#rate4").attr("src","../../img/star-active.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 5){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-active.png");
                    $("#rate4").attr("src","../../img/star-active.png");
                    $("#rate5").attr("src","../../img/star-active.png");
                }
            }
        );
        $("#rate3").click(function(){
            rate = 3;
            $("#rate1").attr("src","../../img/star-active.png");
            $("#rate2").attr("src","../../img/star-active.png");
            $("#rate3").attr("src","../../img/star-active.png");
            $("#rate4").attr("src","../../img/star-empty.png");
            $("#rate5").attr("src","../../img/star-empty.png");
        });

        //rate 4
        $("#rate4").hover(function(){
                //alert("hover rate4");
                $("#rate1").attr("src","../../img/star-active.png");
                $("#rate2").attr("src","../../img/star-active.png");
                $("#rate3").attr("src","../../img/star-active.png");
                $("#rate4").attr("src","../../img/star-active.png");
                $("#rate5").attr("src","../../img/star-empty.png");
            }, function(){
                if(rate == 0){
                    $("#rate1").attr("src","../../img/star-empty.png");
                    $("#rate2").attr("src","../../img/star-empty.png");
                    $("#rate3").attr("src","../../img/star-empty.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 1){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-empty.png");
                    $("#rate3").attr("src","../../img/star-empty.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 2){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-empty.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 3){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-active.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 4){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-active.png");
                    $("#rate4").attr("src","../../img/star-active.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 5){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-active.png");
                    $("#rate4").attr("src","../../img/star-active.png");
                    $("#rate5").attr("src","../../img/star-active.png");
                }
            }
        );
        $("#rate4").click(function(){
            rate = 4;
            $("#rate1").attr("src","../../img/star-active.png");
            $("#rate2").attr("src","../../img/star-active.png");
            $("#rate3").attr("src","../../img/star-active.png");
            $("#rate4").attr("src","../../img/star-active.png");
            $("#rate5").attr("src","../../img/star-empty.png");
        });

        //rate 5
        $("#rate5").hover(function(){
                //alert("hover rate5");
                $("#rate1").attr("src","../../img/star-active.png");
                $("#rate2").attr("src","../../img/star-active.png");
                $("#rate3").attr("src","../../img/star-active.png");
                $("#rate4").attr("src","../../img/star-active.png");
                $("#rate5").attr("src","../../img/star-active.png");
            }, function(){
                if(rate == 0){
                    $("#rate1").attr("src","../../img/star-empty.png");
                    $("#rate2").attr("src","../../img/star-empty.png");
                    $("#rate3").attr("src","../../img/star-empty.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 1){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-empty.png");
                    $("#rate3").attr("src","../../img/star-empty.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 2){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-empty.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 3){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-active.png");
                    $("#rate4").attr("src","../../img/star-empty.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 4){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-active.png");
                    $("#rate4").attr("src","../../img/star-active.png");
                    $("#rate5").attr("src","../../img/star-empty.png");
                }else if(rate == 5){
                    $("#rate1").attr("src","../../img/star-active.png");
                    $("#rate2").attr("src","../../img/star-active.png");
                    $("#rate3").attr("src","../../img/star-active.png");
                    $("#rate4").attr("src","../../img/star-active.png");
                    $("#rate5").attr("src","../../img/star-active.png");
                }
            }
        );
        $("#rate5").click(function(){
            rate = 5;
            $("#rate1").attr("src","../../img/star-active.png");
            $("#rate2").attr("src","../../img/star-active.png");
            $("#rate3").attr("src","../../img/star-active.png");
            $("#rate4").attr("src","../../img/star-active.png");
            $("#rate5").attr("src","../../img/star-active.png");
        });

        //====================================================================

        $("#sendcomment").click(function(){
            //alert("send comment");
            if(rate == 0 && $("textarea#textarea_comment").val() == "")alert("กรุณาให้เรทติ้งหรือแสดงความคิดเห็นก่อนส่ง");
            else {
                //alert("false");
                var mycomment = $("textarea#textarea_comment").val();
                $("#main_comment").load("mycomment.php",function () {
                    if(rate == 0){
                        $("#rate1").attr("src","../../img/star-empty.png");
                        $("#rate2").attr("src","../../img/star-empty.png");
                        $("#rate3").attr("src","../../img/star-empty.png");
                        $("#rate4").attr("src","../../img/star-empty.png");
                        $("#rate5").attr("src","../../img/star-empty.png");
                    }else if(rate == 1){
                        $("#rate1").attr("src","../../img/star-active.png");
                        $("#rate2").attr("src","../../img/star-empty.png");
                        $("#rate3").attr("src","../../img/star-empty.png");
                        $("#rate4").attr("src","../../img/star-empty.png");
                        $("#rate5").attr("src","../../img/star-empty.png");
                    }else if(rate == 2){
                        $("#rate1").attr("src","../../img/star-active.png");
                        $("#rate2").attr("src","../../img/star-active.png");
                        $("#rate3").attr("src","../../img/star-empty.png");
                        $("#rate4").attr("src","../../img/star-empty.png");
                        $("#rate5").attr("src","../../img/star-empty.png");
                    }else if(rate == 3){
                        $("#rate1").attr("src","../../img/star-active.png");
                        $("#rate2").attr("src","../../img/star-active.png");
                        $("#rate3").attr("src","../../img/star-active.png");
                        $("#rate4").attr("src","../../img/star-empty.png");
                        $("#rate5").attr("src","../../img/star-empty.png");
                    }else if(rate == 4){
                        $("#rate1").attr("src","../../img/star-active.png");
                        $("#rate2").attr("src","../../img/star-active.png");
                        $("#rate3").attr("src","../../img/star-active.png");
                        $("#rate4").attr("src","../../img/star-active.png");
                        $("#rate5").attr("src","../../img/star-empty.png");
                    }else if(rate == 5){
                        $("#rate1").attr("src","../../img/star-active.png");
                        $("#rate2").attr("src","../../img/star-active.png");
                        $("#rate3").attr("src","../../img/star-active.png");
                        $("#rate4").attr("src","../../img/star-active.png");
                        $("#rate5").attr("src","../../img/star-active.png");
                    }

                    $("#mycomment").text(mycomment);
                });
            }

        });
    });
</script>

<body class="web-bg">
<!--แถบบาร์ข้างบน Navbar-->
<?php require("../../bin/navbar.php"); ?>
<!--/แถบบาร์ข้างบน Navbar-->

<div class="container-fluid">
    <div class="row">
        <!--โลโก้เว็บ-->
        <div class="col-sm-2">
            <?php require("../../bin/logo.php"); ?>
        </div>
        <!--/โลโก้เว็บ-->
        <div class="col-sm-7">
            <div class="row">
                <div class="col-sm-12">
                    <!--ช่องค้นหา พร้อมปุ่มกด-->
                    <?php require("../../bin/searchBox.php"); ?>
                    <!--/ช่องค้นหา พร้อมปุ่มกด-->
                </div>
            </div>
            <div class="row">
                <!--ประเภทสินค้ายอดนิยม-->
                <?php require("../../bin/popularProduct.php"); ?>
                <!--/ประเภทสินค้ายอดนิยม-->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <!--เมนูกดเลือกประเภทสินค้า-->
            <?php require("../../bin/categoryMenu.php"); ?>
            <!--/เมนูกดเลือกประเภทสินค้า-->
        </div>
        <!-- ทำงานที่นี่ -->
        <div class="col-sm-8">
            <div class="panel panel-danger">
                <div class="panel-body">
                    <div class="row">
                      <div class="col-sm-3"></div>
                      <div class="col-sm-6" style="text-align: center;">
                        <h3>ไก่จ๊อ จะครองโลก</h3>
                        <h5 style="margin-bottom: 15px;"><img src="../../img/star-4.png">&nbsp(35,412)</h5>
                        <h5 style="margin-bottom: 15px;"><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp&nbsp089-999-9999</h5>
                        <h5 style="margin-bottom: 15px;"><b>L</b> : tanachot</h5>
                        <h5 style="margin-bottom: 15px;"><i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp&nbsptanachot</h5>
                        <h5 style="margin-bottom: 15px;"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp&nbspพัทยา ,ชลบุรี</h5>
                      </div>
                      <div class="col-sm-3"></div>
                    </div>
                </div>
            </div>
            <?php if($_SESSION["name"] != 'ไก่จ๊อ จะครองโลก'){ ?>
            <!-- แสดงความเห็น -->
            <div id="main_comment" class="panel-group">
            <div class="panel panel-default">
              <div class="panel-heading">
                <i class="fa fa-pencil" aria-hidden="true"></i>&nbsp&nbsp<button type="button" class="btn btn-link" data-toggle="collapse" data-target="#comment"><b>แสดงความคิดเห็น</b></button>
              </div>
              <div id="comment" class="panel-body collapse"  style="border-bottom: 1px solid #ddd">
                  <p><i class="fa fa-user" aria-hidden="true"></i>&nbsp&nbsp<?php echo $_SESSION["name"]; ?></p>
                  <div>
                      <span>ให้ </span>
                      <a href="#1"><img id="rate1" src="../../img/star-empty.png"></a>
                      <a href="#2"><img id="rate2" src="../../img/star-empty.png"></a>
                      <a href="#3"><img id="rate3" src="../../img/star-empty.png"></a>
                      <a href="#4"><img id="rate4" src="../../img/star-empty.png"></a>
                      <a href="#5"><img id="rate5" src="../../img/star-empty.png"></a>
                  </div>
                  <br>
                  <div class="form-group">
                    <textarea id="textarea_comment" class="form-control" placeholder="พูดถึงบริการของคนขายคนนี้ หรือความประทับใจของคุณ..."></textarea>
                  </div>
                  <button id="sendcomment" type="button" class="btn btn-info"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp&nbspส่งความคิดเห็น</button>
                </div>
            </div>
          </div>
            <!-- /แสดงความเห็น -->
            <?php } ?>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <i class="fa fa-comments" aria-hidden="true"></i>&nbsp&nbsp<b>ความคิดเห็นต่อผู้ขาย(2)</b>
                  </div>
                  <div class="panel-body" style="border-bottom: 1px solid #ddd">
                      <p><i class="fa fa-user" aria-hidden="true"></i> กิตติ ติติ</p>
                      <p>ให้ <img src="../../img/star-4.png"></p>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>

                        <span style="background-color: #ddd; border-radius:3px; padding: 5px;">
                          ได้รับสินค้ารวดเร็วดีครับ
                        </span>
                          <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                    <div class="panel-body" style="border-bottom: 1px solid #ddd">
                        <p><i class="fa fa-user" aria-hidden="true"></i> โลลิป็อป ปีโป้</p>
                        <p>ให้ <img src="../../img/star-4.png"></p>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <span style="background-color: #ddd; border-radius:3px; padding: 5px;">
                        พ่อค้าพูดจาดีมากค่ะ สุดยอดไปเลย
                      </span>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                      </div>
                </div>
            </div>
        <!-- /ทำงานที่นี่ -->
        <div class="col-sm-2">
            <!--แสดงสินค้าแนะนำ-->
            <?php require("../../bin/recommendProduct.php"); ?>
            <!--/แสดงสินค้าแนะนำ-->
        </div>
        </div>
    </div>
    <?php require("../../bin/footer.php"); ?>
</body>
</html>
