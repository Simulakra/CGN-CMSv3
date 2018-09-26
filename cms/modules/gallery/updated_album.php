<?php 
ob_start(); 
error_reporting(0);
include("../../std/cgncon.php");
 ?>
 

<?php  

    $id = $_GET['id']; 
    $folder = $_GET['folder']; 
    $sql = "UPDATE 35cgnalbum SET folder = '".$folder."'   where id = '".$id."' "; 

mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"]));         
((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
header("Location: index.php"); 
exit; 
?> 

<?php  ob_flush(); ?>