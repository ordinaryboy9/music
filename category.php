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
<style>
.row{
	display:-webkit-box;
	display:-ms-flexbox;
	display:flex;
	-ms-flex-wrap:wrap;
	flex-wrap:wrap;
	margin-right:-10px;
	margin-left:-10px
}
.dropbtn {
  background-color: #FFFF66;
  color: white;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
   display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  right:0;
  left:auto;
}

.dropdown-content a {
  color: #CC3366;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
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
            <a href="index.php?UserName=""<?php echo $Username; ?>">ออกจากระบบ</a>
  <a href="editprofile.php?UserName=<?php echo $Username; ?>">แก้ไขขอมูลส่วนตัว</a>          
    <?php
			include('connect.php');
			$Sql_Queryuser = "select * from user where user = '$Username' and status = 'admin' ";
			$queryuser = mysqli_query($conn, $Sql_Queryuser);
			$resultuser = mysqli_fetch_array($queryuser, MYSQLI_ASSOC);
			if ($resultuser){ ?>
            <a href="Admindata.php?UserName=<?php echo ($resultuser['user']); ?>">จัดการข้อมูลสมาชิก</a>
            <a href="Admindetel.php?UserName=<?php echo ($resultuser['user']); ?>">จัดก่ารข้อมูลสินค้า</a>
            <?php }else{ ?>
            <?php }?>
  </div>
        </div>
    </div>
      <?php endif;?>
    </div>
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
      
      <div class="right"></div>
    </div>
   
    <!-- End Search, etc -->
    <!-- Content -->
    <div id="content"><!-- Tabs --><!-- Tabs -->
      <!-- Container -->
      <div id="container">
        <div class="tabbed" align="center" style="margin-left: 12%">
          <div id=<div align="center" class="row">
              <div> <a href="pdguterbay.php?UserName=<?php echo $Username; ?>&TypeMusic=guitaret">
              <img src="css/images/button.gif" width="250" height="200"  /></a>
                  <div>
                     <font>กีต้าร์ไฟฟ้า</font>
                  </div>
              </div>
              <div><a href="pdguterbay.php?UserName=<?php echo $Username; ?>&TypeMusic=guitar">
                  <img src="css/images/buttonguter.gif" width="250" height="200"  /></a>
                  <div>
                     <font>กีต้าร์โปร่ง</font>
                  </div>
              </div>
              <div><a href="pdguterbay.php?UserName=<?php echo $Username; ?>&TypeMusic=drum">
                  <img src="css/images/buttondrum.gif" width="250" height="200"  />
                  <div>
                     <font>กลอง</font>
                  </div>
              </div>
          </div>
          <div id=<div align="center" class="row">
              <div><a href="pdguterbay.php?UserName=<?php echo $Username; ?>&TypeMusic=bass">
                  <img src="css/images/buttonbass.gif" width="250" height="200"  />
                  <div>
                     <font>กีต้าร์เบส</font>
                  </div>
              </div>
              <div><a href="pdguterbay.php?UserName=<?php echo $Username; ?>&TypeMusic=effects">
                  <img src="css/images/buttoneff.gif" width="250" height="200"  />
                  <div>
                     <font>เอฟเฟค</font>
                  </div>
              </div>
              <div><a href="pdguterbay.php?UserName=<?php echo $Username; ?>&TypeMusic=items">
                  <img src="css/images/buttonnn.gif" width="250" height="200"  />
                  <div>
                     <font>รายการอื่นๆ</font>
                  </div>
              </div>
          </div>
        </div>
        <!-- Brands --><!-- End Brands -->
        <!-- Footer -->
        <div id="footer">
          <div class="left"></div>
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
