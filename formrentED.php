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
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<script src="js/jquery.thprovinceset.1.0.js"></script>
 

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
 include("connect.php");
	$Username = "";

	if(isset($_GET["UserName"])){
		$Username = $_GET["UserName"];
	}
	$ID = $_GET['ID'];
	
	$sql = "SELECT * FROM productrent WHERE id = '$ID'";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>
<!-- Top -->
<div id="top">
  <div class="shell">
    <!-- Header -->
    <div id="header">
    <a href="index.php?UserName=<?php echo $Username; ?>" class="logo pull-left">
    	<img src="css/images/logo.jpg" class="site_logoo" alt="" />
    </a>
   
	<?php if($Username === ''):header("location:login.php?");?>
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
  <a href="editprofile.php?UserName=<?php echo $Username; ?>">แก้ไขขอมูลส่วนตัว</a>          </div>
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
          <form id="form1" name="form1" method="post" action="Update_Rent.php?UserName=<?php echo $Username; ?>" enctype="multipart/form-data" target="iframe_target"> 
          <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
          <div class="tab-content" style="display:block;">
            <h1><center>
            แก้ไขสินค้าสินค้า
                <table width="68%" border="0" style="font-size:18px; margin-top:30px" >
             
              <tr>
                <td height="35" align="right"><b style="margin-right: 10px"> ชื่อสินค้าที่คุณต้องการลงเช่า </b></td>
                <td><input type="text" name="namepd"  style="height: 20px; width: 200px" value="<?php echo $result["namepd"]; ?>" readonly /></td>
                <input name="old_namepd" type="hidden" id="old_namepd" value="<?php echo $result["namepd"]; ?>" />
                 <input name="id" type="hidden" id="id" value="<?php echo $result["id"]; ?>" />
                <input name="user" type="hidden" id="user" value="<?php echo $result["user"]; ?>" />
              </tr>
              <tr>
                <td height="35" align="right"><b style="margin-right: 10px"> ระบุราคาค้าบริการต่อวัน </b></td>
                <td><input type="text" name="price"  style="height: 20px; width: 200px" value="<?php echo $result["price"]; ?>"/></td>
              </tr>
              
              <tr>
                <td height="35" align="right"><b style="margin-right: 10px"> รูปภาพ </b></td>
                <td><input type="file" name="img" style="font-size:18px;" value="<?php echo $result["img"]; ?>"/></td>
                <input name="old_imgpd" type="hidden" id="old_imgpd" value="<?php echo $result["img"]; ?>" />
              </tr> 
              <tr>
                  <td height="35" align="right"><p style="margin-right: 10px">จังหวัด</p></td>
                  <td><select id="xprovince" name="xprovince" style="height: 20px; width: 200px" value="<?php echo $result["provinceInt"]; ?>"></select>
                  <input type="hidden" id="provinces" name="provinces" value="<?php echo $result["province"]; ?>"></td>
                 
              </tr>
              <tr>
              		<td height="35" align="right"><p style="margin-right: 10px">เขต/อำเภอ</p></td>
                  <td><select id="xdistrict" name="xdistrict" style="height: 20px; width: 200px" value="<?php echo $result["area"]; ?>"></select></td>
                  
              </tr>
              <tr>
              	<td height="35" align="right"><p style="margin-right: 10px">แขวง/ตำบล</p></td>
                  <td><select id="xsubdistrict" name="xsubdistrict" style="height: 20px; width: 200px" value="<?php echo $result["district"]; ?>"></select></td>
                  
              </tr>
              <tr>
                <td height="35" align="right"><b style="margin-right: 10px"> รายละเอียดสินค้า </b></td>
                <td>
                <textarea name="description" cols="40" rows="6" ><?php echo $result["description"]; ?></textarea>
                </td>
              </tr>
               <tr>
                <td height="35" align="right"><b style="margin-right: 10px"> เบอร์โทรติดต่อ </b></td>
                <td><input type="text" name="tele"  style="height: 20px; width: 200px" value="<?php echo $result["tele"]; ?>"/></td>
              </tr>
               <tr>
                <td height="35" align="right"><b style="margin-right: 10px"> LineID </b></td>
                <td><input type="text" name="idline" style="height: 20px; width: 200px" value="<?php echo $result["idline"]; ?>"/></td>
              </tr>
           
               <em> 
            </table>
            <input type="submit" value="บันทึกการเปลี่ยนแปลง"  style="height:30px;" width="80px"/>
           
            </center></h1>
        <p><center></center></p>
          </form>
        </div>
        <!-- Brands --><!-- End Brands -->
        <!-- Footer -->
        <div id="footer">
          <div class="left"><a href="#">t</a> </div>
        </div>
        <!-- End Footer -->
      </div>
      <!-- End Container -->
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Main -->
<script>
$(function(){
 
	$.thprovinceset({
		eProvinceID: "#xprovince",
		eDistrictID: "#xdistrict",
		eSubDistrictID: "#xsubdistrict",
		SelectProvince : "<?php echo $result["provinceInt"]; ?>", /*10 = กรุงเทพฯ*/
		SelectDistrict: "<?php echo $result["area"]; ?>",
		SelectSubDistrict: "<?php echo $result["district"]; ?>"

	});
el = document.getElementById('xprovince')
selectedText = el.options[el.selectedIndex].text
document.getElementById('provinces').value = selectedText ;
});
    $('#xprovince').on('change', function() {
        el = document.getElementById('xprovince')
        selectedText = el.options[el.selectedIndex].text
        document.getElementById('provinces').value = selectedText ;
    });
 </script>
</body>
</html>
