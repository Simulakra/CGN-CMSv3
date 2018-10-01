<?php ob_start(); ?> 
<?php 
include("../../std/cgncon.php"); 
include ("../../std/check.php");  
include ("../../std/lmenu.php"); 
error_reporting(0); 
?> 

<div id="page-wrapper"> 
<div class="row"> 
<div class="col-lg-12"><h1 class="page-header">Yeni Ürün Ekle</h1></div>  
<div class="col-lg-12"> 
<div class="panel panel-default"> 
<div class="panel-body"> 


 <?php            
	   
if (isset ( $_POST ["submit"] ))
	{ 

$productname = addslashes($_POST ["productname"]); 
$productcode = addslashes($_POST ["productcode"]); 
$desc = $_POST ["desc"]; 
$page = $_POST ["page"]; 
$parent = $_POST ["parent"];  
$video = $_POST['video']; 
$disp  = $_POST['main_display'];

$sql = "insert into 35cgnproduct (name, code, parent_id, desci, page, type, video,display) VALUES ('$productname', '$productcode', $parent, '$desc','$page',1 ,'$video','$disp')"; 

mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die (mysqli_error($GLOBALS["___mysqli_ston"])); 
$id = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res); 

//////////////////////////////////////////////////////////////////////// FOR PRODUCT THUMBNAIL
$target_dir = "urunthumb/".$id."/";
mkdir($target_dir, 0777, true);
$target_file = $target_dir . basename($_FILES["upload_thumb"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])) 
{
	$check = getimagesize($_FILES["upload_thumb"]["tmp_name"]);
	if($check !== false) 	{		$uploadOk = 1;		}
	else 							{		$uploadOk = 0;		}
}

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
echo "<script language=\"javascript\">  alert(\"HATA > tekrar deneyiniz Code:1\"); window.location.href='modifyproduct.php?id=".$id."';</script>";  
}	 
else 
	{
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
					{							$urli = $target_file;						} 
				else 
					{       echo "<script language=\"javascript\">  alert(\"HATA > tekrar deneyiniz Code:2\"); window.location.href='modifyproduct.php?id=".$id."';</script>";   						}
	}
//////////////////////////////////////////////////////////////////////// FOR PRODUCT THUMBNAIL

//////////////////////////////////////////////////////////////////////////// FOR PRODUCT IMAGES
$urls = ""; 
$target_dir = "urunresim/".$id."/"; 
mkdir($target_dir, 0777, true); 
$num_files = count ( $_FILES ['upload_imgs'] ['name'] ); 

