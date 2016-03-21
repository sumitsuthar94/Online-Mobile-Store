<?php include "templates/include/header.php" ?>
<?php
require('config.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$query="select * from articles where id=$id";
  $result=mysqli_query($conn,$query);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
}
else
	header('Location:index.php');
?>
      <h1 style="width: 75%;"><?php echo htmlspecialchars( $row['title'])?></h1>
      <div style="width: 75%; font-style: italic;"><?php echo htmlspecialchars( $row['summary'] )?></div>
      <div style="width: 75%;"><?php echo $row['content']?></div>
      <p class="pubDate">Published on <?php echo $row['publicationDate']?></p>

      <p><a href="./">Return to Homepage</a></p>

<?php include "templates/include/footer.php" ?>
