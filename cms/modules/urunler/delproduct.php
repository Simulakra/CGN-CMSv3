<?php ob_start(); ?>
<?php
error_reporting(0);
include("../../std/cgncon.php");

function rrmdir($dir) 
	{
		foreach(glob($dir . '/*') as $file) 
		{
			if(is_dir($file)) rrmdir($file); else unlink($file);
		}
		rmdir($dir);
	}

$productid = $_GET['id'];
rrmdir("urunthumb/".$productid."/");
rrmdir("urunfiles/".$productid."/"); 
rrmdir("urunresim/".$productid."/");

mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM 35cgnproduct WHERE id = ".$productid) or die(mysqli_error($GLOBALS["___mysqli_ston"]));
((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res);

header("Location: product_main.php");
exit;  	
?>
<?php ob_flush(); ?>