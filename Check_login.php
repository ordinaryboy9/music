<?php
    include('connect.php');
    if(empty($_SESSION)) // if the session not yet started
    session_start();

    $txtUsername = $_POST["username"];
    $txtPassword = $_POST["password"];

    $_SESSION['username'] = $txtUsername;  // if already login

    if(empty($txtUsername) || empty($txtPassword)){
        $message = "กรุณากรอกข้อมูลให้ครบ";
        echo (
        "<script LANGUAGE='JavaScript'>
            window.alert('$message');
            window.location.href='login.php';
        </script>"
        );
    }else{
		$Sql_Query = "select * from user where user = '$txtUsername' and pass = '$txtPassword' ";
		$query = mysqli_query($conn, $Sql_Query);
		$result = mysqli_fetch_array($query, MYSQLI_ASSOC);

        if (!$result){
            $message = "ชื่อผู้ใช้งาน หรือ รหัสผ่าน ไม่ถูกต้อง!";
            echo (
            "<script LANGUAGE='JavaScript'>
                window.alert('$message');
                window.location.href='login.php';
            </script>"
            );
        }else{
            header("location:index.php?UserName=$txtUsername");
        }	
	}
    mysqli_close($conn);

?>