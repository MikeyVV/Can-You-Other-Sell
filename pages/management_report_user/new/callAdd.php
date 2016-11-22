<?php

require ("../../../classes/management_complaints.php");

$c = new Management_complaints();
$c->addComplaints($_POST["topic"], $_POST["category"], $_POST[link], $_POST["detail"],0, $_POST["image"]);


?>