<?php
include("connect.php");
	$Username = $_POST["username"];
    $Email = $_POST["email"];
	$Password = $_POST["password"];
    $Re_Password = $_POST["repassword"];
    $First_name = $_POST["name"];
    $identily = $_POST["identily"];
    $Telephone = $_POST["tel"];

if(empty($Username) ||
    empty($Password) ||
    empty($Email) ||
    empty($First_name) ||
    empty($identily) ||
    empty($Telephone)) {
    $message = "กรุณากรอกข้อมูลให้ครบ";
    echo (
    "<script LANGUAGE='JavaScript'>
            window.alert('$message');
			window.location.href='formrg.php';
        </script>"
    );
}elseif(strlen($Password) < 5 || strlen($Re_Password) < 5){
    $message = "รหัสผ่านต้องมีอย่างน้อย 6 ตัว";
    echo (
    "<script LANGUAGE='JavaScript'>
            window.alert('$message');
			window.location.href='formrg.php';
        </script>"
    );
}elseif($Password !== $Re_Password){
    $message = "รหัสผ่านไม่ตรงกัน";
    echo (
    "<script LANGUAGE='JavaScript'>
        window.alert('$message');
		window.location.href='formrg.php';
    </script>"
    );
}elseif(strlen($Username) < 3){
    $message = "ชื่อผู้ใช้ต้องมีอย่างน้อย 4 ตัวขึ้นไป";
    echo (
    "<script LANGUAGE='JavaScript'>
            window.alert('$message');
			window.location.href='formrg.php';
        </script>"
    );
}elseif(strlen($Telephone) > 10){
    $message = "เบอร์โทรศัพท์ต้องมีไม่เกิน 10 ตัว";
    echo (
    "<script LANGUAGE='JavaScript'>
            window.alert('$message');
			window.location.href='formrg.php';
        </script>"
    );
}elseif(strlen($identily) !== 13){
    $message = "เลขบัตรประชนต้องครบ 13 หลัก";
    echo (
    "<script LANGUAGE='JavaScript'>
            window.alert('$message');
			window.location.href='formrg.php';
        </script>"
    );
}else{
    $Sql_Query = "select * from user where user = '$Username'";

    $query = mysqli_query($conn, $Sql_Query);

    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);

    if($result){
            $message = "ชื่อผู้ใช้นี้ถูกใช้ไปแล้ว";
            echo (
            "<script LANGUAGE='JavaScript'>
                    window.alert('$message');
					window.location.href='formrg.php';
                </script>"
            );
    }else {
            $sql = "INSERT INTO user (user, email, pass, name, tel, idcard) 
			VALUES ('$Username', '$Email', '$Password', '$First_name', '$Telephone','$identily')";

            $query = mysqli_query($conn, $sql);

            if($query){
                $message = "ลงทะเบียนเสร็จสิ้น";
                echo (
                "<script LANGUAGE='JavaScript'>
                    window.alert('$message');
                    window.location.href='login.php';
                </script>"
                );
            }else{
                $message = "ลงทะเบียนใหม่อีกครั้ง";
                echo (
                "<script LANGUAGE='JavaScript'>
                    window.alert('$message');
					window.location.href='formrg.php';
                </script>"
                );
            }
        }
    }
	
	mysqli_close($conn);
?>