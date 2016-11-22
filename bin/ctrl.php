<?php

$function = $_POST['function'];

if($function == "getCategory"){
    require ("../classes/Category.php");
    $object = new Category();
    $object->getCategory();
}

