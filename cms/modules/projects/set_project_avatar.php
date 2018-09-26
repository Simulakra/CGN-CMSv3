<?php
ob_start();
error_reporting(0);
include("../../std/cgncon.php");
?>

<?php 
$text = $_GET['id']; 
$sql3 = "SELECT ref_id, link FROM 35cgnprojectdetail where id = ".$text; 
$result2 = mysqli_query($GLOBALS["___mysqli_ston"], $sql3) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
while($row2 = mysqli_fetch_array($result2)) 
	{ 
		$sql1 = "update 35cgnprojects set filename = '".$row2['link']."' where id = ".$row2['ref_id']; 
		mysqli_query($GLOBALS["___mysqli_ston"], $sql1) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
		$a = $row2['album']; 
	} 

((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
header("location:javascript://history.go(-1)"); 
header('Location: ' . $_SERVER['HTTP_REFERER']); 
exit; 
?> 
<?php  ob_flush(); ?>