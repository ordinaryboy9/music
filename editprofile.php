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
</style>

</head>
<body>
<!-- Top -->
<div id="top">
  <div class="shell">
    <!-- Header -->
    <div id="header">
    <a href="index.php" class="logo pull-left">
    	<img src="css/images/logo.jpg" class="site_logoo" alt="" />
    </a>  
    </div>
  <div id="container">
        <div class="tabbed" align="center" style="margin-left: 12%">
          <div class="tabbed">
          <!-- First Tab Content -->
          <div class="tab-content" style="display:block;">
            <h1><center>  แก้ไขข้อมูลส่วนตัว </center></h1><p>&nbsp;</p>
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
		  <div class=".row">
        	<em>
        	<input type="submit"   value="ยกเลิก"  style="margin-right:5%; margin-left:15%; width:12% ; height:5%" onClick="return CheckValidity();"/>
        	<input type="submit" name="submit" id="submit"  value="ยืนยัน" style="margin-right:30%; margin-left:2%; width:12% ; height:5%" onClick="return CheckValidity();"/>
          </form>
          </div>

          
        </div>
        <!-- Brands --><!-- End Brands -->
        <!-- Footer -->
        <div id="footer">
          <div class="left"></div>
        </div>
        <!-- End Footer -->
      </div>
  </div>
</div>
<!-- Top -->
<!-- Main -->

<!-- End Main -->
</body>
</html>