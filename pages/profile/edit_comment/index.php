<?php
require ("../../../classes/db.php");
require ("../../../classes/Member.php");
require ("../../../classes/Comment.php");

$comment = new Comment();
$member = new Member();

$idComment = isset($_POST['idComment']) ? $_POST['idComment'] : null;
$idMember = isset($_POST['idMember']) ? $_POST['idMember'] : null;
$txt_comment = isset($_POST['txt_comment']) ? $_POST['txt_comment'] : null;
$rate = isset($_POST['rate']) ? $_POST['rate'] : null;
$old_point = isset($_POST['old_point']) ? $_POST['old_point'] : null;
//echo $idComment."\n".$txt_comment."\n".$rate;

if(isset($idComment)){
    if(isset($rate) AND isset($txt_comment)){
        $comment->editCommentAndRate($idComment,$rate, $txt_comment);
        $member->editRate($idMember, $rate, $old_point, $_SESSION['idMember']);
        echo "OK";
    }else {
        echo "something wrong.";
    }
}else {
    echo "something wrong.";
}