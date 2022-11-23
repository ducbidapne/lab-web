<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="backend/css/bootstrap.min.css" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="backend/css/style.css" rel='stylesheet' type='text/css' />
    <link href="backend/css/style-responsive.css" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="backend/css/font.css" type="text/css"/>
    <link href="backend/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="backend/js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
    <div class="w3layouts-main">
        <h2>ĐĂNG NHẬP NGAY</h2>
        <?php
        $message = Session::get('message');
        if($message){
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);
        }
        ?>
        <form action="{{URL::to('/admin-dashboard')}}" method="post">
            {{ csrf_field() }}
            <input type="text" class="ggg" name="admin_email"
                   placeholder="nhập E-MAIL" required="">
            <input type="password" class="ggg" name="admin_password"
                   placeholder="nhập PASSWORD" required="">
            <span><input type="checkbox" />Nhớ đăng nhập</span>
            <h6><a href="#">Quên mật khẩu?</a></h6>
            <div class="clearfix"></div>
            <input type="submit" value="Đăng nhâp" name="login">
        </form>
        <p>Don't Have an Account ?<a href="registration.html">Create an account</a></p>
    </div>
</div>
<script src="backend/js/bootstrap.js"></script>
<script src="backend/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="backend/js/scripts.js"></script>
<script src="backend/js/jquery.slimscroll.js"></script>
<script src="backend/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="backend/js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="backend/js/jquery.scrollTo.js"></script>
</body>
</html>
