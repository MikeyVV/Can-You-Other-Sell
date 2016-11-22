<?php
require ("../../../classes/db.php");
require("../../../classes/Member.php");
$member = new Member();
$email = $_POST['email'];
$password = $_POST['password'];

$member->login($email, $password);