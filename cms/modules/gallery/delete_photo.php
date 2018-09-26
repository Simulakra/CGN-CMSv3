<?php 
ob_start(); 
error_reporting(0);
include("../../std/cgncon.php");
 ?>


<?php 
$text = $_GET['id']; 
$sql = 'delete from 35cgngallery where id ='.$text; 
$sql3 = "SELECT link, tlink, album FROM 35cgngallery where id = ".$text; 
$result2 = mysqli_query($GLOBALS["___mysqli_ston"], $sql3); 
while($row2 = mysqli_fetch_array($result2)) 
		{ 
			unlink($row2['tlink']); 
			unlink($row2['link']); 
			$a = $row2['album']; 
		} 


mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
header('Location: view.php?folder='.$a .'&name='.$_GET['name']); 
exit; 
?> 
<?php  ob_flush(); ?>