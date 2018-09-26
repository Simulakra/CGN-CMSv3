<?php ob_start();  ?> 
<?php
$upload_dir  = "uploads/";
$upload_file = $upload_dir.basename($_FILES['dosya']['name']);
$newfilename="catalogue.pdf";
if (move_uploaded_file($_FILES['dosya']['tmp_name'],$upload_file)) 
	{
	   rename($upload_file , $upload_dir.$newfilename);  
	   echo "<script language=\"javascript\">  alert(\"YÜKLEME İŞLEMİ BAŞARILI\");  window.location.href='index.php';</script>";  
	} 
else 
	{
		 echo "<script language=\"javascript\">  alert(\"HATA >İŞLEM BAŞARISIZ\");  window.location.href='index.php';</script>";
	}
?>
<?php ob_flush(); ?>