<?php
require ("../../../classes/ad.php");
$ad = new ad();

$idAd = isset($_POST['idAd']) ? $_POST['idAd'] : null;
$adName = isset($_POST['adName']) ? $_POST['adName'] : null;
$adLocation = isset($_POST['adLocation']) ? $_POST['adLocation'] : null;;
$adImg = isset($_POST['adImg']) ? $_POST['adImg'] : null;;
$adURL = isset($_POST['adURL']) ? $_POST['adURL'] : null;;
$adPrice = isset($_POST['adPrice']) ? $_POST['adPrice'] : null;;
$adStatus = isset($_POST['adStatus']) ? $_POST['adStatus'] : null;;
$adExp = isset($_POST['adExp']) ? $_POST['adExp'] : null;;

if(isset($idAd) AND isset($adName) AND isset($adLocation) AND isset($adImg) AND isset($adURL) AND isset($adPrice) AND isset($adStatus) AND isset($adExp)) {
    $ad->editAd($idAd, $adName, $adLocation, $adImg, $adURL, $adPrice, $adStatus, $adExp);
}else {
    echo "something wrong.";
}