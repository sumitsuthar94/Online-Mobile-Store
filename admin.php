<?php
include('templates/include/header.php');
require('config.php');
session_start();
$username=$_SESSION['username'];
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";
if(!isset($username))
{
	$username="";
	header("Location:loginForm.php");
}
?>
<?php
 if ( isset( $_POST['login'] ) ) {

    // User has posted the login form: attempt to log the user in

    if ( $_POST['username'] == ADMIN_USERNAME && $_POST['password'] == ADMIN_PASSWORD ) {

      // Login successful: Create a session and redirect to the admin homepage
      $_SESSION['username'] = ADMIN_USERNAME;
      header( "Location: admin.php" );

    } else {

    header("Location:loginForm.php?error='Invalid username or password.Please try again'");
    }
  }

  
?>

      <div id="adminHeader">
        <p>You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="logout.php"?>Log out</a></p>
      </div>

      <h1>All Articles</h1>

      <table>
        <tr>
          <th>Publication Date</th>
          <th>Article</th>
        </tr>
		<?php if ( isset( $_GET['error'] ) ) { ?>
        <div class="errorMessage"><?php echo $_GET['error'] ?></div>
<?php } ?>
		<?php if ( isset( $_GET['status'] ) ) { ?>
        <div class="statusMessage"><?php echo $_GET['status'] ?></div>
<?php } ?>
<?php 
  $query='select * from articles';
  $result=mysqli_query($conn,$query);
  $rowcount=mysqli_num_rows($result);
  ?>
        
		  <?php 
		  while( $row=mysqli_fetch_array($result,MYSQLI_ASSOC))
		  {  
			  
	  echo
		  "<tr onclick=\"location='editArticle.php?id=".$row['id']."'\">
          <td>{$row['publicationDate']}</td>
          <td>
		  {$row['title']}
          </td>
        </tr>";
		  }
		 
?>

      </table>

      <p><?php  echo $rowcount;?> article in total.</p>
<p><a href="newArticle.php">Add a New Article</a></p>

<?php include "templates/include/footer.php" ?>