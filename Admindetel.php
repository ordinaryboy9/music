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
<?php
include('connect.php');
 $user = null;

	if(isset($_GET["user"])){
		$user = $_GET["user"];
	}
	if($user !== null){
			$Sql_Query = "select * from productbay where user = '$user'";
			$query = mysqli_query($conn, $Sql_Query);
			
			$Sql_Queryrent = "select * from productrent where user = '$user'";
			$queryrent = mysqli_query($conn, $Sql_Queryrent);
	}else{
			$Sql_Query = "select * from productbay";
			$query = mysqli_query($conn, $Sql_Query);
			
			$Sql_Queryrent = "select * from productrent";
			$queryrent = mysqli_query($conn, $Sql_Queryrent);
			
	}
?>
<!-- Top -->
<!-- Main -->
<div id="main">
  <div class="shell">
   <!-- Search, etc -->
    <div class="options">
      
      <div class="right"></div>
    </div>
    </div>
    </div>
    <!-- End Search, etc -->
    <!-- Content -->
    <div id="content"><!-- Tabs --><!-- Tabs -->
      <!-- Container -->
      <div id="container"><!-- Brands --><!-- End Brands -->
      <div align="center" style="font-size:18px ; color:#000 ; margin-top:1%">
      <p>ข้อมูลการลงขายสินค้า</p>
      </div>
        <center><!-- Footer -->
        <table width="800" border="1" height="60" style="margin-top:15px; font-size:20px">
  <tr align="center" bgcolor="#999999" style="color:#FF0">  
    <td>ชื่อสินค้า</td>
    <td>ราคาสินค้า</td>
    <td>รูป</td>
    <td>รายละอียด</td>
    <td>เบอร์โทร</td>
    <td>ไลน์</td>
    <td>ผู้เพิ่ม</td>
    <td>แก้ไข</td>
    <td>ลบ</td> 
  </tr>
   <?php
		
	while($result = mysqli_fetch_array($query, MYSQLI_ASSOC))
	{
    ?>
    <tr align="center">
    <td><?php echo ($result["namepd"]);?></td>
    <td><?php echo ($result["price"]);?></td>
    <td align="center" style="width: 10%"><img src="<?php echo ($result["img"]) ?>" width="70" height="70" ></td>
       <td align="center"><textarea rows="4" style="margin-top: 2%; width: 90%" readonly="readonly"><?php echo ($result["description"]) ?></textarea></td>
    <td><?php echo ($result["tele"]);?></td>
    <td><?php echo ($result["idline"]);?></td>
    <td><?php echo ($result["user"]);?></td>
    <td align="center">
        <a href="formbayedit.php?ID=<?php echo ($result["id"]);?>&UserName=<?php echo $Username; ?>"> แก้ไข </a>
    </td>
    <td align="center">
        <a href="JavaScript:if(confirm('ต้องการลบสิ้นค้านี้ใช่ไหม?')==true){window.location='deletepd.php?ID=<?php echo ($result["id"]);?>&UserName=<?php echo $Username; ?>';}"> ลบ </a>
    </td>
    
 </tr>
 <?php
	}
?>
</table>
</center>

<div id="container"><!-- Brands --><!-- End Brands -->
      <div align="center" style="font-size:18px ; color:#000 ; margin-top:1%">
      <p>ข้อมูลการลงเช่าสินค้า</p>
      </div>
        <center><!-- Footer -->
        <table width="800" border="1" height="60" style="margin-top:15px; font-size:20px">
  <tr align="center" bgcolor="#999999" style="color:#FF0">  
    <td>ชื่อสินค้า</td>
    <td>ราคาสินค้า</td>
    <td>รูป</td>
    <td>รายละอียด</td>
    <td>เบอร์โทร</td>
    <td>ไลน์</td>
    <td>ผู้เพิ่ม</td>
    <td>แก้ไข</td>
    <td>ลบ</td> 
  </tr>
   <?php
		$admin ='admin';
	while($resultrent = mysqli_fetch_array($queryrent, MYSQLI_ASSOC))
	{
    ?>
    <tr align="center">
   <td><?php echo ($resultrent["namepd"]);?></td>
    <td><?php echo ($resultrent["price"]);?></td>
    <td align="center" style="width: 10%"><img src="<?php echo ($resultrent["img"]) ?>" width="70" height="70" ></td>
       <td align="center"><textarea rows="4" style="margin-top: 2%; width: 90%" readonly="readonly"><?php echo ($resultrent["description"]) ?></textarea></td>
    <td><?php echo ($resultrent["tele"]);?></td>
    <td><?php echo ($resultrent["idline"]);?></td>
    <td><?php echo ($resultrent["user"]);?></td>
    <td align="center">
        <a href="formrentED.php?UserName=<?php echo $Username; ?>&ID=<?php echo ($resultrent["id"]);?>"> แก้ไข </a>
    </td>
    <td align="center">
        <a href="JavaScript:if(confirm('ต้องการลบสิ้นค้านี้ใช่ไหม?')==true){window.location='deleterent.php?ID=<?php echo ($resultrent["id"]);?>&UserName=<?php echo $Username; ?>&admin=<?php echo $admin; ?>';}"> ลบ </a>
    </td>
    
  </tr>
  <?php
	}
?>
</table>
</center>
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
