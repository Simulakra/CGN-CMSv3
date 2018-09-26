<?php
 ob_start(); 
 error_reporting(0);
 include("../../std/cgncon.php"); 
 ?>

<?php 
$text = $_GET['id']; 
$sql = 'delete from 35cgngallery where album ='.$text; 
$sql2 = 'delete from 35cgnalbum where id ='.$text; 
$sql3 = "SELECT link, tlink FROM 35cgngallery where album = ".$text; 
$result2 = mysqli_query($GLOBALS["___mysqli_ston"], $sql3); 
while($row2 = mysqli_fetch_array($result2)) 
	{ 
		unlink($row2['tlink']); 
		unlink($row2['link']); 
	} 
mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
mysqli_query($GLOBALS["___mysqli_ston"], $sql2) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
header("Location: index.php"); 
exit; 
?> 
<?php ob_flush(); ?>