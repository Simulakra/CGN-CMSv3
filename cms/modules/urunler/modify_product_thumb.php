<?php 
ob_start(); 
error_reporting(0);
include("../../std/cgncon.php");
?>

<?php

$id = $_POST['id'];

$uploadOk = 1; 
$target_dir = "urunthumb/".$id."/";
mkdir($target_dir, 0777, true);
$target_file = $target_dir . basename($_FILES["upload_thumb"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if (file_exists($target_file)) 
{ 
echo "<script language=\"javascript\">  alert(\"HATA > DOSYA SUNUCUDA MEVCUT !!\"); window.location.href='modifyproduct.php?id=".$id."';</script>";  
$uploadOk = 0; 
} 

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
{ 
echo "<script language=\"javascript\">  alert(\"HATA > İZİN VERİLEN FORMATLAR: JPG, JPEG, PNG & GIF!\"); window.location.href='modifyproduct.php?id=".$id."';</script>";  $uploadOk = 0; 
} 
if ($uploadOk == 0) 
{ 
echo "<script language=\"javascript\">  alert(\"HATA > tekrar deneyiniz\"); window.location.href='modifyproduct.php?id=".$id."';</script>";  
}
else { 
				 $maxDim = 600;
					$file_name = $_FILES['upload_thumb']['tmp_name'];
					list($width, $height, $type, $attr) = getimagesize( $file_name );
							if ( $width > $maxDim || $height > $maxDim ) 
							{
								$target_filename = $file_name;
								$ratio = $width/$height;
											if( $ratio > 1) {
												$new_width = $maxDim;
												$new_height = $maxDim/$ratio;
											} else {
												$new_width = $maxDim*$ratio;
												$new_height = $maxDim;
											}
								$src = imagecreatefromstring( file_get_contents( $file_name ) );
								$dst = imagecreatetruecolor( $new_width, $new_height );
								imagecopyresampled( $dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
								imagedestroy( $src );
								imagepng( $dst, $target_filename ); // adjust format as needed
								imagedestroy( $dst );
							}

							if (move_uploaded_file($_FILES["upload_thumb"]["tmp_name"], $target_file)) 	
									{
										
										$sql1 = "select url from 35cgnproduct where id =  '".$id."'  " ;   //DELETE THE FİLE BEFIORE  
										$result1 = mysqli_query($GLOBALS["___mysqli_ston"], $sql1) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
										$row1 = mysqli_fetch_array($result1);
										$to_delete = $row1['url'];
										unlink($to_delete);   
										
										$urli = $target_file;
										$sql = "update 35cgnproduct set url = '".$urli."' where id = '".$id."'" ;     
										mysqli_query($GLOBALS["___mysqli_ston"],  $sql ) or die ( mysqli_error($GLOBALS["___mysqli_ston"]) );
										header("Location: modifyproduct.php?id=".$id.""); 
										exit;  
									}
							else {    echo "<script language=\"javascript\">  alert(\"HATA > 2\"); window.location.href='modifyproduct.php?id=".$id."';</script>";     }
}
	
?>
<?php ob_flush(); ?>