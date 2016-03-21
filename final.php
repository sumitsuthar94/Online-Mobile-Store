<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php require("dbconnect.php");
session_start();?>
<title>Confirm order</title>
<link rel="stylesheet" type="text/css" href="style.css" />

<link rel="stylesheet" type="text/css" href="tablestyle.css" />
    <link rel="stylesheet" type="text/css" href="fs.css" />

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
<div id="wrap">
	<div id="accordian">
	
			<div class="step">
			
			<div class="title">
				<h1>Finalize Order</h1>
			</div>
		</div>
		<div class="content" id="final_products">
			<div class="left" id="ordered">
	<?php
	// This project is made by sumit suthar 9929496321
	if(isset($_SESSION['cart']))
{
$total=0;
	    echo "<table width=\"358\" align=\"left\" dir=\"ltr\">
     <thead>
    <tr>
      <th>Product</th>
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
	  <td><img src=\"images/$image\" width=\"180%\"></td>
      <td>$x</td>
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
?>
				
			</div>	
			<div class="right" id="reviewed">
				<div class="billing">
					<span class="title">Billing:</span>
					<div class="address_reviewed">
						<span class="name"><?php echo  $_SESSION['name'];?></span>
						<span class="address"><?php echo $_SESSION['address']; ?></span>
						<span class="location"><?php echo  $_SESSION['city'];?> ,<?php echo $_SESSION['state'];?>,<?php  echo $_SESSION['country'];?></span>
						<span class="phone"><?php echo $_SESSION['mobile']; ?></span>
					</div>
				</div>
				<div class="shipping">
					<span class="title">Shipping:</span>
					<div class="address_reviewed">
						<span class="name"><?php echo  $_SESSION['name'];?></span>
						<span class="address"><?php echo $_SESSION['address']; ?></span>
						<span class="location"><?php echo  $_SESSION['city'];?> ,<?php echo $_SESSION['state'];?>,<?php  echo $_SESSION['country'];?></span>
						<span class="phone"><?php echo $_SESSION['mobile']; ?></span>
					</div>
				</div>
				<div class="payment">
					<span class="title">Payment:</span>
					<div class="payment_reviewed">
						<span class="method">Cash on delivery</span>
					</div>
				</div>
				<div id="complete">
				<a class="big_button" id="complete" href="thanks.php">Complete Order</a>
				<span class="sub">By selecting this button you agree to the purchase and subsequent payment for this order.</span> 
			</div>


</div>

</body>
</html>
