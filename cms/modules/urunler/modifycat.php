<?php ob_start(); ?>
<?php
include("../../std/cgncon.php");
include ("../../std/check.php"); 
include ("../../std/lmenu.php");
error_reporting(0);
?>


<div id="page-wrapper">
<div class="row">
<div class="col-lg-12"><h1 class="page-header">Kategoriyi Düzenle</h1></div> 
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-body">

<?php

if(isset($_POST["submit"]))
	{

		$catname = addslashes($_POST["catname"]);
		$parent = $_POST["parent"];
			
			if(isset($_POST["is_leaf"]))
				$is_leaf = 1;
			else
				$is_leaf=0;

		$target_dir = "katresim/".$_POST['id']."/";
		$target_file = $target_dir . basename($_FILES["upload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                   	
                   	
                   	if(isset($_POST["submit"])) 
					{
                   		$check = getimagesize($_FILES["upload"]["tmp_name"]);
							if($check !== false)
								{
									$uploadOk = 1;
								}	 
							else
								{
									$uploadOk = 0;
								}
                   	}
                
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
					{
                         $uploadOk = 0;
                     }
                    
				if ($uploadOk == 0)
					{
                     }
				else {
					
									 $maxDim = 600;
					$file_name = $_FILES['upload']['tmp_name'];
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
					
					
                           if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) 
								{	
										$sql1 = "select url from 35cgncategory where id =".$_POST['id'];   //DELETE THE FİLE BEFIORE  
										$result1 = mysqli_query($GLOBALS["___mysqli_ston"], $sql1) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
										$row1 = mysqli_fetch_array($result1);
										$to_delete = $row1['url'];
										unlink($to_delete);   
                                 }
							else 
								{
                                 }
                            }
							
							
                            if (empty($_FILES["upload"]["name"])) 
							{
                                    $sql = "update 35cgncategory set name = '$catname' , parent_id = $parent , 	is_leaf = $is_leaf where id =".$_POST['id'];
                            }else
                            {
                                    $sql = "update 35cgncategory set name = '$catname' , parent_id = $parent , 	is_leaf = $is_leaf, url = '$target_file' where id =".$_POST['id'];
                            }
							
                            mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            echo "<script language=\"javascript\">  alert(\"İŞLEM YAPILDI !!\");  window.location.href='category_main.php';</script>"; 
       }
						
		else
		{
			 $id = $_GET['id'];
			 $sql = "select * from 35cgncategory where id = ".$id;
			 $result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"]));
			 $row = mysqli_fetch_array($result);
?>
		
<form name="" method="post" action="modifycat.php" enctype="multipart/form-data">	
<table class="table ">

<tr>
<td>Kategori Adı:<input type="hidden" name="id" value="<?php echo $row['id'];?>" ></td>
<td><input class="form-control" type="text" name="catname" value="<?php echo stripslashes($row['name']);?>"></td>
</tr>

<tr>
					
<td>Üst Kategori</td>
<td><select class="form-control"  name="parent">
				<?php 
				$sql2 = "select * from 35cgncategory where type = 1 or id = 0 ";
				$result2 = mysqli_query($GLOBALS["___mysqli_ston"], $sql2);
				while ($row2 = mysqli_fetch_array($result2)) 
							{
								if($row2['id'] == $row['parent_id'])
									{
									echo "<option value=\"".$row2['id']."\" selected>".$row2['name']."</option>";
									}
								else
									{
									echo "<option value=\"".$row2['id']."\" >".$row2['name']."</option>";
									}
							}
				?>					
</select>
</td>
</tr>



<tr >
<td> <label>Uç (Ürünlerin ekleneceği) Kategori</label></td> 
<td>

<?php 
if ($row['is_leaf'] == 1){
?>

<input name="is_leaf"  type="checkbox" value="1" checked/> 
</td>
</tr>

<?php 
}
else {
?>
<input name="is_leaf"  type="checkbox" value="1" /> 
</td>
</tr>			
						
<?php 
}
?>

<tr>
<td>Kategori Görseli: </br> Daha önce yüklediğiniz görsel sağ tarafta gözterilmektedir. </br>Eğer görsel gösterilmiyorsa kategori için görsel yükleyiniz.</td>
<td><img src="<?php echo $row['url']; ?>"  style="width:200px;height:auto;"></td>

</tr>
<tr>
<td>
<input class="form-control" type="file" value="" name="upload" > <br/>
</td>
<td></td>
</tr>
<tr>

<td>
<button class="btn btn-primary btn-default " type="submit" name="submit">Kaydet</button>
<button class="btn btn-default " onClick="window.location.href='category_main.php'; return false;">Geri Dön</button>
</td>
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

<?php  ob_flush(); ?>