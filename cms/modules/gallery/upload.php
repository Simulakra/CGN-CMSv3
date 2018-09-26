<?php
ob_start(); 
error_reporting(0);
include("../../std/cgncon.php");
 ?> 
<?php 
$upload_dir  = "./img/"; 
$num_files = count($_FILES['upload']['name']); 
for ($i=0; $i < $num_files; $i++)  
{ 
    $upload_file = $upload_dir.basename($_FILES['upload']['name'][$i]); 

        if (is_uploaded_file($_FILES['upload']['tmp_name'][$i]))  
        { 
             

			 				 $maxDim = 1200;
					$file_name = $_FILES['upload']['tmp_name'][$i];
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
			 
            if (move_uploaded_file($_FILES['upload']['tmp_name'][$i],$upload_file))  
            {              
				$caption = $_POST['caption']; 
				$folder = $_POST['folder']; 				
				$sql = "INSERT INTO 35cgngallery (link,tlink,caption,album,type) values('".$upload_file."','".$upload_file."' ,'".$caption."','".$folder."', 1)";         
				mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"]));         
            }  
        }  
        else  
        { 
        echo "<script language=\"javascript\">  alert(\"HATA >İŞLEM BAŞARISIZ\");  window.location.href='index.php';</script>";  
        } 

} 

header("Location: view.php?folder=".$_POST['folder']."&name=".$_POST['name']); 
?> 
<?php ob_flush(); ?>