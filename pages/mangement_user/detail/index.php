<?php
require('../../../classes/Member.php');
$member = new Member();
echo json_encode($member->getUserDetail());