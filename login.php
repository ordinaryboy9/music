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
<!-- Top -->
<div id="top">
  <div class="shell">
    <!-- Header -->
    <div id="header">
    <a href="index.php" class="logo pull-left">
    	<img src="css/images/logo.jpg" class="site_logoo" alt="" />
    </a>
      <div id="navigation">
        <ul>
          <li>  <a href="formrg.php">สมัครสมาชิก</a></li>
          <li><a href="login.php">เข้าสู่ระบบ</a></li>
        </ul>
      </div>
    </div>
  <div id="container">
        <div class="tabbed" align="center" style="margin-left: 12%">
          <form id="form1" name="form1" method="post" action="Check_login.php" enctype="multipart/form-data">
          <div class="tab-content" style="display:block;">
            <h1><center>
            เข้าสู่ระบบ
            <center>
            	<img src="css/images/login.jpg" width="100" height="100" style="margin-top:5%">
            </center>
            <table width="68%" border="0" style="font-size:18px; margin-top:30px" > 
              <tr>
                <td height="35" align="right"><b style="margin-right: 10px">USERMANE </b></td>
                <td><input type="text" name="username" style="height: 20px; width: 200px" /></td>
              </tr>
              <tr>
                <td height="35" align="right"><b style="margin-right: 10px"> PASSWORD </b></td>
                <td><input type="password" name="password" style="height: 20px; width: 200px" /></td>
              </tr>  
               <em> 
            </table>
            <button name="submit" type="submit" style="padding: 1% 1% 1% 1%; margin-top: 2%"> <font style="font-size:18px;"> เข้าสู่ระบบ </font></button>
           
            </center></h1>
        <p><center></center></p>
          </form>
        <div style="margin-top: 3%;"> 
            <font style="font-size:14px;">คุณมีบัญชีหรือยัง <a href="formrg.php"> <b> สมัครสมาชิก</b> </a></font>
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
