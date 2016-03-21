<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
session_start();
 require("dbconnect.php")?>
  
<title>Delete product</title>
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
      <div class="center_title_bar">Delete Products</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="register_form">
		  <form method="POST" action="delete.php">
            
            <div class="form_row"> 
			<label class="register"><strong>Mobile name:</strong></label>
              <input type="text" name="mobname" required class="register_input" />
            </div>
            </br>
			<button id="submit" type="submit" name="submit" value="delete product">Delete product</button>
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
    if (isset($_POST['submit'])) 
	{
	$mobname=$_POST['mobname'];
	$query="DELETE FROM brand WHERE mobname='$mobname'";
        $result = mysql_query($query);
     if($result && mysql_affected_rows()>0)
{
header('Location:adminmenu.php');
}
}
// This project is made by sumit suthar 9929496321
?>
  <!-- end of main content -->
  <div class="footer">
   </div>
<!-- end of main_container -->
</body>
</html>
