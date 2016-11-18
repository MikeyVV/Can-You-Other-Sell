<?php
require ("../../classes/management_complaints.php");
$c = new Management_complaints();
echo $c->showListComplaints();
?>