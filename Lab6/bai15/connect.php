<?php
$hostname_config = 'localhost';
$database_config = 'webbinhchon';
$username_config = 'root';
$password_config ='';
$config = mysqli_connect($hostname_config, $username_config, $password_config,$database_config) or die("Khong the connect"); 
// mysqli_select_db($database_config,$config);
mysql_query($config,'utf8');
?>
