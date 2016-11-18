<?php
require ("../../classes/PostProduct.php");

$detail = new PostProduct();
$idPost = $_POST['idPost'];
$detail->getDetailPostProduct($idPost);