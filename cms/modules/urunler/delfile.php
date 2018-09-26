<?php ob_start(); ?>
<?php
error_reporting(0);
include("../../std/cgncon.php");
$id = $_GET['id'];
$fname = $_GET['name'];
$sql = "select * from 35cgnproduct where  id =  '".$id."'  " ;
$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql );
$row = mysqli_fetch_array( $result );
$new = str_replace($fname.";", "", $row['files']);
unlink($fname);
$sql2 = "update 35cgnproduct set files = '".$new."' where  id =  '".$id."'  " ;
mysqli_query($GLOBALS["___mysqli_ston"],  $sql2 ) or die ( mysqli_error($GLOBALS["___mysqli_ston"]) );
header("Location: modifyproduct.php?id=".$id.""); 
exit;  	
?>
<?php ob_flush(); ?>