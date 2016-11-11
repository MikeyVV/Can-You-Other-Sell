<?php
require('../../../classes/Member.php');
$member = new Member();

$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$repeat_password = isset($_POST['repeat_password']) ? $_POST['repeat_password'] : null;
$FName = isset($_POST['FName']) ? $_POST['FName'] : null;
$LName = isset($_POST['LName']) ? $_POST['LName'] : null;

if (isset($email) AND
    isset($password) AND
    isset($repeat_password) AND
    isset($FName) AND
    isset($LName)
) {
    if ($password === $repeat_password AND !$member->isFoundEmail($email)) {
        $member->register($email, $password, $FName, $LName);
        echo
        "{
            \"boolean\": true,
            \"detail\": \"user added.\"
        }";
    } else {
        echo
        "{
            \"boolean\": false,
            \"detail\": \"password not match or email already used.\"
        }";
    }
} else {
    $out =
        "{
            \"boolean\": false,
            \"detail\": \"require :";

    if(empty($email)) $out .= " email";
    if(empty($password)) $out .= " password";
    if(empty($repeat_password)) $out .= " repeat_password";
    if(empty($FName)) $out .= " FName";
    if(empty($LName)) $out .= " LName";

    $out .= "\" 
    }";
    echo $out;
}