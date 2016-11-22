<?php

$function = $_POST['function'];

if($function == "postProduct"){
    require ("../../../classes/sell_management.php");

    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $detail = $_POST['detail'];
    $nameImage = $_POST['nameImage'];

    $object = new sell_management();
    $object->postProduct($name, $category, $price, $detail, $nameImage);
}elseif($function == "getCategory"){
    require ("../../../classes/Category.php");

    $object = new Category();
    $object->getCategory();
}

