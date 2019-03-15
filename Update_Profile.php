<?php
include("connect.php");
	$Username = $_POST["username"];
	$Userid = $_POST["userid"];
	$old_username = $_POST["old_username"];
    $Email = $_POST["email"];
	$Password = $_POST["password"];
    $Re_Password = $_POST["repassword"];
    $First_name = $_POST["name"];
    $identily = $_POST["identily"];
    $Telephone = $_POST["tel"];

if(empty($Username) ||
    empty($Password) ||
	empty($Re_Password) ||
    empty($Email) ||
    empty($First_name) ||
    empty($identily) ||
    empty($Telephone)) {
    $message = "กรุณากรอกข้อมูลให้ครบ";
    echo (
    "<script LANGUAGE='JavaScript'>
		window.alert('$message');
	</script>"
    );
}elseif(strlen($Password) < 5 || strlen($Re_Password) < 5){
    $message = "รหัสผ่านต้องมีอย่างน้อย 6 ตัว";
    echo (
    "<script LANGUAGE='JavaScript'>
		window.alert('$message');
	</script>"
    );
}elseif($Password !== $Re_Password){
    $message = "รหัสผ่านไม่ตรงกัน";
    echo (
    "<script LANGUAGE='JavaScript'>
        window.alert('$message');
    </script>"
    );
}elseif(strlen($Username) < 3){
    $message = "ชื่อผู้ใช้ต้องมีอย่างน้อย 4 ตัวขึ้นไป";
    echo (
    "<script LANGUAGE='JavaScript'>
		window.alert('$message');
	</script>"
    );
}elseif(strlen($Telephone) > 10){
    $message = "เบอร์โทรศัพท์ต้องมีไม่เกิน 10 ตัว";
    echo (
    "<script LANGUAGE='JavaScript'>
		window.alert('$message');
	</script>"
    );
}elseif(strlen($identily) !== 13){
    $message = "เลขบัตรประชนต้องมี 13 หลัก";
    echo (
    "<script LANGUAGE='JavaScript'>
		window.alert('$message');
	</script>"
    );
}else{
    $Sql_Query = "select * from user where user = '$Username'";

    $query = mysqli_query($conn, $Sql_Query);

    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);

    if($result){
		if($result["user"] === $old_username){
			  $sql = "UPDATE user SET 
                user = '$Username',
                pass = '$Password',
                name = '$First_name',
                email = '$Email',
                tel = '$Telephone',
                idcard = '$identily'
                
                WHERE userid = $Userid ";

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
			
            $message = "ชื่อผู้ใช้นี้ถูกใช้ไปแล้ว";
            echo (
            "<script LANGUAGE='JavaScript'>
                    window.alert('$message');
                </script>"
            );
		}
    }else {
            $sql = "UPDATE user SET 
                user = '$Username',
                pass = '$Password',
                name = '$First_name',
                email = '$Email',
                tel = '$Telephone',
                idcard = '$identily'
                
                WHERE userid = $Userid ";

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