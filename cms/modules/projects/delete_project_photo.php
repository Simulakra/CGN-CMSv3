<?php
ob_start();
error_reporting(0);
include("../../std/cgncon.php");
?>

<?php 
$text = $_GET['id']; 
$sql = 'delete from 35cgnprojectdetail where id ='.$text; 
$sql3 = "SELECT link, ref_id FROM 35cgnprojectdetail where id = ".$text; 
$result2 = mysqli_query($GLOBALS["___mysqli_ston"], $sql3); 
while($row2 = mysqli_fetch_array($result2)) 
	{ 
		unlink($row2['link']); 
		$a = $row2['ref_id']; 
	} 
mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
header("location:javascript://history.go(-1)"); 
header('Location: ' . $_SERVER['HTTP_REFERER']); 
exit; 
?> 
<?php  ob_flush(); ?>