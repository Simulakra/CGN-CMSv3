<?php ob_start();  ?> 
<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["popupgrfx"]["name"]);
$filename=  basename($_FILES["popupgrfx"]["name"]);
$newfilename="popup.jpg";

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["popupgrfx"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
		//echo "<script language=\"javascript\">  alert(\"HATA > DOSYA GÖRSEL DEĞİL !\");  window.location.href='index.php';</script>";   
        $uploadOk = 0;
    }
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
  echo "<script language=\"javascript\">  alert(\"HATA > İZİN VERİLEN FORMATLAR: JPG, JPEG, PNG & GIF!\");  window.location.href='index.php';</script>";  
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   echo "<script language=\"javascript\">  alert(\"HATA >İŞLEM BAŞARISIZ\");  window.location.href='index.php';</script>";  
// if everything is ok, try to upload file
} else {
	
	// if everything is ok,  RESİZE THE IMAGE AND try to upload file 
				 $maxDim = 800;
					$file_name = $_FILES['popupgrfx']['tmp_name'];
		
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
    if (move_uploaded_file($_FILES["popupgrfx"]["tmp_name"], $target_file)) {
		rename($target_dir.$filename , $target_dir.$newfilename);   

   echo "<script language=\"javascript\">  alert(\"YÜKLEME İŞLEMİ BAŞARILI\");  window.location.href='index.php';</script>";  
    } else {
     echo "<script language=\"javascript\">  alert(\"HATA >İŞLEM BAŞARISIZ\");  window.location.href='index.php';</script>";  
    }
}
?>
<?php ob_flush(); ?>