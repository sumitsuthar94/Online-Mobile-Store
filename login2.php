<?php 
session_start();
 require("dbconnect.php");
if (isset($_POST['username']) and isset($_POST['password']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
while($row=mysql_fetch_array($result))
{
$expire=time()+60*60*24*30;
setcookie('$username',$row['username'],$expire);
}
if(isset($_COOKIE['username']))
{
$username=$_COOKIE['username'];
}
if ($count == 1)
{	
	$_SESSION['login_user'] = $username;
}
else
{
	header('location:error.php');
}
}
if (isset($_SESSION['login_user']))
{
 header('Location:index.php');
}
// This project is made by sumit suthar 9929496321
?>