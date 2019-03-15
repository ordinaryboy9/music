<?php
include('connect.php');

$UserName = $_GET["UserName"];
$TypeMusic = $_GET["TypeMusic"];

$ID = null;
if(isset($_GET["ID"])){
    $ID = $_GET["ID"];
}
$sql = "DELETE FROM productbay WHERE id = $ID";
$query = mysqli_query($conn, $sql);
if(mysqli_affected_rows($conn)){
    $message = "ลบสำเร็จ";
    echo (
    "<script LANGUAGE='JavaScript'>
        window.alert('$message');
        window.location.href='pdguterbay.php?UserName=$UserName&TypeMusic=$TypeMusic';
    </script>"
    );
}else{
    $message = "ลองใหม่อีกครั้ง";
    echo (
    "<script LANGUAGE='JavaScript'>
        window.alert('$message');
        window.location.href='Detailspd.php?UserName=$UserName&id=$ID';
    </script>"
    );
}
?>