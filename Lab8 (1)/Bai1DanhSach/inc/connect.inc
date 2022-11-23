<?php
$server = "localhost";
$dbname = "udn";
$username = "root";
$password = "";
$conn = mysqli_connect($server, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");