<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Music</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--[if lte IE 6]><style type="text/css" media="screen">.tabbed { height:420px; }</style><![endif]-->
<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="js/jquery.slide.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>
</head>
<body>
 <?php 
	$Username = "";

	if(isset($_GET["UserName"])){
		$Username = $_GET["UserName"];
	}
?>
<!-- Top -->
<div id="top">
  <div class="shell">
    <!-- Header -->
    <div id="header">
    <a href="index.php?UserName=<?php echo $Username; ?>" class="logo pull-left">
    	<img src="css/images/logo.jpg" class="site_logoo" alt="" />
    </a>
   
	<?php if($Username === ''):?>
      <div id="navigation">
        <ul>
          <li>  <a href="formrg.php">สมัครสมาชิก</a></li>
          <li><a href="login.php">เข้าสู่ระบบ</a></li>
        </ul>
      </div>
      <?php elseif($Username !== ''):?>
      <div id="navigation" style="margin-top: 2%">
    	<span style="font-size: 18px; color:#FFF"><?php echo $Username; ?></span>
        <div class="dropdown" style="margin-left:2%;">
          <button class="dropbtn"><img src="css/images/aeeow_drow.png" width="20" height="20" /></button>
          <div class="dropdown-content">
            <a href="logout.php?username=<?php echo $Username; ?>">ออกจากระบบ</a>
            <a href="logout.php?username=<?php echo $Username; ?>">แก้ไขขอมูลส่วนตัว</a>
          </div>
        </div>
    </div>
      <?php endif;?>
    </div>
    <!-- End Header -->
    <!-- End Header -->
    <!-- Slider -->
    <div id="slider">
      <div id="slider-holder">
        <ul>
          <li><a href="#"><img src="css/images/slide111.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/slide222.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/slide44.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/slide55.jpg" alt="" /></a></li>
        </ul>
      </div>
      <div id="slider-nav"> <a href="#" class="prev">Previous</a> <a href="#" class="next">Next</a></div>
    </div>
    <!-- End Slider -->
  </div>
</div>
<!-- Top -->
<!-- Main -->
<div id="main">
  <div class="shell">
   <!-- Search, etc -->
    <div class="options">
      <div class="search">
        <form action="#" method="post">
          <span class="field">
          <input type="text" class="blink" value="SEARCH" title="SEARCH" />
          </span>
          <input type="text" class="search-submit" value="GO" />
        </form>
      </div>
      <div class="right"></div>
    </div>
    <!-- End Search, etc -->
    <!-- Content -->
    <div id="content"><!-- Tabs --><!-- Tabs -->
     <!-- Content -->
    <div id="content">
      <!-- Tabs --><!-- Tabs -->
      <!-- Container -->
      <div id="container">
        <div class="tabbed">
          <!-- First Tab Content -->
          <div class="tab-content" style="display:block;">
            <h1><center>สมัครสมาชิกใหม่</center></h1>
        <p><center>กรุณากรอกข้อมูลให้ครบทุกช่อง</center></p>
      <form name="formrg" action="InsertRegister.php" method="post" enctype="multipart/form-data" >
              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="5">
            <tr>
              <td width="33%" valign="top"><div align="right"><strong>ชื่อผู้ใช้</strong></div>
              <div align="right"><span class="small">Username</span>                </div></td>
              <td width="67%"><div align="left">
                <input name="username" type="text" id="username" />
              <span class="smallstar"><font color="#FF0000">*</font> ใส่ชื่อผู้ใช้ในการเข้าใช้งานระบบ</span></div></td>
            </tr>
            <tr>
              <td valign="top"><div align="right"><strong>รหัสผ่าน<br />
                <span class="small">Password</span></strong></div></td>
              <td><div align="left">
                <input name="password" type="password" id="password" />
              <span class="smallstar"><font color="#FF0000">*</font> กรอกรหัสผ่าน</span></div></td>
            </tr>
            <tr>
              <td valign="top"><div align="right"><strong>ยืนยันรหัสผ่าน<br />
                <span class="small">RePassword</span></strong></div></td>
              <td><div align="left">
                <input name="repassword" type="password" id="repassword" />
              <span class="smallstar"><font color="#FF0000">*</font> ยืนยันรหัสผ่านอีกครั้ง</span></div></td>
            </tr>
            <tr>
              <td valign="top"><div align="right"><strong>ชื่อ-สกุล<br />
                <span class="small">Name-Lastname</span></strong></div></td>
              <td><div align="left">
                <input name="name" type="text" id="name" />
              <span class="smallstar"><font color="#FF0000">*</font> ชื่อจริง-นามสกุล</span></div></td>
            </tr>
            <tr>
              <td valign="top"><div align="right"><strong>รหัสบัตรประชาชน<br />
                <span class="small">identily</span></strong></div></td>
              <td><div align="left">
                <input name="identily" type="text" id="identily" />
               <span class="smallstar"><font color="#FF0000">*</font> กรอกเลขประจำตัวประชาชน 13 หลัก</span></div></td>
            </tr>
            <tr>
              <td><div align="right"><strong>เบอร์โทร<br />
                <span class="small">ที่สามารถติดต่อได้</span></strong></div></td>
              <td><div align="left">
                <input name="tel" type="text" id="tel" />
                <span class="smallstar">เบอร์โทรที่สามารถติดต่อได้</span></div></td>
            </tr>
            <tr>
              <td><div align="right"><strong>Email<br />
                <span class="small">จดหมายอิเล็กทรอนิกส์</span></strong></div></td>
              <td><div align="left">
                <input name="email" type="text" id="email" />
              <span class="smallstar">ตัวอย่าง test@hostt.com</span></div></td>
            </tr>
            <tr>
              <td colspan="2"><!--<button  name="submit" type="submit">ลงทะเบียน</button> --></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center">หมายเหตุ <font color="#FF0000">*</font> หมายถึง จำเป็นต้องกรอก </div></td>
            </tr>
          </table> 
        <em>
        <center><input type="submit" name="submit" id="submit"  value="ลงทะเบียน"  onClick="return CheckValidity();"/></center>
          </form>

          </div>
          <!-- End First Tab Content -->
          <!-- Second Tab Content -->
         
        </div>
        <!-- Brands --><!-- End Brands -->
        <!-- Footer -->
        <div id="footer">
          <div class="left"> <a href="#">Home</a> <span>|</span> <a href="#">Support</a> <span>|</span> <a href="#">My Account</a> <span>|</span> <a href="#">The Store</a> <span>|</span> <a href="#">Contact</a> </div>
        </div>
        <!-- End Footer -->
      </div>
      <!-- End Container -->
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Main -->
</body>
</html>
