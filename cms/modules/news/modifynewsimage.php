<?php 
ob_start(); 
error_reporting(0);
include("../../std/cgncon.php");
 ?>


<?php 
$id = $_POST['id']; 
$target_dir = "newsthumb/"; 
$target_file = $target_dir . basename($_FILES["userfile"]["name"]); 
$uploadOk = 1; 
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION); 

if (file_exists($target_file)) { 
        echo "<script language=\"javascript\">  alert(\"HATA > DOSYA SUNUCUDA MEVCUT !!\");  window.location.href='modifynews.php?id=".$id."';</script>";  
    $uploadOk = 0; 
} 
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) { 
            echo "<script language=\"javascript\">  alert(\"HATA > İZİN VERİLEN FORMATLAR: JPG, JPEG, PNG & GIF!\");  window.location.href='modifynews.php?id=".$id."';</script>";  
    $uploadOk = 0; 
} 
// Check if $uploadOk is set to 0 by an error 
if ($uploadOk == 0) { 
        echo "<script language=\"javascript\">  alert(\"HATA > 0\"); window.location.href='modifynews.php?id=".$id."';</script>";  
// if everything is ok, try to upload file 
} else { 
   // if everything is ok,  RESİZE THE IMAGE AND try to upload file 
				 $maxDim = 800;
					$file_name = $_FILES['userfile']['tmp_name'];
					list($width, $height, $type, $attr) = getimagesize( $file_name );
							if ( $width > $maxDim || $height > $maxDim ) {
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
if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file)) { 
$id = $_POST['id']; 
$sql = "select link from 35cgnpress where id =  '".$id."'  " ;     
$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
while($row = mysqli_fetch_array($result)) 
{ 
    $to_delete = $row['link']; 
    unlink($to_delete); 
     
} 

$image = $target_file; 
$sql = "UPDATE  35cgnpress SET  link = '".$image." '  WHERE id = '".$id."'  " ;     


//  echo "<script language=\"javascript\">  alert(\"HATA > 1\"); </script>";  

mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res);  
echo "<script language=\"javascript\">  alert(\"DÜZENLEME BAŞARILI\");  window.location.href='index.php?id=".$id."';</script>"; 
exit;  

    } 
else {        echo "<script language=\"javascript\">  alert(\"HATA > 2\"); </script>";     } 
} 
   
?> 

<?php  ob_flush(); ?>