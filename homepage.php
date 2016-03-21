<html>
<?php include "templates/include/header.php";
require('config.php'); ?>
      <ul id="headlines">
      &nbsp &nbsp
<?php 
  $query='select * from articles limit 5';
  $result=mysqli_query($conn,$query);
  ?>
        
		  <?php 
		  while( $row=mysqli_fetch_array($result,MYSQLI_ASSOC))
		  {
		  echo "<li>
          <h2>
		  <span class=\"pubDate\">{$row['publicationDate']}</span><a href='viewArticle.php?id=".$row['id']."'>
			  {$row['title']}</a>
          </h2>
          <p class=\"summary\">{$row['summary']}</p>
        </li>";
	  }
		  ?>
   </ul>
      <p><a href="archive.php">Article Archive</a></p>

<?php include "templates/include/footer.php" ?>
</html>
