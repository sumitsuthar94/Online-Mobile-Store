<?php
	session_start();
	
	header("location : viewcart.php");
	
	if (isset($_GET['serial']) && isset($_GET['action']))
	{	
		$action = $_GET['action']; $serial = $_GET['serial'];
		
		if ($action == "add")
		{	
			if(isset($_SESSION['cart'][$serial]))	
			{	
				$_SESSION['cart'][$serial]++;
			}
			else
			{
			$_SESSION['cart'][$serial] = 1;
			}
			
			header("Location: viewcart.php");
		}
		
		else if ($action == "remove")
		{
		if(isset($_SESSION['cart'][$serial]))
			{
				$_SESSION['cart'][$serial]--;
				if($_SESSION['cart'][$serial] == 0)
				{   $_SESSION['total']=0;
				    $_SESSION['q']=0;
					unset($_SESSION['cart'][$serial]);
				}
			}
			header("Location: viewcart.php");
		}		
	}
	
	// This project is made by sumit suthar 9929496321

?>