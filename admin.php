<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
session_start();   
// This project is made by sumit suthar 9929496321
 require("dbconnect.php")?>
 

<title>Administration</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
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
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="register_form">
            <div class="form_row">
			<form method="POST" action="admin.php">
              <label class="register"><strong>Admin:</strong></label>
              <input type="text" name="admin_name" required class="register_input" />
            </div>
            <div class="form_row">
              <label class="register"><strong>Password:</strong></label>
              <input type="password" name="password" required class="register_input" />
            </div>
            <div class="form_row"> 
			<button id="submit" type="submit" value="login">Login</button>
		  </div>
		  </form>
		        </div>
		</div>
        <div class="bottom_prod_box_big"></div>
      </div>
    </div>
    <!-- end of center content -->
  </div>
  <?php 
  
 require("dbconnect.php");
if (isset($_POST['admin_name']) and isset($_POST['password']))
{
$admin_name = $_POST['admin_name'];
$password = $_POST['password'];
$query = "SELECT * FROM admin WHERE admin_name='$admin_name' and password='$password'";
$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 1)
{	$_SESSION['admin']=$admin_name;
	header('Location:adminmenu.php');
}
else
{
	header('Location:error.php');
}
}

?>
  <!-- end of main content -->
  <div class="footer">
   </div>
<!-- end of main_container -->
</body>
</html>
  
