<?php
session_start();
$isLogin = false;
$isOfficer = false;
$status = (int)$_SESSION['status'];
if($_SESSION['idMember']) {
  $isLogin = true;
    if($status === 0) {
        $isOfficer = true;
    }
}
?>
<nav class="navbar navbar-default my-navbar">
    <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/start.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp&nbspCan You Other Sell?</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- เจ้าหน้าที่ -->
      <?php if($isLogin AND $isOfficer) {?>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-id-badge" aria-hidden="true"></i>&nbsp&nbsp<?php echo "เจ้าหน้าที่".$_SESSION['firstName']." ".$_SESSION['lastName']?>
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/ad/"><i class="fa fa-window-restore" aria-hidden="true"></i>&nbsp&nbspจัดการโฆษณา</a></li>
            <li><a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/management_report_officer/management_report_officer.php"><i class="fa fa-balance-scale" aria-hidden="true"></i>&nbsp&nbspจัดการเรื่องเรียนจากสมาชิก</a></li>
            <li><a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/management_fv/index.php"><i class="fa fa-star" aria-hidden="true"></i>&nbsp&nbspจัดการสินค้าที่สนใจ</a></li>
            <li><a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/login/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp&nbspออกจากระบบ</a></li>
          </ul>
        </li>
            <!-- /เจ้าหน้าที่ -->
            <!-- สมาชิกธรรมดา -->
        <?php } else if($isLogin) {?>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName']?>
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/mangement_user/"><i class="fa fa-pencil-square" aria-hidden="true"></i>&nbsp&nbspจัดการข้อมูลส่วนตัว</a></li>
              <li><a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/management_product/Management%20Products.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp&nbspจัดการขายสินค้า</a></li>
              <li><a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/management_fv/index.php"><i class="fa fa-star" aria-hidden="true"></i>&nbsp&nbspจัดการสินค้าที่สนใจ</a></li>
              <li><a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/management_report_user/management_report_user.php"><i class="fa fa-balance-scale" aria-hidden="true"></i>&nbsp&nbspจัดการเรื่องร้องเรียน</a></li>
              <li><a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/login/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp&nbspออกจากระบบ</a></li>
            </ul>
          </li>
          <!-- /สมาชิกธรรมดา -->
          <!-- ไม่ได้ล็อกอิน -->
          <?php } else {?>
            <li><a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/login/"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp&nbspเข้าสู่ระบบ</a></li>
            <li><a href="http://angsila.cs.buu.ac.th/~57160033/887240%20System%20Analysis%20and%20Designs/Project/Mockup/pages/registration/"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp&nbspสมัครสมาชิก</a></li>
        </ul>
        <?php }?>
        <!-- /ไม่ได้ล็อกอิน -->
    </div>
    <!-- ddsfd-->
					
    </div>
</nav>
