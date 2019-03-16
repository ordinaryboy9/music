<?php
include('connect.php');

$UserName = $_GET["UserName"];

$ID = null;
if(isset($_GET["ID"])){
    $ID = $_GET["ID"];
}

$TypeMusic = null;
if(isset($_GET["TypeMusic"])){
    $TypeMusic = $_GET["TypeMusic"];
}

$sql = "DELETE FROM productbay WHERE id = $ID";
$query = mysqli_query($conn, $sql);
if(mysqli_affected_rows($conn)){
    $message = "ลบสำเร็จ";
	if($TypeMusic === null){
		
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
			window.location.href='pdguterbay.php?UserName=$UserName&TypeMusic=$TypeMusic';
		</script>"
		);
	}
}else{
    $message = "ลองใหม่อีกครั้ง";
 
	if($TypeMusic === null){
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
			window.location.href='Detailspd.php?UserName=$UserName&id=$ID';
		</script>"
		); 
	}
}
?>