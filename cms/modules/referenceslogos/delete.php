<? ob_start(); ?>
<?php
include("../../std/cgncon.php");
include ("../../std/check.php");
include ("../../std/lmenu.php");
error_reporting(0);
?>

<?php 

$adi=$_GET["adi"]; 
$sil = mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM 35cgnreferenceslogos WHERE  filename = '".$adi."'   "); 
unlink($adi); 
header("Location: index.php"); 
exit; 
?> 
<? ob_flush(); ?>