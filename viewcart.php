<?php session_start();

?>
<html>
<head>
<title>View cart</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="tablestyle.css" />
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
	?>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Shopping cart</div>
	<?php
	// This project is made by sumit suthar 9929496321
require("dbconnect.php");
if (isset($_GET['serial']))
 
$serial=$_GET['serial'];
  
if (isset($_GET['action']))
 
$action=$_GET['action'];
// Display cart 
if(!isset($_SESSION['cart']))
{
echo "</br></br><font size=\"3px\" font color=\"#8B0000\">
<h3><p align=\"center\">You have no items in shopping cart</p></h3>
</font>";
}
else if(isset($_SESSION['cart']))
{
$total=0;
	    echo "<table width=\"558\" align=\"center\" dir=\"ltr\">
     <thead>
    <tr>
      <th>Product to buy now</th>
	  <th>Image</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Total</th>
    </tr>
  </thead>";

foreach($_SESSION['cart'] as $serial => $x)
{
require("dbconnect.php");
$result=mysql_query("select mobname,price,image from brand WHERE serial=$serial");
$myrow=mysql_fetch_array($result);
$name=$myrow['mobname'];
$price=$myrow['price'];
$image=$myrow['image'];
$line_cost=$price*$x;
$total= $total+$line_cost;
$_SESSION['total']=$total;
$cart=$_SESSION['cart'];
$_SESSION['q']=count($cart);

 echo "<tbody>
    <tr>
      <td>$name</td>
	  <td><img src=\"images/$image\" width=\"50%\"></td>
      <td>$x <a href='cart.php?serial=".$serial."&action=add' ><img src='images/add.png'/></a> <a href='cart.php?serial=".$serial."&action=remove' ><img src='images/remove.png'/></a></td>
      <td>RS.$price</td>
      <td>RS.$line_cost</td>
    </tr>
  </tbody>";
  }
  echo"<tfoot>
    <tr> 
      <th colspan=\"4\">Grand Total</th>
      <th>RS.$total</th>
    </tr>
  </tfoot>
</table>";
}
?></br>
<p style='margin-left:30px;' ><a href="index.php" button id="sumit9929496321" ><b>Continue shopping</b></a></button><a href='checkout1.php' button id ="sumit_suthar"  style='margin-left:280px' ><b>Checkout</b></a></p>
  
    </div>
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
  <div class="footer">
   </div>
<!-- end of main_container -->
</body>
</html> 

