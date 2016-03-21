<?php
include "templates/include/header.php";
require("config.php");
if(isset($_POST['saveChanges']))
{
	$title=$_POST['title'];
	$date=$_POST['publicationDate'];
	$summary=$_POST['summary'];
	$content=$_POST['content'];
	$query="insert into articles (publicationDate,title,summary,content) values('$date','$title','$summary','$content')";
	$result=mysqli_query($conn,$query);
	if($result)
	{
		header("Location:admin.php?status='New Article added successfully'");
	}
	else
	{
		header("Location:admin.php?error='Sorry Article not added'");
	}
}
?>