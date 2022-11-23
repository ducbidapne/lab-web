<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
    Trang Quản trị
    <br>
<?php 
    if (isset($_SESSION['username']) && isset($_SESSION['password']))
        echo "Xin chào ".$_SESSION['username'];
    else
    {
        echo "<script language='javascript'>alert('Bạn chưa đăng nhập - Vui lòng đăng nhập lại!');";
        echo "location.href='dangnhap.php';</script>";
    }
?>
<br>
<a href="logout.php" >Thoát ra </a>
</body>
</html>
