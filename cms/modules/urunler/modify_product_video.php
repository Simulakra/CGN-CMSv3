<?php 
ob_start(); 
error_reporting(0);
include("../../std/cgncon.php");
?>

<?php
$id = $_POST['id'];
$video =  $_POST ["video"];
			 
$sql = "update 35cgnproduct set video= '".$video."'  where id = '".$id."'" ;     
mysqli_query($GLOBALS["___mysqli_ston"],  $sql ) or die ( mysqli_error($GLOBALS["___mysqli_ston"]) );
header("Location: modifyproduct.php?id=".$id.""); 
exit;  
	
?>
<?php ob_flush(); ?>