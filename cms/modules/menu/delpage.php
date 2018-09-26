<?php
 ob_start(); 
 error_reporting(0);
 include("../../std/cgncon.php"); 
 ?>
 
<?php 

$pageid = $_GET['page']; 
mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM 35cgnpage WHERE page_id = ".$pageid) or die(header("Location:../error.php")); 


((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
header("Location: page.php"); 
exit; 
?> 

<?php ob_flush(); ?>