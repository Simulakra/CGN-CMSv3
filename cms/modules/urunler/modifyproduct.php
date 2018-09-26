<?php ob_start(); ?> 
<?php 
include("../../std/cgncon.php"); 
include ("../../std/check.php");  
include ("../../std/lmenu.php"); 
function getExtension($file) {	$pos = strrpos ( $file, '.' );	return substr ( $file, $pos + 1 );}
error_reporting(0); 
?> 

<?php
$sql = "select * from 35cgnproduct where id=".$_GET ['id'];
$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
$row = mysqli_fetch_array( $result );

$productname = addslashes($_POST ["productname"]);
$productcode = addslashes($_POST ["productcode"]);
$desc = $_POST ["desc"];
$page = $_POST ["page"];
$parent = $_POST ["parent"];			 
$video =  $row ["video"];
$dizin = $row['url'];
$id=$_GET ['id'];
?>

<div id="page-wrapper"> 
<div class="row"> 
<div class="col-lg-12"><h1 class="page-header">Ürün Düzenle</h1></div>  

<div class="col-lg-12"> 
<div class="panel panel-default"> 
<div class="panel-body">

<form name="" method="post" action="modify_product_info.php" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>"> 
<table class="table ">
<tr><td>Ürün Adı:</td>
<td><input class="form-control" type="text" name="productname" value="<?php echo stripslashes($row['name']); ?>"></td>
</tr>

<tr><td>Ürün Kodu:</td>
<td><input class="form-control" type="text" name="productcode" value="<?php echo stripslashes($row['code']); ?>"></td>
</tr>

<tr><td>Kategori</td>
<td><select class="form-control" name="parent">
<?php
$sql3 = "select * from 35cgncategory where type = 1";
$result3 = mysqli_query($GLOBALS["___mysqli_ston"],  $sql3 );
$i = 0;
while ( $row3= mysqli_fetch_array( $result3 ) ) 
			{
				if ($row ['parent_id'] == $row3 ['id']){echo "<option value=\"" . $row3 ['id'] . "\" selected>" . $row3['name'] . "</option>";}
				else{echo "<option value=\"" . $row3 ['id'] . "\" >" . $row3 ['name'] . "</option>";}
			}

?>					
</select></td>
</tr>
<tr>
	<td> Öne Çıkar: <input type="checkbox" name="main_display" value="1" <?php if ($row['display']==1) { echo "checked";
	} ?>></td>
</tr>  
<tr><td>Ürün Açıklaması:</td></tr>
<tr><td colspan="2"><textarea class="ckeditor" id="editor1" name="page"><?php echo $row['page']; ?></textarea></td></tr>

<tr><td>Teknik Detay:</td><td></td></tr>
<tr><td colspan="2"><textarea id="editor1" class="ckeditor" name="desc"><?php echo $row['desci']; ?></textarea></td></tr>
<td><button class="btn btn-primary btn-default " type="submit" name="submit">Bilgileri Değiştir</button>
	<button class="btn btn-default " onClick="window.history.go(-1);return false;">Geri Dön</button> </td>
</form> 
</table>
</div> 
</div> 
</div> 

<div class="col-lg-12">	
<div class="panel panel-default"> 
<div class="panel-body">
<table class="table "> 
<form method="post"    action="modify_product_thumb.php" enctype="multipart/form-data"> 			
<input type="hidden" name="id" value="<?php echo $row['id']; ?>"> 	
<tr><td> Mevcut kapak görseli</td> </tr> 
<tr><td><?php  echo '<a href="'.$dizin.'" data-lightbox="urunkapakgorseli"  > '. '<img src="'.$dizin.'" style="width: 100px; height: auto;" /> </a> ';?> </td></tr>
<tr><td> Yeni kapak görseli yükle:</td></tr>
<tr> <td><input class="form-control" type="file" name="upload_thumb" ></td></tr> 
<tr> <td><button class="btn btn-primary btn-default " type="submit" name="submit">Yeni kapak görseli yükle</button>
		<button class="btn btn-default " onClick="window.history.go(-1);return false;">Geri Dön</button> </td> </tr> 		
</form> 
</table>
</div> 
</div> 
</div> 

<div class="col-lg-12">	
<div class="panel panel-default"> 
<div class="panel-body">
<table class="table"> 
<form method="post"    action="modify_product_video.php" enctype="multipart/form-data"> 	
<tr><td>Mevcut ürün videosu:</td></tr>
<input type="hidden" name="id" value="<?php echo $row['id']; ?>"> 	
<tr><td><input class="form-control" type="text" name="video" value="<?php echo $video; ?>"></td></tr>
<tr><td>Ürün videosunu güncelle:</td></tr>
<tr> <td><button class="btn btn-primary btn-default " type="submit" name="submit">Ürün videosunu Değiştir</button>
		<button class="btn btn-default " onClick="window.history.go(-1);return false;">Geri Dön</button> </td> </tr> 		
</table>
</form>
</div> 
</div> 
</div> 

<div class="col-lg-12">	
<div class="panel panel-default"> 
<div class="panel-body">
<table class="table"> 
<tr><td>Mevcut ürün görselleri:</td></tr>
<?php 
//$idd = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_GET ['id']);
$sqlm = "select  urls from 35cgnproduct where type = 1 and id =" .$id;
$resultm = mysqli_query($GLOBALS["___mysqli_ston"],  $sqlm );
$rowm = mysqli_fetch_array( $resultm );

