
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
session_start();
 require("dbconnect.php")?>
  
<title>Checkout</title>
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
      <div class="center_title_bar">Checkout</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="register_form">
		  <form method="POST" action="checkout2.php">
            <div class="form_row">
		    <?php
			$login_user=$_SESSION['login_user'];
			$query="SELECT * FROM customers WHERE name='$login_user'";
			$result=mysql_query($query);
			if ($result && mysql_num_rows($result)>0)
			{
			while($row=mysql_fetch_array($result))
			{
			
              echo "<label class=\"register\"><strong>NAME:</strong></label>
              <input type=\"text\" name=\"name\" value=\"{$row['name']}\"  required class=\"register_input\" />
            </div>
            <div class=\"form_row\"> 
			<label class=\"register\"><strong>E-MAIL:</strong></label>
              <input type=\"text\" name=\"email\"value=\"{$row['email']}\" required class=\"register_input\" />
            </div>
            <div class=\"form_row\"> 
			<label class=\"register\"><strong>MOBILE:</strong></label>
              <input type=\"text\" name=\"mobile\"value=\"{$row['mobile']}\" required class=\"register_input\" />
            </div>
            <div class=\"form_row\">
              <label class=\"register\"><strong>ADDRESS:</strong></label>
              <input type=\"text\" name=\"address\" value=\"{$row['address']}\" required class=\"register_input\" />
            </div>
            <div class=\"form_row\"> 
			<label class=\"register\"><strong>CITY:</strong></label>
              <input type=\"text\" name=\"city\" value=\"{$row['city']}\" required class=\"register_input\" />
            </div>
            <div class=\"form_row\">
              <label class=\"register\"><strong>STATE:</strong></label>
              <input type=\"text\" name=\"state\" value=\"{$row['state']}\"required class=\"register_input\" />
            </div>
			<div class=\"form_row\"> 
			<label class=\"register\"><strong>ZIP CODE:</strong></label>
              <input type=\"text\" name=\"zipcode\" value=\"{$row['zipcode']}\" required class=\"register_input\" />
            </div>
            <div class=\"form_row\">
              <label class=\"register\"><strong>COUNTRY:</strong></label>
              <input type=\"text\" name=\"country\" value=\"{$row['country']}\" required class=\"register_input\" />
            </div>
            
			<button id=\"submit\" type=\"submit\" name=\"submit\" value=\"confirm order\">confirm order</button>
		  </div>
		  </form>";
		  }
		  }
		  else
		  {
		  echo "<label class=\"register\"><strong>NAME:</strong></label>
              <input type=\"text\" name=\"name\"   required class=\"register_input\" />
            </div>
            <div class=\"form_row\"> 
			<label class=\"register\"><strong>E-MAIL:</strong></label>
              <input type=\"text\" name=\"email\" required class=\"register_input\" />
            </div>
            <div class=\"form_row\"> 
			<label class=\"register\"><strong>MOBILE:</strong></label>
              <input type=\"text\" name=\"mobile\" required class=\"register_input\" />
            </div>
            <div class=\"form_row\">
              <label class=\"register\"><strong>ADDRESS:</strong></label>
              <input type=\"text\" name=\"address\"  required class=\"register_input\" />
            </div>
            <div class=\"form_row\"> 
			<label class=\"register\"><strong>CITY:</strong></label>
              <input type=\"text\" name=\"city\" required class=\"register_input\" />
            </div>
            <div class=\"form_row\">
              <label class=\"register\"><strong>STATE:</strong></label>
              <input type=\"text\" name=\"state\" required class=\"register_input\" />
            </div>
			<div class=\"form_row\"> 
			<label class=\"register\"><strong>ZIP CODE:</strong></label>
              <input type=\"text\" name=\"zipcode\"  required class=\"register_input\" />
            </div>
            <div class=\"form_row\">
              <label class=\"register\"><strong>COUNTRY:</strong></label>
              <input type=\"text\" name=\"country\"  required class=\"register_input\" />
            </div>
            
			<button id=\"submit\" type=\"submit\" name=\"submit\" value=\"confirm order\">confirm order</button>
		  </div>
		  </form>";
		  }
		  ?>
		        </div>
		</div>
        <div class="bottom_prod_box_big"></div>
      </div>
    </div>
    <!-- end of center content -->
  </div>
  <?php
  if(isset($_SESSION['cart']))
  {
$total=0;
	require("dbconnect.php");
    if (isset($_POST['submit'])) 
	{
	   $name = $_POST['name'];
		$email = $_POST['email'];
		$mobile=$_POST['mobile'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$zipcode=$_POST['zipcode'];
		$country=$_POST['country'];
        $query = "INSERT INTO customers (name, email,mobile,address,city,state,zipcode,country) VALUES ('$name', '$email','$mobile','$address','$city','$state','$zipcode','$country') ON DUPLICATE KEY UPDATE
		email=VALUES(email),
		mobile=VALUES(mobile),
		address=VALUES(address),
		city=VALUES(city),
		state=VALUES(state),
		zipcode=VALUES(zipcode),
		country=VALUES(country)";
        $result = mysql_query($query);
     if($result && mysql_affected_rows()>=0)
{ 
foreach($_SESSION['cart'] as $serial => $x)
{
$result=mysql_query("select * from brand WHERE serial=$serial");
$myrow=mysql_fetch_array($result);
$mobname=$myrow['mobname'];
$price=$myrow['price'];
$product_id=$myrow['serial'];
$image=$myrow['image'];
$date=date("Y-m-d");
$line_cost=$price*$x;
$customers=$name;
$total= $total+$line_cost;
$_SESSION['total']=$total;
$query="INSERT INTO orders(customer_name,date,product_id,product_name,image,quantity,price,total)VALUES('$customers','$date','$product_id','$mobname','$image','$x','$price','$line_cost')";
$result=mysql_query($query);
if($result && mysql_affected_rows()>0)
{
header('location:confirm.php');
}
}
}
}
}   
    if(isset($_POST['submit']))
    {
       $_SESSION['name']=$name;
		$_SESSION['address']=$address;
		$_SESSION['city']=$city;
		$_SESSION['mobile']=$mobile;
		$_SESSION['state']=$state;
		$_SESSION['zipcode']=$zipcode;
		$_SESSION['country']=$country;
	}
?>
  <!-- end of main content -->
  <div class="footer">
   </div>
<!-- end of main_container -->
</body>
</html>
  
