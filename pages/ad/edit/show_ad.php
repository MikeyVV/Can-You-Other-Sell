<?php
require ("../../../classes/ad.php");
$ad = new ad();
$ad->getAdById($_POST['idAd']);