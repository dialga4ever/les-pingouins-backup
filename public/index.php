<!DOCTYPE html>

<html>
<?php include("header.php"); ?>
  <body >
  <?php
$page = ( isset($_GET['page']) ) ? $_GET['page'] : 'index';

if ($page=='index') {
  include("main.php");
} else {
  include("$page.php");
}
?>
  
  </body >
<?php include("foooter.html"); ?>


</html>
