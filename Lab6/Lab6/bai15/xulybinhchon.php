<?php ob_start();
// require_once("connect.php");
$idPA=$_GET["idPA"];
$qr1="update binhchon set SoLanChon = SoLanChon+1 where idBC=1";
$qr="update phuongan set SoLanChon = SoLanChon+1 where idBC=1 and idPA=$idPA";
$hostname_config = 'localhost';
$database_config = 'webbinhchon';
$username_config = 'root';
$password_config ='';
$config = mysqli_connect($hostname_config, $username_config, $password_config,$database_config) or die("Khong the connect"); 

if(mysqli_query($config,$qr1) && mysqli_query($config,$qr))
header('location:ketquabinhchon.php');
else echo "That bai!";
?>
