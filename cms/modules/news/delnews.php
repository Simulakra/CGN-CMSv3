<?php ob_start(); ?>

<?php 
error_reporting(0); 
include("../../std/cgncon.php"); 

$newsid = $_GET['id']; 
$img_del = $_GET['link']; 
$query =mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM 35cgnpress WHERE id = ".$newsid) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 

if ($query)        {    unlink("$img_del");     } 
else                    {    } 
((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
header("Location: index.php"); 
exit; 
?> 
<?php ob_flush(); ?>