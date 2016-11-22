<?php
require ("../../classes/sell_management.php");

$object = new sell_management();

$function = $_POST['function'];

if($function == "showProductList"){
    $idMember = $_POST['idMember'];
    $object->showProductList($idMember);
}elseif($function == "editStatus"){
    $idPost = $_POST['idPost'];
    $status = $_POST['status'];
    $object->editStatus($idPost, $status);
}

