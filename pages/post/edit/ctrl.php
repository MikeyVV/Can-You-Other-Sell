<?php

$function = $_POST['function'];

if($function == "editDetailPostProduct"){
    require ("../../../classes/sell_management.php");

    $idPost = $_POST['idPost'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $detail = $_POST['detail'];
    $nameImage = $_POST['nameImage'];

    $object = new PostProduct();
    $object->editDetailPostProduct($idPost, $name, $category, $price, $detail, $nameImage);
}elseif($function == "getCategory"){
    require ("../../../classes/Category.php");

    $object = new Category();
    $object->getCategory();
}elseif($function == "getDetailPostProductForEdit"){
    require ("../../../classes/PostProduct.php");

    $idPost = $_POST['idPost'];

    $object = new PostProduct();
    $object->getDetailPostProductForEdit($idPost);
}

