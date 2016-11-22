<?php
require ("../../../classes/db.php");
require ("../../../classes/Member.php");
require ("../../../classes/Comment.php");

$comment = new Comment();
$member = new Member();

$idMember = isset($_POST['idMember']) ? $_POST['idMember'] : null;
$txt_comment = isset($_POST['txt_comment']) ? $_POST['txt_comment'] : null;
$rate = isset($_POST['rate']) ? $_POST['rate'] : null;

echo $idMember."\n".$txt_comment."\n".$rate;

if(isset($idMember)){
    if(isset($rate) AND isset($txt_comment)){
        $comment->editCommentAndRate($idMember,$txt_comment, $rate);
        $member->increaseRate($idMember, $rate, $_SESSION['idMember']);
        echo "OK";
    }else {
        echo "something wrong.";
    }
}else {
    echo "something wrong.";
}