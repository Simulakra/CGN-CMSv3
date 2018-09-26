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
						// if everything is ok,  RESİZE THE IMAGE AND try to upload file 
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
							$new_file_name = substr($upload_file, 0, strrpos($upload_file, "."))
							.rand(1,10000).substr($upload_file, strrpos($upload_file, "."));
							if (move_uploaded_file($_FILES['upload']['tmp_name'][$i],
								$new_file_name))  
									{ 
										$caption = $_POST['title']; 
										$folder = $_POST['albumname']; 
										$sql = "INSERT INTO 35cgnprojectdetail (ref_id,title,link) values('".$folder."','".$caption."' ,'".$new_file_name."')";         
										mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"]));         
									}  
						}  
					else  
					{ 
					      echo "<script language=\"javascript\">  alert(\"HATA >İŞLEM BAŞARISIZ, TEKRAR DENEYİNİZ\");  window.location.href='index.php';</script>";  
					} 
				
	} 
((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
//header("Location: view.php?folder=".$_POST['albumname']."&name=".$_POST['name']); 
header("location:javascript://history.go(-1)"); 
header('Location: ' . $_SERVER['HTTP_REFERER']); 
exit; 
?> 
<?php ob_flush(); ?>