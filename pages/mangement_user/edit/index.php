<?php
require ('../../../classes/db.php');
require('../../../classes/Member.php');
$member = new Member();

$old_password = !empty($_POST['old_password']) ? $_POST['old_password'] : null;
$new_password = !empty($_POST['new_password']) ? $_POST['new_password'] : null;
$repeat_new_password = !empty($_POST['repeat_new_password']) ? $_POST['repeat_new_password'] : null;
$FName = isset($_POST['FName']) ? $_POST['FName'] : null;
$LName = isset($_POST['LName']) ? $_POST['LName'] : null;
$phoneNumber = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : null;
$address = isset($_POST['address']) ? $_POST['address'] : null;
$lineID = isset($_POST['lineID']) ? $_POST['lineID'] : null;
$facebook = isset($_POST['facebook']) ? $_POST['facebook'] : null;

$member->edit($FName, $LName, $phoneNumber, $address, $lineID, $facebook);
if (isset($old_password) AND isset($new_password) AND isset($repeat_new_password)) {
    if($new_password === $repeat_new_password)
    $member->editPassword($old_password, $new_password);
}
echo "{\"detail\":\"finish\"}";