<?php 
ob_start(); 
error_reporting(0);
include("../../std/cgncon.php");
 ?>
<?php

if(isset($_POST['radio'])&& $_POST['radio']==1)	
{
	mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE 35cgnpopup SET grfx = 1 "); 
	mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE 35cgnpopup SET video = 0 "); 
echo "<script language=\"javascript\">  alert(\"Güncellendi: Pop Up türü  GÖRSEL \");  window.location.href='index.php';</script>"; 
}
else if(isset($_POST['radio'])&& $_POST['radio']==2)
{ 
	mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE 35cgnpopup SET video = 1 "); 
	mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE 35cgnpopup SET grfx = 0 "); 
echo "<script language=\"javascript\">  alert(\"Güncellendi: Pop Up türü  VIDEO\");  window.location.href='index.php';</script>"; 
}

?>
					
					
<?php ob_flush(); ?>