<?php
session_start();
	require("dbconnect.php");
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
		$query="SELECT * FROM users WHERE username='$username' OR email='$email'";
		$result=mysql_query($query);
		$checkrows=mysql_num_rows($result);
		if($checkrows==0)
		{
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysql_query($query);
        if($result && mysql_affected_rows()==1){
		$_SESSION['login_user']=$username;
		$_SESSION['email']=$email;
            $msg = "User Created Successfully.";
			 header( 'Location: index.php' ) ;
        }
		}
		else
		{
		echo "already exist";
		}
    }
	// This project is made by sumit suthar 9929496321
    ?>