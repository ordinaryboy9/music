<?php
include("connect.php");
	$UserName = $_GET["UserName"];
	$id = $_POST["id"];
	$user = $_POST["user"];
	$typemusic = $_POST["typemusic"];
    $namepd = $_POST["namepd"];
	$pricepd = $_POST["pricepd"];
    $detailpd = $_POST["detailpd"];
    $telpd = $_POST["telpd"];
    $linepd = $_POST["linepd"];
	$xprovince = $_POST["provinces"];
	$provinceInt = $_POST["xprovince"];
	$xdistrict = $_POST["xdistrict"];
	$xsubdistrict = $_POST["xsubdistrict"];
	$old_imgpd = $_POST["old_imgpd"];
	$old_namepd = $_POST["old_namepd"];

	$target_dir = "uploads";
	$image;
    if ($_FILES["imgpd"]["name"] !== ""){
	$image =$target_dir.'/'.$_FILES["imgpd"]["name"];
		$tmp_name = $_FILES["imgpd"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["imgpd"]["name"]);
        move_uploaded_file($tmp_name, "$target_dir/$name");
	  }else{
        $image = $old_imgpd;
    }

if(empty($namepd) ||
    empty($pricepd) ||
    empty($detailpd) ||
    empty($telpd) ||
    empty($linepd)) {
    $message = "กรุณากรอกข้อมูลให้ครบ";
    echo (
    "<script LANGUAGE='JavaScript'>
        window.alert('$message');
    </script>"
    );
}else{
    $Sql_Query = "select * from productbay where namepd = '$namepd'";

    $query = mysqli_query($conn, $Sql_Query);

    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);

    if($result){
		if($result["namepd"] === $old_namepd){
			  $sql = "UPDATE productbay SET 
                typemusic = '$typemusic',
                namepd = '$namepd',
                price = '$pricepd',
                description = '$detailpd',
                tele = '$telpd',
                idline = '$linepd',
				img = '$image',
                user = '$user',
                province = '$xprovince',
                area = '$xdistrict',
                district = '$xsubdistrict',
				provinceInt = '$provinceInt'
                
                WHERE id = $id ";

            $query = mysqli_query($conn, $sql);

            if($query){
                $message = "เปลี่ยนแปลงเสร็จสิ้้น";
                echo (
                "<script LANGUAGE='JavaScript'>
                    window.alert('$message');
                </script>"
                );
            }else{
                $message = "เปลี่ยนแปลงใหม่อีกครั้ง";
                echo (
                "<script LANGUAGE='JavaScript'>
                    window.alert('$message');
                </script>"
                );
            }
		}else{
         $message = "มีชื่อสินค้านี้อยู่ในระบบแล้ว";
        echo (
        "<script LANGUAGE='JavaScript'>
            window.alert('$message');
        </script>"
        );
      
    }

    }else {
       
		 $sql = "UPDATE productbay SET 
                typemusic = '$typemusic',
                namepd = '$namepd',
                price = '$pricepd',
                description = '$detailpd',
                tele = '$telpd',
                idline = '$linepd',
				img = '$image',
                user = '$user',
                province = '$xprovince',
                area = '$xdistrict',
                district = '$xsubdistrict',
				provinceInt = '$provinceInt'
                
                WHERE id = $id ";

            $query = mysqli_query($conn, $sql);

            if($query){
                $message = "เปลี่ยนแปลงเสร็จสิ้้น";
                echo (
                "<script LANGUAGE='JavaScript'>
                    window.alert('$message');
                </script>"
                );
            }else{
                $message = "เปลี่ยนแปลงใหม่อีกครั้ง";
                echo (
                "<script LANGUAGE='JavaScript'>
                    window.alert('$message');
                </script>"
                );
            }
		}
    }
	
	mysqli_close($conn);
?>