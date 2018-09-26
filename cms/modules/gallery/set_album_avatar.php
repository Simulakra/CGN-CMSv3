<?php 
ob_start(); 
error_reporting(0);
include("../../std/cgncon.php");
 ?>

<?php 

$text = $_GET['id']; 
$sql3 = "SELECT album, tlink FROM 35cgngallery where id = ".$text; 
$result2 = mysqli_query($GLOBALS["___mysqli_ston"], $sql3) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 

while($row2 = mysqli_fetch_array($result2)) 
		{ 
			$sql1 = "update 35cgnalbum set avatar = '".$row2['tlink']."' where id = ".$row2['album']; 
			mysqli_query($GLOBALS["___mysqli_ston"], $sql1) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
			$a = $row2['album']; 
		} 

((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
header('Location: view.php?folder='.$a .'&name='.$_GET['name']); 
exit; 
?> 

<?php  ob_flush(); ?>