$pics = explode ( ";", $rowm ['urls'] );
$pn = count ( $pics );
		for($j = 0; $j < $pn - 1; $j ++) 	
		{
			echo "
			<tr>
			<td>
			<a href=\"" . $pics [$j]  . "\" data-lightbox=\"urungorseli\"  > 
			<img src=\"" . $pics [$j]  . "\"  style=\"width:80px;height:auto\">
			</a>
			</td>
			<td  align=\"center\" width=\"200px\">" .$pics[$j]. "</td>
			<td><a href=\"delpic.php?id=".$id."&name=".$pics[$j]."\"><i class=\"fa fa-trash-o fa-lg\" 'aria-hidden='true'>&nbsp;</i></a></td>
			</tr> ";
			
			}
?>	
<form method="post"    action="modify_product_photos.php" enctype="multipart/form-data"> 	
<input type="hidden" name="id" value="<?php echo $row['id']; ?>"> 	
<tr><td>Yeni ürün görselleri yükle</td></tr>
<tr><td><input class="form-control" type="file" name="upload_imgs[]" multiple> <br /></td>
<td><button class="btn btn-primary btn-default " type="submit" name="submit">Yükle</button>
	<button class="btn btn-default " onClick="window.history.go(-1);return false;">Geri Dön</button> </td> 
</tr> 		
</form>
</table>
</div> 
</div> 
</div> 

<div class="col-lg-12">	
<div class="panel panel-default"> 
<div class="panel-body">
<table class="table"> 
<div style="overflow-x: auto">
<?php
$parts = explode ( ";", $row ['files'] );
$n = count ( $parts );
for($i = 0; $i < $n - 1; $i ++) {
$ext = getExtension ( $parts [$i] );
if ($ext == "xlsx")
echo "<tr><td align=\"center\" width=\"40px\"><a href=\"$parts[$i]\"><img src=\"images/excel.png\"></a></td> <td align=\"center\" width=\"400px\">" . $parts [$i] . " </td>      <td><a href=\"delfile.php?id=" . $row ['id'] . "&name=" . $parts [$i] . "\"><i class=\"fa fa-trash-o fa-lg\" 'aria-hidden='true'>&nbsp;</i></a></td></tr>";
if ($ext == "xls")
echo "<tr><td align=\"center\" width=\"40px\"><a href=\"$parts[$i]\"><img src=\"images/excel.png\"></a></td> <td align=\"center\" width=\"400px\">" . $parts [$i] . " </td>      <td><a href=\"delfile.php?id=" . $row ['id'] . "&name=" . $parts [$i] . "\"><i class=\"fa fa-trash-o fa-lg\" 'aria-hidden='true'>&nbsp;</i></a></td></tr>";
else if ($ext == "pdf")
echo "<tr><td align=\"center\" width=\"40px\"><a href=\"$parts[$i]\"><img src=\"images/pdf.png\"></a></td><td align=\"center\" width=\"400px\">" . $parts [$i] . " </td>  <td><a href=\"delfile.php?id=" . $row ['id'] . "&name=" . $parts [$i] . "\"><i class=\"fa fa-trash-o fa-lg\" 'aria-hidden='true'>&nbsp;</i></a></td></tr>";
else if ($ext == "docx")
echo "<tr><td align=\"center\" width=\"40px\"><a href=\"$parts[$i]\"><img src=\"images/word.png\" ></a></td><td align=\"center\" width=\"400px\">" . $parts [$i] . " </td>  <td><a href=\"delfile.php?id=" . $row ['id'] . "&name=" . $parts [$i] . "\"><i class=\"fa fa-trash-o fa-lg\" 'aria-hidden='true'>&nbsp;</i></a></td></tr>";
else if ($ext == "doc")
echo "<tr><td align=\"center\" width=\"40px\"><a href=\"$parts[$i]\"><img src=\"images/word.png\" ></a></td><td align=\"center\" width=\"400px\">" . $parts [$i] . " </td>  <td><a href=\"delfile.php?id=" . $row ['id'] . "&name=" . $parts [$i] . "\"><i class=\"fa fa-trash-o fa-lg\" 'aria-hidden='true'>&nbsp;</i></a></td></tr>";
else if ($ext == "txt")
echo "<tr><td align=\"center\" width=\"40px\"><a href=\"$parts[$i]\"><img src=\"images/file.png\" ></a></td><td align=\"center\" width=\"400px\">" . $parts [$i] . " </td>  <td><a href=\"delfile.php?id=" . $row ['id'] . "&name=" . $parts [$i] . "\"><i class=\"fa fa-trash-o fa-lg\" 'aria-hidden='true'>&nbsp;</i></a></td></tr>";
}
?> 
</table>
<table class="table"> 
<form method="post"    action="modify_product_files.php" enctype="multipart/form-data"> 	
<input type="hidden" name="id" value="<?php echo $row['id']; ?>"> 	
<input type="hidden" name="files" value="<?php echo $row['files']; ?>">
<tr><td>Yeni ürün dosyası ekle: </td></tr>
<tr>
<td><input class="form-control" type="file"	name="upload_files[]" multiple> </td>
<td><button class="btn btn-primary btn-default " type="submit" name="submit">Yükle</button>
	<button class="btn btn-default " onClick="window.history.go(-1);return false;">Geri Dön</button> </td>
</tr>
</form>
</table>
</div>
</div>
</div>
</div>
</div> 
</div> 
</body> 
</html> 
<?php ob_flush(); ?>