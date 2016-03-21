
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
session_start();
 require("dbconnect.php")?>
<title>Login</title>
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
   
    <?php
	// This project is made by sumit suthar 9929496321
    echo"<div class=\"left_content\">
      <div class=\"title_box\">BRANDS</div>
      <ul class=\"left_menu\">
          <li class=\"odd\"><a href='brand.php?id=1'>APPLE</a></li>
        <li class=\"even\"><a href='brand.php?id=2'>SAMSUNG</a></li>
        <li class=\"odd\"><a href='brand.php?id=3'>SONY</a></li>
        <li class=\"even\"><a href='brand.php?id=4'>NOKIA</a></li>
        <li class=\"odd\"><a href='brand.php?id=5'>MICROMAX</a></li>
        <li class=\"even\"><a href='brand.php?id=6'>HTC</a></li>
        <li class=\"odd\"><a href='brand.php?id=7'>LENOVO</a></li>
        <li class=\"even\"><a href='brand.php?id=8'>BLACKBERRY</a></li>
        <li class=\"odd\"><a href='brand.php?id=9'>SPICE</a></li>
        <li class=\"even\"><a href='brand.php?id=10'>KARBONN</a></li>
      </ul>
    </div>";
	?>
	<!-- end of left content -->
<div class="center_content">
      <div class="center_title_bar">Login</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="register_form">
		  <form method="POST" action="login2.php">
            <div class="form_row">
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

    <div class="right_content">
      <div class="shopping_cart">
        <div class="cart_title">Shopping cart</div>
        <div class="cart_details"><?php echo $_SESSION['q'];?> items <br />
          <span class="border_cart"></span> Total: <span class="price">RS.<?php echo $_SESSION['total'];?></span> </div>
        <div class="cart_icon"><a href="#" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
      
    </div>
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
  <div class="footer">
   </div>
<!-- end of main_container -->
</body>
</html>
  
