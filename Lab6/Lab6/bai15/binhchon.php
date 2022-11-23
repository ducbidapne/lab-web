<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<p>BÌNH CHỌN</p>
<div id="binhchon">
<form id="form1" name="form1" method="get" action="xulybinhchon.php">
      Bạn nghĩ sao về chất lượng của trang web hocweb.com.vn
<p>
	<?php
	// require_once("connect.php");
    $hostname_config = 'localhost';
$database_config = 'webbinhchon';
$username_config = 'root';
$password_config ='';
$config = mysqli_connect($hostname_config, $username_config, $password_config,$database_config) or die("Khong the connect"); 
	$s="select * from phuongan where idBC=1 ";
	$kq=mysqli_query($config,$s);
	$i=0;
	while($row=mysqli_fetch_array($kq))
	{
?>
<label>
<input id="radio" type="radio" value="<?php echo $row['idPA'];?>" name="idPA" 
<?php if($i==0) {echo" checked='checked' "; $i++;} ?>/>
</label>
<?php echo $row['MoTa'];?><br /><?php }?></p>
<p>
<label>
<input id="button" type="submit" value="Xem kết quả" name="Submit" />
</label>
</p>
</form>
</div>

</body>
</html>
