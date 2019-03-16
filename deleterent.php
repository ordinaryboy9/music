<?php
include('connect.php');

$UserName = $_GET["UserName"];

$ID = null;
if(isset($_GET["ID"])){
    $ID = $_GET["ID"];
}

$admin = null;
if(isset($_GET["admin"])){
    $admin = $_GET["admin"];
}

$sql = "DELETE FROM productrent WHERE id = $ID";
$query = mysqli_query($conn, $sql);
if(mysqli_affected_rows($conn)){
    $message = "ลบสำเร็จ";
	if($admin === 'admin'){
		 echo (
		"<script LANGUAGE='JavaScript'>
			window.alert('$message');
			window.location.href='Admindetel.php?UserName=$UserName';
		</script>"
		);
		
	}else{
		
		echo (
		"<script LANGUAGE='JavaScript'>
			window.alert('$message');
			window.location.href='pdguterent.php?UserName=$UserName';
		</script>"
		);
	}
}else{
    $message = "ลองใหม่อีกครั้ง";
	if($admin === 'admin'){

	 echo (
		"<script LANGUAGE='JavaScript'>
			window.alert('$message');
			window.location.href='Admindetel.php?UserName=$UserName';
		</script>"
		);
	}else{
	echo (
	"<script LANGUAGE='JavaScript'>
		window.alert('$message');
		window.location.href='Detailsrent.php?UserName=$UserName&id=$ID';
	</script>"
	);
	
	}
}
?>