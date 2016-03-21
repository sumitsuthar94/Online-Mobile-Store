<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
session_start();
 require("dbconnect.php");
 if(!isset($_SESSION['admin']))
 {
	 header('Location:admin.php');
 }
 // This project is made by sumit suthar 9929496321
 ?>
  
<title>Admin menu</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="main_container">
  
  <div id="header">
    <div class="oferte_content">
      <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
    </div>
  </div>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
       <ul class="menu">
        <li><a href="index.php" class="nav1"> Home</a></li>
        <li class="divider"></li>
	   <li><a href="login.php" class="nav2">Login</a></li>
        <li class="divider"></li>
        <li><a href="signup.php" class="nav2">Sign Up</a></li>
		<li class="divider"></li>
        <li><a href="viewcart.php" class="nav3">View cart</a></li>
        <li class="divider"></li>
        <li><a href="logout.php" class="nav4">Logout</a></li>
		<li class="divider"></li>
      </ul>
      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
	
<div class="sumit_suthar">
<div class="center_title_bar">Administration</div>
</br>
</br>
</br>
</br>
<font size="3 px">
      <p align="center-left" style='margin-left:30px;'><a href="add_update.php"><b>Add product</b></a><p>
	   <p align="center-left"style='margin-left:30px;'><a href="delete.php"><b>Delete product</b></a><p>
	   <p align="center-left"style='margin-left:30px;'><a href="add_update.php"><b>Update product</b></a><p>
	   <p align="center-left"style='margin-left:30px;'><a href="changepassword.php"><b>Change Password</b></a><p>
	 </font> 

		 </body>
		 </html>