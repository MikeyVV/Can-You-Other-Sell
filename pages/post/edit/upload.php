<?php

// Created SESSION.
session_start();
$idMember = $_SESSION['idMember'];
/*
$paht_form_client = $_FILES['file']['tmp_name'];
$newimg = $_FILES['file']['name'];
$idPost = $_POST['idPost'];
for($item = 0; $item < count($newimg); $item++) {
    $type = substr($newimg[$i], (strpos($newimg[$i],".")+1));
    move_uploaded_file($paht_form_client[$item], "../../../img/products/" . $idMember ."-".$idPost."-".($item+1).".".$type);
}
*/
$paht_form_client = $_FILES['file']['tmp_name'];
$newimg = $_FILES['file']['name'];
for($item = 0; $item < count($newimg); $item++) {
    move_uploaded_file($paht_form_client[$item], "../../../img/products/" . $newimg[$item]);
}
?>