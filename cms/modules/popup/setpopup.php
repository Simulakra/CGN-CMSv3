<?php 
ob_start(); 
error_reporting(0);
include("../../std/cgncon.php");
 ?>
                    <?php 

if (isset($_POST['showpopup'])) 
	{ 
	$showpopup = $_POST['showpopup']; 
	mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE 35cgnpopup SET showpopup = '$showpopup' "); 
						        echo "<script language=\"javascript\">  alert(\"Pop Up durumu güncellendi\");  window.location.href='index.php';</script>"; 
	} 	
?> 

<?php ob_flush(); ?>