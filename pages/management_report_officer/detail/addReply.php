<?php
require ("../../../classes/management_complaints.php");
$c = new Management_complaints();
$c->reply($_POST["id"],$_POST["reply"]);
?>