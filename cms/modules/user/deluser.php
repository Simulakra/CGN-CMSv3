<?php ob_start(); ?>
<?php
include("../../std/cgncon.php");
include("../../std/check.php");
include("../../std/lmenu.php");
error_reporting(0);
?>

<?php 
$id = $_GET['username']; 
$sql = 'DELETE FROM 35cgnuser WHERE id ='.$id; 
mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
header("Location: userman.php"); 
?> 
<?php ob_flush(); ?>
