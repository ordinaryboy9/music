<?php
include("connect.php");
	$typemusic = $_POST["typemusic"];
    $namepd = $_POST["namepd"];
	$pricepd = $_POST["pricepd"];
    $detailpd = $_POST["detailpd"];
    $telpd = $_POST["telpd"];
    $linepd = $_POST["linepd"];


	$target_dir = "uploads";
	$image =$target_dir.'/'.$_FILES["imgpd"]["name"];
		$tmp_name = $_FILES["imgpd"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["imgpd"]["name"]);
        move_uploaded_file($tmp_name, "$target_dir/$name");
	 

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
}elseif($_FILES["imgpd"]["name"] == ''){
    $message = "กรุณาเลือกรูปภาพ";
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
         $message = "มีชื่อสินค้านี้อยู่ในระบบแล้ว";
        echo (
        "<script LANGUAGE='JavaScript'>
            window.alert('$message');
        </script>"
        );
      

    }else {
       
		$sql = "INSERT INTO productbay (typemusic, namepd, price, description, tele, idline, img) 
			VALUES ('$typemusic', '$namepd', '$pricepd', '$detailpd', '$telpd', '$linepd', '$image')";

        $query = mysqli_query($conn, $sql);

        if($query){
            $message = "เพิ่มข้อมูลเสร็จสิ้น";
            echo (
            "<script LANGUAGE='JavaScript'>
                    window.alert('$message');
                </script>"
            );
        }else{
            $message = "เพิ่มข้อมูลล้มเหลว";
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