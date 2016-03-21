<?php
require( "config.php" );
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";
switch ( $action ) {
  case 'archive':
    header("Location:archive.php");
    break;
  case 'viewArticle':
    header("Location:viewArticle.php");
    break;
  default:
    header("Location:homepage.php");
}

?>
