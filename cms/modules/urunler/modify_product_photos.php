<?php 
ob_start(); 
error_reporting(0);
include("../../std/cgncon.php");
?>

<?php
$id = $_POST['id'];

$sql1 = "select urls from 35cgnproduct where id =  '".$id."'  " ;   //mevcut gorsel url leri  
$result1 = mysqli_query($GLOBALS["___mysqli_ston"], $sql1) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
$row1 = mysqli_fetch_array($result1);
$current_url = $row1['urls'];

$target_dir = "urunresim/".$id."/";
$num_files = count ( $_FILES ['upload_imgs'] ['name'] );
$url = "";

for($i = 0; $i < $num_files; $i ++) 
{
$target_file = $target_dir . basename ( $_FILES ["upload_imgs"] ["name"] [$i] );
$uploadOk = 1;
$imageFileType = pathinfo ( $target_file, PATHINFO_EXTENSION );
move_uploaded_file ( $_FILES ["upload_imgs"] ["tmp_name"] [$i], $target_file );
$url .= $target_file . ";"; 
}

$url=$url.$current_url;
$sql = "update 35cgnproduct set  urls = '" . $url . "'  where id = '".$id."'" ;     

mysqli_query($GLOBALS["___mysqli_ston"],  $sql ) or die ( mysqli_error($GLOBALS["___mysqli_ston"]) );
header("Location: modifyproduct.php?id=".$id.""); 

exit;  	
?>
<?php ob_flush(); ?>