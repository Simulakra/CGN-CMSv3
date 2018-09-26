<?php 
ob_start(); 
error_reporting(0);
include("../../std/cgncon.php");
?>

<?php
$id = $_POST['id'];

$sql1 = "select files from 35cgnproduct where id =  '".$id."'  " ;   //mevcut gorsel url leri  
$result1 = mysqli_query($GLOBALS["___mysqli_ston"], $sql1) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
$row1 = mysqli_fetch_array($result1);
$current_files = $row1['files'];

$filez = " "; 
$target_dir = "urunfiles/".$id."/"; 
mkdir($target_dir, 0777, true); 
$num_files = count ( $_FILES ['upload_files'] ['name'] ); 
for($i = 0; $i < $num_files; $i ++) 
{ 

	$target_file = $target_dir . basename ( $_FILES ["upload_files"] ["name"] [$i] ); 
	$uploadOk = 1; 
	$imageFileType = pathinfo ( $target_file, PATHINFO_EXTENSION ); 

	if ($imageFileType != "pdf" && $imageFileType != "docx" && $imageFileType != "xlsx" && $imageFileType != "txt" && $imageFileType != "doc" && $imageFileType != "xls") 
		{ 
		$uploadOk = 0; 
		} 
		
	if ($uploadOk == 0)
		{ 
		}
	else 
		{ 
			if (move_uploaded_file ( $_FILES ["upload_files"] ["tmp_name"] [$i], $target_file ))	
			{ 

				$filez .= $target_file . ";"; 
			
			} 
			else
			{ 
			} 
		} 

} 

$filez=$filez.$current_files;


$sql = "update 35cgnproduct set  files = '" . $filez . "'  where id = '".$id."'" ;     

mysqli_query($GLOBALS["___mysqli_ston"],  $sql ) or die ( mysqli_error($GLOBALS["___mysqli_ston"]) );
echo "<script language=\"javascript\">  alert(\"DÜZENLEME BAŞARILI\");  window.location.href='modifyproduct.php?id=".$id."';</script>";
exit;  	
?>
<?php ob_flush(); ?>