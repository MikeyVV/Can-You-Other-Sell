<?php
require ("../../../classes/ad.php");
$ad = new ad();

$adName = isset($_POST['adName']) ? $_POST['adName'] : null;
$adLocation = isset($_POST['adLocation']) ? $_POST['adLocation'] : null;;
$adImg = isset($_POST['adImg']) ? $_POST['adImg'] : null;;
$adURL = isset($_POST['adURL']) ? $_POST['adURL'] : null;;
$adPrice = isset($_POST['adPrice']) ? $_POST['adPrice'] : null;;
$adExp = isset($_POST['adExp']) ? $_POST['adExp'] : null;;

if(isset($adName) AND isset($adLocation) AND isset($adImg) AND isset($adURL) AND isset($adPrice) AND isset($adExp)) {
    $ad->addAd($adName, $adLocation, $adImg, $adURL, $adPrice, $adExp);
}else {
    echo "something wrong.";
}