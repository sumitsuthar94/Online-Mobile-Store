
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
session_start();   

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
			<form method="POST" action="adminpassword.php">
              <label class="register"><strong>Admin:</strong></label>
              <input type="text" name="admin_name" required class="register_input" />
            </div>

			<div class="form_row">
              <label class="register"><strong>New Password:</strong></label>
              <input type="password" name="newpassword" required class="register_input" />
            </div>
            <div class="form_row"> 
			<button id="submit" type="submit"name="submit" value="change password">Change password</button>
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
  // This project is made by sumit suthar 9929496321
 require("dbconnect.php");
if (isset($_POST['submit']))
{
$admin_name = $_POST['admin_name'];
$newpassword = $_POST['newpassword'];
$query ="UPDATE admin SET password='$newpassword' WHERE admin_name='$admin_name'";
$result = mysql_query($query);
$count = mysql_affected_rows($result);
if ($count == 1)
{	
	header('Location:admin1.php');
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
  
