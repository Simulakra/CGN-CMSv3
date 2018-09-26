<?php 
ob_start(); 
error_reporting(0);
include("../../std/cgncon.php");
?>

<?php

$id = $_POST['id'];   
$productname = addslashes($_POST ["productname"]);
$productcode = addslashes($_POST ["productcode"]);
$desc = $_POST ["desc"];
$page = $_POST ["page"];
$parent = $_POST ["parent"];
$display=$_POST['main_display'];
			 
$sql = "update 35cgnproduct  set name = '" . $productname ."', code = '" . $productcode . "', parent_id = " . $parent .", desci = '" . $desc . "', page='" . $page . "',display='".$display."'  where id = '".$id."'" ;     
mysqli_query($GLOBALS["___mysqli_ston"],  $sql ) or die ( mysqli_error($GLOBALS["___mysqli_ston"]) );
echo "<script language=\"javascript\">  alert(\"DÜZENLEME BAŞARILI\");  window.location.href='modifyproduct.php?id=".$id."';</script>";
exit;  
	
?>
<?php ob_flush(); ?>