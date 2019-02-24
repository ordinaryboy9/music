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
#d { float:right; white-space:nowrap;size: }
#d ul{ list-style-type: none; padding-top:50px;}
#d ul li{ float:left; display:inline; padding-right:8px; margin-right:8px;}
#d ul li.last{ border-right:0; padding-right:0; margin-right:0;}
#d ul li a{ color:#000;}
#d ul li a:hover,
#d ul li a.active { color:#00FF99; }

.row{
display:-webkit-box;
display:-ms-flexbox;
display:flex;
-ms-flex-wrap:wrap;
flex-wrap:wrap;
margin-right:-10px;
margin-left:-10px
}
.card{
 	box-shadow:0 7px 7px 0 rgba(0,0,0,0.6);
    transition:0.4s;
    width:280px;
	height:300px;
    backgroound:#fff;
    text-align:center;
    font-site:16px;
    font-family:sans-serif;
    margin:10px	
}
.card1{
 	box-shadow:0 3px 3px 0 rgba(0,0,0,0.6);
    transition:0.4s;
    width:350px;
	height:350px;
    background-color:#FF9;
    text-align:center;
    font-site:16px;
    font-family:sans-serif;
    margin:10px	
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
	 include("connect.php");
        $ID = null;
        if(isset($_GET["id"])){
            $ID = $_GET["id"];
        }

        $sql = "SELECT * FROM productbay WHERE id = '".$ID."'";
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
   
	<?php if($Username === ''):header("location:login.php?"); ?>
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
            <a href="logout.php?UserName=<?php echo $Username; ?>">แก้ไขขอมูลส่วนตัว</a>
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

      <div id="container">
       
        <div class="tabbed" align="center" >
        
            
              <div style="width:1300px; height:400px; background-color:#666; padding-top: 6%;" align="center">
                <img src="<?php echo ($result["img"]);?>" alt="messi" style="width:30%;height:300px;"  />
                
              </div>
           	<div class="row"> 
            <div align="left">
            <div class="card1">
             
             <div style="width: 200px; margin-left: 1px;p padding-top: 9%; ">	
             <div id="d" style="font-size:18px">
                 	
                    <div class="row">
                	 <img src="css/images/user2.png"  style="width:50px; height:60px; padding-top: 9%"/>
                 		<ul>
                 		<li> <a style="margin-left:5px"><?php echo ($result["user"]);?></a> </li>
                   		</ul>
                     </div>
                     <div class="row">
                	 <img src="css/images/monny-png.png"  style="width:50px; height:70px; padding-top: 10%"/>
                 		<ul>
                 		<li> <a style="margin-left:5px"><?php echo ($result["price"]);?></a> </li>
                   		</ul>
                     </div>	
                 	<div class="row">
                	 <img src="css/images/tall.png"  style="width:50px; height:60px; padding-top: 10%"/>
                 		<ul>
                 		<li> <a style="margin-left:5px"><?php echo ($result["tele"]);?></a> </li>
                   		</ul>
                     </div>	
                   	<div class="row">
                	 <img src="css/images/line-png.png"  style="width:60px; height:80px; padding-top: 10%"/>
                 		<ul>
                 		<li> <a style="margin-left:5px"><?php echo ($result["idline"]);?></a> </li>
                   		</ul>
                     </div>
                   
                    </div>
     			 </div>
          </div> 
        </div>
        <div style="margin-left:40px;padding-top: 2%;">
        <td>
                <textarea name="detailpd" cols="100" rows="30"><?php echo ($result["description"]);?></textarea>
                </td>
        </div>
        </div>
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