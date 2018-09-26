<?php
 ob_start(); 
 error_reporting(0);
 include("../../std/cgncon.php"); 
 ?>

<?php 
mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM 35cgnmenu WHERE menu_id = '$_GET[menu]' ") or die(header("Location:../../error.php")); 
mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM 35cgnpage WHERE menu_id = '$_GET[menu]' ") or die(header("Location:../../error.php")); 
((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 

    header("Location: page.php"); 

?> 
<?php ob_flush(); ?>