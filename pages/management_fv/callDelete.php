<?php
require ("../../classes/favorite_management.php");

$delete = new FavoriteManagement();
$idPost = $_POST['idPost'];
$idComment = $_POST['idMember'];
$delete->deleteFavorite($idPost,$idComment);

?>