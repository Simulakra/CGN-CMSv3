<?php
ob_start();
error_reporting(0);
include("../../std/cgncon.php");
?>

<?php 

$folder = $_GET['albumname']; 
$info = $_GET['refInfo']; 
$sql = "INSERT INTO 35cgnprojects (albumname, info) values('" . $folder . "','" . $info . "');"; 

mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 

((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
header("Location: index.php"); 
exit; 
?> 
<? ob_flush(); ?>


