<?php
require ("../../../classes/PostProduct.php");

$object = new PostProduct();

$function = $_POST['function'];

if($function == "getDetailPostProduct"){
    $idPost = $_POST['idPost'];
    $object->getDetailPostProduct($idPost);
}

