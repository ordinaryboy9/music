<?php
include("connect.php");
	$UserName = $_GET["UserName"];
    $namepd = $_POST["namepd"];
	$price = $_POST["price"];
    $description = $_POST["description"];
    $tele = $_POST["tele"];
    $idline = $_POST["idline"];
	$xprovince = $_POST["provinces"];
	$provinceInt = $_POST["xprovince"];
	$xdistrict = $_POST["xdistrict"];
	$xsubdistrict = $_POST["xsubdistrict"];



	$target_dir = "uploads";
	$image =$target_dir.'/'.$_FILES["img"]["name"];
		$tmp_name = $_FILES["img"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["img"]["name"]);
        move_uploaded_file($tmp_name, "$target_dir/$name");
	 


    $Sql_Query = "select * from productrent where namepd = '$namepd'";

    $query = mysqli_query($conn, $Sql_Query);

    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);

    if($result){
         $message = "มีชื่อสินค้านี้อยู่ในระบบแล้ว";
        echo (
        "<script LANGUAGE='JavaScript'>
            window.alert('$message');
			window.location.href='formrent.php?UserName=$UserName';
        </script>"
        );
      

    }else {
       
		$sql = "INSERT INTO productrent (namepd, price, description, tele, idline, img, user, province, area, district, provinceInt)
			VALUES ('$namepd', '$price', '$description', '$tele', '$idline', '$image', '$UserName','$xprovince','$xdistrict','$xsubdistrict','$provinceInt')";

        $query = mysqli_query($conn, $sql);

        if($query){
            $message = "เพิ่มข้อมูลเสร็จสิ้น";
            echo (
            "<script LANGUAGE='JavaScript'>
                    window.alert('$message');
					window.location.href='pdguterent.php?UserName=$UserName';
                </script>"
            );
        }else{
            $message = "เพิ่มข้อมูลล้มเหลว";
            echo (
            "<script LANGUAGE='JavaScript'>
                    window.alert('$message');
					window.location.href='formrent.php?UserName=$UserName';
                </script>"
            );
        }
		 }
	
	mysqli_close($conn);
?>