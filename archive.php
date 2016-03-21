<?php include "templates/include/header.php" ;
require('config.php');
?>

      <h1>Article Archive</h1>

      <ul id="headlines" class="archive">
 
<?php 
  $query='select * from articles limit 5';
  $result=mysqli_query($conn,$query);
  $rowcount=mysqli_num_rows($result);
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

      <p><?php echo $rowcount ?> article in total.</p>

      <p><a href="./">Return to Homepage</a></p>

<?php include "templates/include/footer.php" ?>

