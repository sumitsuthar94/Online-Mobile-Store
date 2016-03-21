<html>
<head>
<?php require("dbconnect.php");
session_start();
?>
<title>Brand</title>
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
      <li><font size="2px" font color="#FFA07A"><p align="right" >
	  	<?php
   if (isset($_SESSION['login_user']))
{
echo $_SESSION['login_user'];
echo" Logged-in ";
}
   ?></p></font></li>
   </ul>
      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
 <?php
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
	// This project is made by sumit suthar 9929496321
	?>
    <!-- end of left content -->
   <?php  
   
	 if(isset($_GET['id']))
	 {
	  $id=$_GET['id'];
	 }
	  $query="SELECT brandname FROM brand WHERE id=$id";
	  $result=mysql_query($query);
	  $myrow=mysql_fetch_array($result);
   echo "<div class=\"center_content\">
      <div class=\"center_title_bar\">{$myrow['brandname']} Products</div>";
	  
	  $query="SELECT *FROM brand WHERE id=$id";
	  $result=mysql_query($query);
	  if($result && mysql_num_rows($result)>0)
	  {
     while($row=mysql_fetch_array($result))
	 {
		echo "<div class=\"prod_box\">
        <div class=\"top_prod_box\"></div>
        <div class=\"center_prod_box\">
          <div class=\"product_title\"><a href='details.php?serial=".$row['serial']."'>{$row['mobname']}</a></div>
          <div class=\"product_img\"><a href='details.php?serial=".$row['serial']."'><img src=\"images/{$row["image"]}\" border=\"0\" /></a></div>
          <div class=\"prod_price\"><span class=\"price\">RS.{$row["price"]}</span></div>
        </div>
        <div class=\"bottom_prod_box\"></div>
        <div class=\"prod_details_tab\"> <a href='cart.php?serial=".$row['serial']."&action=add' title=\"header=[Add to cart] body=[&nbsp;] fade=[on]\"><img src=\"images/cart.gif\" border=\"0\" class=\"left_bt\" /></a> 
		<a href='details.php?serial=".$row['serial']."' class=\"prod_details\">details</a> </div>
      </div>";
		
	  }
	  }
		
	  ?>



    </div>
    <!-- end of center content -->
    <div class="right_content">
      <div class="shopping_cart">
        <div class="cart_title">Shopping cart</div>
        <div class="cart_details"> <?php echo $_SESSION['q'];?> items <br />
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