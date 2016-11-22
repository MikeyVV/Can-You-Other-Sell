<?php

$function = $_POST['function'];

if($function == "getProductByCategory"){
    require ("../../classes/PostProduct.php");
    $object = new PostProduct();
    $object->getProductByCategory($_POST['idCategory']);
}
