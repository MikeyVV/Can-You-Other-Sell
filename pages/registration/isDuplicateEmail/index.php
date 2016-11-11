<?php
require('../../../classes/Member.php');
$member = new Member();

$email = isset($_POST['email']) ? $_POST['email'] : null;

if(isset($email)){
    if($member->isFoundEmail($email)){
        echo
        "{
            \"boolean\" : true,
            \"detail\" : \"Email found.\"
        }";
    }else {
        echo
        "{
            \"boolean\" : false,
            \"detail\" : \"Email not found.\"
        }";
    }
}