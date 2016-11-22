<?php
require ("../../classes/favorite_management.php");

$delete = new FavoriteManagement();
$idPost = $_POST['idPost'];
$idMember = $_POST['idMember'];
$delete->deleteFavorite($idPost,$idMember);

?>