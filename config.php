<?php
date_default_timezone_set( "Asia/Kolkata" );  
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "password" );
$server_name="localhost";
$db_user_name="root";
$db_password="";
$conn=mysqli_connect($server_name,$db_user_name,$db_password);
if(!$conn)
	die("connection failed".mysqli_connect_error());
$db_select=mysqli_select_db($conn,'cms');
if(!$db_select)
	die("databse not found".mysql_error());
?>