for($i = 0; $i < $num_files; $i++) 
{ 

$target_file = $target_dir . basename ( $_FILES ["upload_imgs"] ["name"] [$i] ); 
$uploadOk = 1; 
$imageFileType = pathinfo ( $target_file, PATHINFO_EXTENSION ); 
if (isset ( $_POST ["submit"] ))
	{ 
$check = getimagesize ( $_FILES ["upload_imgs"] ["tmp_name"] [$i] ); 
		if ($check !== false) 
		{ 
		$uploadOk = 1; 
		} 
		else 
		{ 
		$uploadOk = 0;  echo "<script language=\"javascript\">  alert(\"HATA > tekrar deneyiniz Code:3\"); window.location.href='modifyproduct.php?id=".$id."';</script>";  
		} 
} 

if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") 
	{ 
echo "<script language=\"javascript\">  alert(\"HATA > İZİN VERİLEN FORMATLAR: JPG, JPEG, PNG & GIF!\"); window.location.href='modifyproduct.php?id=".$id."';</script>";
$uploadOk = 0; 
	} 
	
if ($uploadOk == 0) 
	{ 
echo "<script language=\"javascript\">  alert(\"HATA > tekrar deneyiniz Code:4\"); window.location.href='modifyproduct.php?id=".$id."';</script>";  
	}
else 
	 { 
 
 						 $maxDim = 800;
					$file_name = $_FILES['upload_imgs']['tmp_name'][$i];
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
 
 
		if (move_uploaded_file ( $_FILES ["upload_imgs"] ["tmp_name"] [$i], $target_file )) 
		{ 
		$urls .= $target_file . ";"; 
		} 
		else 
		{
			echo "<script language=\"javascript\">  alert(\"HATA > tekrar deneyiniz Code:5\"); window.location.href='modifyproduct.php?id=".$id."';</script>";  
		} 
	} 
} 
//////////////////////////////////////////////////////////////////////////// FOR PRODUCT IMAGES
//////////////////////////////////////////////////////////////////////////////// FOR PRODUCT FILES 
$filez = " "; 
$target_dir = "urunfiles/".$id."/"; 
mkdir($target_dir, 0777, true); 
if (empty($_FILES['upload_files']['name'])) {
	
echo $_FILES['upload_files']['name'] ;
$num_files = count ( $_FILES ['upload_files'] ['name'] ); 
for($i = 0; $i < $num_files; $i ++) 
{ 

	$target_file = $target_dir . basename ( $_FILES ["upload_files"] ["name"] [$i] ); 
	$uploadOk = 1; 
	$imageFileType = pathinfo ( $target_file, PATHINFO_EXTENSION ); 

	if ($imageFileType != "pdf" && $imageFileType != "docx" && $imageFileType != "xlsx" && $imageFileType != "txt" && $imageFileType != "doc" && $imageFileType != "xls") 
		{ 
			echo "<script language=\"javascript\">  alert(\"HATA > tekrar deneyiniz Code:6\"); window.location.href='modifyproduct.php?id=".$id."';</script>"; 
		$uploadOk = 0; 
		} 
		
	if ($uploadOk == 0)
		{ 
			echo "<script language=\"javascript\">  alert(\"HATA > tekrar deneyiniz Code:7\"); window.location.href='modifyproduct.php?id=".$id."';</script>"; 
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
//////////////////////////////////////////////////////////////////////////////// FOR PRODUCT FILES 

}
} 


                            $sql = "update 35cgnproduct set urls = '".$urls."', files = '".$filez."', url = '".$urli."' where id = ". $id; 
                            mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die (mysqli_error($GLOBALS["___mysqli_ston"])); 
                            echo "<script language=\"javascript\">  alert(\"İŞLEM YAPILDI !!\");  window.location.href='product_main.php';</script>";
                    } else { 

?> 
       
<form  name="" method="post"    action="addproduct.php" enctype="multipart/form-data"> 
<table class="table"> 
<tr> 
<td>Ürün adı:</td> 
<td><input class="form-control" type="text" name="productname" required></td> 
</tr> 
<tr> 
<td>Ürün kodu:</td> 
<td><input class="form-control" type="text" name="productcode" required></td> 
</tr> 
<tr> 
<td>Kategori</td> 
<td>
<select class="form-control" name="parent"> 
<?php 
$sql = "select * from 35cgncategory where type = 1 and is_leaf=1"; 
$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql); 
$i = 0; 
while ($row = mysqli_fetch_array($result)) 
			{	echo "<option value=\"" . $row ['id'] . "\">" . $row ['name'] . "</option>"; } 
?>                     
</select>
</td>
<tr>
	<td> Özellik: Öne Çıkar: <input type="checkbox" name="main_display" value="1"></td>
</tr>  
</tr> 
<tr><td>Ürün açıklaması:</td><td></td> </tr> 
<tr><td colspan="2"><textarea class="ckeditor" id="editor1"    name="page" required></textarea></td> </tr> 
<tr><td>Teknik detay:</td> </tr> 
<tr><td colspan="2"><textarea id="editor1" class="ckeditor"    name="desc" required></textarea></td> </tr> 
 <tr><td> Ürün kapak görseli:</td> 
<td><input class="form-control" type="file" name="upload_thumb" > <br /></td> 
</tr>
<tr> <td>Ürün görselleri:</td> 
<td><input class="form-control" type="file" value="" name="upload_imgs[]" multiple> <br /></td> 
</tr> 
<tr> 
<td>Ürün dosyaları:</td> 
<td><input class="form-control" type="file" name="upload_files[]" multiple> <br /></td> 
</tr> 
<tr> 
<td>Ürün videosu:</td> 
<td><input class="form-control" type="text" name="video"></td> 
</tr> 
<tr> 
<td><button class="btn btn-primary btn-default " type="submit" name="submit">Yeni Ürün Ekle</button>
	<button class="btn btn-default " onClick="window.history.go(-1);return false;">Geri Dön</button> </td>
</tr> 
</table> 
</form> 
<?php 
} 
?> 

</div> 
</div> 
</div> 
</div> 
</div> 
</div> 
</body> 
</html> 
<?php ob_flush(); ?> 