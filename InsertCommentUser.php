<?php
include("connect.php");
	$AR_nameHead = $_POST["AR_nameHead"];
	$AR_Date = $_POST["AR_Date"];
	$AR_datetimeuser = $_POST["AR_datetimeuser"];
	$AR_Namepd = $_POST["AR_Namepd"];
    $AR_UserName = $_POST["AR_UserName"];
	$AR_Datile = $_POST["AR_Datile"];

if(empty($AR_Datile)) {
    $message = "กรุณากรอกความคิดเห็น";
    echo (
    "<script LANGUAGE='JavaScript'>
        window.alert('$message');
    </script>"
    );
}else{
   
        $sql = "INSERT INTO commentuser (nameHead, name, Datile, datetime, datetimeuser, namepd) 
			VALUES ('$AR_nameHead', '$AR_UserName', '$AR_Datile', '$AR_Date', '$AR_datetimeuser', '$AR_Namepd')";

        $query = mysqli_query($conn, $sql);

        if($query){
            $message = "แสดงความคิดเห็นเสร็จสิ้น";
            echo (
            "<script LANGUAGE='JavaScript'>
                    window.alert('$message');
					window.location.reload(true);
                </script>"
            );
        }else{
            $message = "แสดงความคิดเห็นเสร็จสิ้นล้มเหลว";
            echo (
            "<script LANGUAGE='JavaScript'>
                    window.alert('$message');
					window.location.reload(true);
                </script>"
            );
        }
}

	mysqli_close($conn);
?>