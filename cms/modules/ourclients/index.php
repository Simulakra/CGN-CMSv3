<?php
include("../../std/cgncon.php");
include("../../std/check.php");
include("../../std/lmenu.php");
error_reporting(0);
?>

<?php 

if ($_POST) {//Form gönderildi mi? 
        if ($_FILES["resim"]["type"] == "image/png" || $_FILES["resim"]["type"] == "image/png"|| $_FILES["resim"]["type"] == "image/jpeg"||  $_FILES["resim"]["type"] == "image/gif" ) 
		{
			$link = $_POST["link"]; 
			$dosya_adi = $_FILES["resim"]["name"]; 
			$uret = array("as", "rt", "ty", "yu", "fg"); 	            //Dosyaya yeni bir isim oluşturuluyor 
			$uzanti = substr($dosya_adi, -3, 3); 
			$sayi_tut = rand(1, 10000); 
			$yeni_ad = "resim/" . $uret[rand(0, 4)] . $sayi_tut . '.' . $uzanti;         //Dosya yeni adıyla dosyalar klasörüne kaydedilecek 
						
			//YENİDEN BOYUTLANDIRMA
			$maxDim = 200;
			$file_name = $_FILES['resim']['tmp_name'];
			list($width, $height, $type, $attr) = getimagesize( $file_name );
			if ( $width > $maxDim || $height > $maxDim ) 
			{
				$target_filename = $file_name;
				$ratio = $width/$height;
				if( $ratio > 1)
				{
					$new_width = $maxDim;
					$new_height = $maxDim/$ratio;
				}
				else 
				{
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
		
		if (move_uploaded_file($_FILES["resim"]["tmp_name"], $yeni_ad))
						{ 
						$sorgu = mysqli_query($GLOBALS["___mysqli_ston"], "insert into 35cgnourclients (filename,link) values ('$yeni_ad','$link')"); 
				   
								if ($sorgu) { 								}
								else  			{ 			 echo "<script language=\"javascript\">  alert(\"HATA >İŞLEM BAŞARISIZ, TEKRAR DENEYİNİZ\");  window.location.href='index.php';</script>";} 
						 }
				else { 	echo "<script language=\"javascript\">  alert(\"HATA >İŞLEM BAŞARISIZ, TEKRAR DENEYİNİZ\");  window.location.href='index.php';</script>";} 
        }
		else { 		     echo "<script language=\"javascript\">  alert(\"HATA > İZİN VERİLEN FORMATLAR: JPG, JPEG, PNG & GIF!\");  window.location.href='index.php';</script>";} 
} 
?> 

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12"><h1 class="page-header">Bizi Seçenler</h1></div>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">


                   <?php 
                    $sorgu2 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from 35cgnourclients"); 
                    if (mysqli_num_rows($sorgu2)) { 
                        //Veritabanında resimler listeleniyor. 
                        while ($kayit = mysqli_fetch_array($sorgu2)) { 
                            $adi = $kayit["filename"]; 
                            echo '<div class="col-lg-3 col-md-4"> 
              <div class="panel panel-default"> 
              <div class="panelbody">'; 
                            echo '<img src="' . $adi . '" width="100%" height="auto"/>'; 
                            echo '</div>'; 
                            echo ' <div class="panel-footer" style="min-height:40px;">'; 
                            echo '<a class="tooltips alignright" href="delete.php?adi=' . $adi . '"><span>Albümü Sil</span> <i class="fa fa-trash-o fa-2x" aria-hidden="true">&nbsp;</i></a>  '; 
                            echo '</div>'; 
                            echo '</div></div>'; 

                        } 
                    } 
                    ?> 
                </div>
            </div>
        </div>

<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">Siteye Referans Eklemek İçin:</div>
<div class="panel-body">
				
<form action="" method="post" name="form1" class="form-inline" enctype="multipart/form-data">
<input type="file" name="resim" required/>
<br>
<input type="submit" class="btn btn-primary" name="gonder" value="Yeni Referansı Ekle"/>
</form>
<br>					
<small><div class="alert alert-warning">Görseller otomatik olarak küçültüleceklerdir.  Logolar yüklenme tarihine göre sıralanacaktır. Optimum görüntü için <b> 190px (en) x 110px (boy)</b>oranını  kullanınız</div></small>

</div>
</div>
</div>
</div>
</div>

</body>
</html>