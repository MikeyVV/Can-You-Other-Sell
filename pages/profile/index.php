<?php
require("../../classes/db.php");
require("../../classes/Member.php");
require("../../classes/Comment.php");
$member = new Member();
$comment = new Comment();

$detail = $member->getUserDetailById($_GET['idMember']);
$commentDetail = json_decode($comment->getAllComment($_GET['idMember']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ข้อมูลผู้ขาย</title>
    <!--CSS, Bootstrap-->
    <?php require("../../bin/header.php"); ?>
    <link rel="stylesheet" href="style.css">
    <style>

        /*Ratings Stars
        (with as little code as possible)

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
        }*/

    </style>
    <!--/CSS, Bootstrap-->

</head>

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
                            <h3><?php echo $detail->firstName . " " . $detail->lastName; ?></h3>
                            <div id="seller_id" data-id-member="<?php echo $_GET['idMember']; ?>"></div>
                            <?php $rate = round($detail->rate); ?>
                            <?php
                            switch ($rate) {
                                case 0: ?>
                                    <p style="margin-bottom: 15px;"><img src="../../img/star-rating/star-0.png"></p>
                                <?php break;
                                case 1: ?>
                                    <p style="margin-bottom: 15px;"><img src="../../img/star-rating/star-1.png"></p>
                                <?php break;
                                case 2: ?>
                                    <p style="margin-bottom: 15px;"><img src="../../img/star-rating/star-2.png"></p>
                                <?php break;
                                case 3: ?>
                                    <p style="margin-bottom: 15px;"><img src="../../img/star-rating/star-3.png"></p>
                                <?php break;
                                case 4: ?>
                                    <p style="margin-bottom: 15px;"><img src="../../img/star-rating/star-4.png"></p>
                                <?php break;
                                case 5: ?>
                                    <p style="margin-bottom: 15px;"><img src="../../img/star-rating/star-5.png"></p>
                            <?php break;
                                default: ?>
                                    <p>star not found</p>
                            <?php }
                            ?>
                            <p>จากผู้โหวต&nbsp<?php echo $detail->totalVote; ?>&nbspคน</p>
                            <p style="margin-bottom: 15px;"><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp&nbsp<?php echo $detail->phoneNumber; ?></p>
                            <p style="margin-bottom: 15px;"><b>L</b>: <?php echo $detail->lineID; ?></p>
                            <p style="margin-bottom: 15px;"><i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp&nbsp<?php echo $detail->facebook; ?></p>
                            <p style="margin-bottom: 15px;"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp&nbsp<?php echo $detail->address; ?></p>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>
            </div>
            <?php
            if ($isLogin) {
                if ($_SESSION["idMember"] != $_GET['idMember']) {
                    //Todo if you have ever comment to this you will see the edit panel
                    if($comment->isComment_exit($_GET['idMember'],$_SESSION['firstName'] . " " . $_SESSION['lastName'])){
                        $myCommentDetail = $comment->getMyDetailComment($_GET['idMember']); ?>
                        <div id="view_comment_panel" data-id-comment="<?php echo $myCommentDetail->idComments; ?>" class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-comments" aria-hidden="true"></i>&nbsp&nbsp<b>ความคิดเห็นของฉัน</b>
                                <button id="buttoneditcomment" type="button" class="btn btn-warning pull-right" style="padding-bottom: 4px; padding-top: 4px; margin-top: -5px;"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp&nbspแก้ไข</button>
                            </div>
                            <div class="panel-body" style="border-bottom: 1px solid #ddd">
                                <p>ให้
                                    <?php
                                    switch ($myCommentDetail->rate){
                                        case 0: ?>
                                            <img  src="../../img/star-rating/star-0.png">
                                            <?php break;
                                        case 1: ?>
                                            <img src="../../img/star-rating/star-1.png">
                                            <?php break;
                                        case 2: ?>
                                            <img  src="../../img/star-rating/star-2.png">
                                                <?php break;
                                        case 3: ?>
                                            <img  src="../../img/star-rating/star-3.png">
                                            <?php break;
                                        case 4: ?>
                                            <img  src="../../img/star-rating/star-4.png">
                                            <?php break;
                                        case 5: ?>
                                            <img  src="../../img/star-rating/star-5.png">
                                           <?php break;
                                        default:
                                            echo "star not found";
                                    }
                                    ?>
                                </p>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <span id="mycomment" style="background-color: #ddd; border-radius:3px; padding: 5px;">
                                    <?php echo $myCommentDetail->comment; ?>
                                </span>
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </div>
                        </div>
                        <!-- แสดงความเห็น -->
                        <div id="main_comment" data-rate="<?php echo $myCommentDetail->rate; ?>" style="display: none" class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>&nbsp&nbsp
                                   <b>แก้ไขความคิดเห็น</b>
                                </div>
                                <div id="comment" class="panel-body" style="border-bottom: 1px solid #ddd">
                                    <p><i class="fa fa-user"
                                          aria-hidden="true"></i>&nbsp&nbsp<?php echo $_SESSION["firstName"] . " " . $_SESSION['lastName']; ?>
                                    </p>
                                    <div>
                                        <span>ให้ </span>
                                        <?php
                                        switch ($myCommentDetail->rate){
                                            case 0: ?>
                                                <img id="edit_star1" src="../../img/star-rating/star-empty.png">
                                                <img id="edit_star2" src="../../img/star-rating/star-empty.png">
                                                <img id="edit_star3" src="../../img/star-rating/star-empty.png">
                                                <img id="edit_star4" src="../../img/star-rating/star-empty.png">
                                                <img id="edit_star5" src="../../img/star-rating/star-empty.png">
                                                <?php break;
                                            case 1: ?>
                                                <img id="edit_star1" src="../../img/star-rating/star-active.png">
                                                <img id="edit_star2" src="../../img/star-rating/star-empty.png">
                                                <img id="edit_star3" src="../../img/star-rating/star-empty.png">
                                                <img id="edit_star4" src="../../img/star-rating/star-empty.png">
                                                <img id="edit_star5" src="../../img/star-rating/star-empty.png">
                                                <?php break;
                                            case 2: ?>
                                                <img id="edit_star1" src="../../img/star-rating/star-active.png">
                                                <img id="edit_star2" src="../../img/star-rating/star-active.png">
                                                <img id="edit_star3" src="../../img/star-rating/star-empty.png">
                                                <img id="edit_star4" src="../../img/star-rating/star-empty.png">
                                                <img id="edit_star5" src="../../img/star-rating/star-empty.png">
                                                <?php break;
                                            case 3: ?>
                                                <img id="edit_star1" src="../../img/star-rating/star-active.png">
                                                <img id="edit_star2" src="../../img/star-rating/star-active.png">
                                                <img id="edit_star3" src="../../img/star-rating/star-active.png">
                                                <img id="edit_star4" src="../../img/star-rating/star-empty.png">
                                                <img id="edit_star5" src="../../img/star-rating/star-empty.png">
                                                <?php break;
                                            case 4: ?>
                                                <img id="edit_star1" src="../../img/star-rating/star-active.png">
                                                <img id="edit_star2" src="../../img/star-rating/star-active.png">
                                                <img id="edit_star3" src="../../img/star-rating/star-active.png">
                                                <img id="edit_star4" src="../../img/star-rating/star-active.png">
                                                <img id="edit_star5" src="../../img/star-rating/star-empty.png">
                                                <?php break;
                                            case 5: ?>
                                                <img id="edit_star1" src="../../img/star-rating/star-active.png">
                                                <img id="edit_star2" src="../../img/star-rating/star-active.png">
                                                <img id="edit_star3" src="../../img/star-rating/star-active.png">
                                                <img id="edit_star4" src="../../img/star-rating/star-active.png">
                                                <img id="edit_star5" src="../../img/star-rating/star-active.png">
                                                <?php break;
                                            default:
                                                echo "star not found";
                                        }
                                        ?>
                                    </div>
                                    <br>
                                    <form id="comment_form">
                                        <div class="form-group">
                                            <p id="error_comment"></p>
                                            <textarea id="textarea_comment" class="form-control"
                                                      placeholder="พูดถึงบริการของคนขายคนนี้ หรือความประทับใจของคุณ..."><?php echo $myCommentDetail->comment; ?></textarea>
                                        </div>
                                        <button id="sendcomment" type="submit" class="btn btn-info"><i
                                                class="fa fa-paper-plane"
                                                aria-hidden="true"></i>&nbsp&nbspส่งความคิดเห็น
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /แสดงความเห็น -->
                        <?php
                    }else {
                        //Todo if you never had comment to this you will see the comment panel ?>
                        <!-- แสดงความเห็น -->
                        <div id="main_comment" class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>&nbsp&nbsp
                                    <button type="button" class="btn btn-link" data-toggle="collapse"
                                            data-target="#comment"><b>แสดงความคิดเห็น</b>
                                    </button>
                                </div>
                                <div id="comment" class="panel-body collapse" style="border-bottom: 1px solid #ddd">
                                    <p><i class="fa fa-user"
                                          aria-hidden="true"></i>&nbsp&nbsp<?php echo $_SESSION["firstName"] . " " . $_SESSION['lastName']; ?>
                                    </p>
                                    <div>
                                        <span>ให้ </span>
                                        <a href="#1"><img id="rate1" src="../../img/star-rating/star-empty.png"></a>
                                        <a href="#2"><img id="rate2" src="../../img/star-rating/star-empty.png"></a>
                                        <a href="#3"><img id="rate3" src="../../img/star-rating/star-empty.png"></a>
                                        <a href="#4"><img id="rate4" src="../../img/star-rating/star-empty.png"></a>
                                        <a href="#5"><img id="rate5" src="../../img/star-rating/star-empty.png"></a>
                                    </div>
                                    <br>
                                    <form id="comment_form">
                                        <div class="form-group">
                                            <p id="error_comment"></p>
                                            <textarea id="textarea_comment" class="form-control"
                                                      placeholder="พูดถึงบริการของคนขายคนนี้ หรือความประทับใจของคุณ..."></textarea>
                                        </div>
                                        <button id="sendcomment" type="submit" class="btn btn-info"><i
                                                class="fa fa-paper-plane"
                                                aria-hidden="true"></i>&nbsp&nbspส่งความคิดเห็น
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /แสดงความเห็น -->
                   <?php } ?>


                <?php }
            } ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-comments"
                       aria-hidden="true"></i>&nbsp&nbsp<b>ความคิดเห็นต่อผู้ขาย(<?php echo count($commentDetail->lists); ?>)</b>
                </div>
                <?php for ($i = 0; $i < count($commentDetail->lists); $i++) { ?>
                    <div class="panel-body" style="border-bottom: 1px solid #ddd">
                        <p><i class="fa fa-user"
                              aria-hidden="true"></i> <?php echo $commentDetail->lists[$i]->nameOfCommentator; ?></p>
                        <?php if ($commentDetail->lists[$i]->rate == 0) { ?>
                            <p>ให้ <img src="../../img/star-rating/star-0.png"></p>
                        <?php } ?>
                        <?php if ($commentDetail->lists[$i]->rate == 1) { ?>
                            <p>ให้ <img src="../../img/star-rating/star-1.png"></p>
                        <?php } ?>
                        <?php if ($commentDetail->lists[$i]->rate == 2) { ?>
                            <p>ให้ <img src="../../img/star-rating/star-2.png"></p>
                        <?php } ?>
                        <?php if ($commentDetail->lists[$i]->rate == 3) { ?>
                            <p>ให้ <img src="../../img/star-rating/star-3.png"></p>
                        <?php } ?>
                        <?php if ($commentDetail->lists[$i]->rate == 4) { ?>
                            <p>ให้ <img src="../../img/star-rating/star-4.png"></p>
                        <?php } ?>
                        <?php if ($commentDetail->lists[$i]->rate == 5) { ?>
                            <p>ให้ <img src="../../img/star-rating/star-5.png"></p>
                        <?php } ?>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>

                        <span style="background-color: #ddd; border-radius:3px; padding: 5px;">
                         <?php echo $commentDetail->lists[$i]->comment; ?>
                        </span>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                <?php } ?>
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
<?php if($comment->isComment_exit($_GET['idMember'],$_SESSION['firstName'] . " " . $_SESSION['lastName'])){ ?>
<script src="script.js"></script>
<?php } else {?>
<script src="star.js"></script>
<?php } ?>
</body>
</html>
