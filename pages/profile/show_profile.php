<?php
require ("../../classes/Member.php");

$member = new Member();

echo $member->getUserDetail()->email;