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
          <form id="form1" name="form1" method="post" action="">
          
              <table width="80%" border="0" cellspacing="40">
              	<tr>
                	<td>
                        <div class="image">
                        <a href="formbay.php?UserName=<?php echo $Username; ?>">
                        <img src="css/images//sell.png" alt="" /></a>
                        </div>
                    </td>
                    <td>
                        <li><br />
                          ลงประกาศขายเครื่องดนตรีของคุณได้ที่นี้<span></span><br />
                                เพื่อความสะดวกรวดเร็ว<span></span>ลงขายได้ตลอดเวลา<br />
                                ปลอดภัยจากมิฉาชีพ
                                <p class="price">&nbsp;</p>
                        </li>
                    </td>
                </tr>
               <tr>
                    <td>
                        <li><br />
                          ลงประกาศเช่าอุปกรณ์เครื่องเสียงของคุณ
                          <span></span><br />
                          เพิ่มรายได้เเละช่องทางการทำธรุกิจ<br />
                          <p class="price">&nbsp;</p>
                        </li>
                    </td>
                    <td>
                        <div class="image"> 
                        	<a href="formrent.php?UserName=<?php echo $Username; ?>">
                            <img src="css/images/forrent.png" alt="" /></a> 
                       </div>
                    </td>
                </tr>
                <tr>
                	<td>
                        <div class="image"> 
                        	<a href="category.php?UserName=<?php echo $Username; ?>">
                            <img src="css/images/buy.png" alt="" /></a> 
                       </div>
                    </td>
                    <td><li>
                      <p> เลือกซื้อเครื่องดนตรี
                        <br />
                          เลือกหาเครื่องดนตรีได้ตลอดเวลา<span></span><br />
                        </p>
                       	<p class="price">&nbsp;</p>
                      </li>
                    </td>
                </tr>
                <tr style="margin-top: 15%">
                    <td><li><br />
                      <p> เช่าเครื่องดนตรีเเละบริการอื่นๆ<br />
                      </p>
                       	<p class="price"><strong></strong></p>
                      </li>
                    </td>
                    <td>
                        <div class="image"> 
                        	<a href="pdguterent.php?UserName=<?php echo $Username; ?>"><img src="css/images/Rent.png" alt="" /></a> 
                       </div>
                    </td>
                </tr>
              </table>
          </form>
        </div>
        <!-- Brands --><!-- End Brands -->
        <!-- Footer -->
        <div id="footer">
          <div class="left"> <a href="#">Home</a> <span>|</span> <a href="#">Support</a> <span>|</span> <a href="#">My Account</a> <span>|</span> <a href="#">The Store</a> <span>|</span> <a href="#">Contact</a> </div>
          <div class="right"></div>
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
