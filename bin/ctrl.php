<?php

$function = $_POST['function'];

if($function == "getCategory"){
    require ("../classes/Category.php");
    $object = new Category();
    $object->getCategory();
}elseif($function == "getAd"){
    require ("../classes/ad.php");
    $object = new ad();
    $object->getAd();
}elseif($function == "getRecentProduct"){
    require ("../classes/PostProduct.php");
    $object = new PostProduct();
    $object->getRecentProduct(8);
}elseif($function == "getTopFour"){
    require ("../classes/PostProduct.php");
    $object = new PostProduct();
    $object->getTopFour();
}

