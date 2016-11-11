<!DOCTYPE html>
<html lang="en">
<head>
    <title>สมัครสมาชิกเรียบร้อยแล้ว</title>
    <!--CSS, Bootstrap-->
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Private CSS -->
<link rel="stylesheet" href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/CSS/style.css">

<!-- Font Aewsome -->
<link rel="stylesheet" href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/CSS/font-awesome-4.6.3/css/font-awesome.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--/CSS, Bootstrap-->
</head>

<body>
<!--แถบบาร์ข้างบน Navbar-->
<?php require("../../bin/navbar.php"); ?><!--/แถบบาร์ข้างบน Navbar-->

<div class="container-fluid">
    <center><img style="witdh: 150px;height: 150px;" src="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/img/basket-full-icon.png">
</center>
    <center><h4>สมัครสมาชิกเรียบร้อยแล้ว</h4></center>
    <?
    header( "refresh: 2; url=http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/start.php" );
    exit(0);
    ?>
  </div>

</body>
</html>
