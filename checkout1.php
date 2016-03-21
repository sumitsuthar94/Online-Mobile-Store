
<html>
<head>
<?php
session_start();
if($_SESSION['q']==0)
{
header("Location:index.php");
}       

 require("dbconnect.php")?>
 

<title>mobile Store</title>
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
      <div class="center_title_bar">Login</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="register_form">
            <div class="form_row">
			<?php
			if(isset($_SESSION['login_user']))
			{
			header('Location:checkout2.php');
			}
			// This project is made by sumit suthar 9929496321
			?>
			<form method="POST" action="checkout1.php">
              <label class="register"><strong>Username:</strong></label>
              <input type="text" name="username" required class="register_input" />
            </div>
            <div class="form_row">
              <label class="register"><strong>Password:</strong></label>
              <input type="password" name="password" required class="register_input" />
            </div>
            <div class="form_row"> 
			<button id="submit" type="submit" value="login">Login</button>
		  </div>
		  </form>
		  <p>Don't have an account?<a href ="signup.php">Signup here</a></p>
		        </div>
		</div>
        <div class="bottom_prod_box_big"></div>
      </div>
    </div>
    <!-- end of center content -->
  </div>
  <?php 
  
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
	header('Location:error.php');
}
}
if (isset($_SESSION['login_user']))
{
 header('Location:checkout2.php');
}
if(!isset($_SESSION['cart']))
{
header('Location:index.php');
}
?>
  <!-- end of main content -->
  <div class="footer">
   </div>
<!-- end of main_container -->
</body>
</html>
  
