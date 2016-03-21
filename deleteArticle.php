<?php include "templates/include/header.php";
require('config.php');
session_start();
if(!isset($_GET['id']) && !isset($_SESSION['username']))
	header('Location:admin.php');
$query="delete from articles where id=$_GET[id]";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
header('Location:admin.php?status="Article deleted"')
 ?>