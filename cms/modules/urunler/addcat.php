<?php ob_start(); ?>
<?php
include("../../std/cgncon.php");
include ("../../std/check.php"); 
include ("../../std/lmenu.php");
error_reporting(0);
?>



<div id="page-wrapper">
<div class="row">
<div class="col-lg-12"><h1 class="page-header">Ürün Kategorisi Ekleme</h1></div> 
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

		$sql = "insert into 35cgncategory (name, parent_id,  is_leaf, type) VALUES ('$catname', $parent, $is_leaf, 1 )";
		mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"]));
		$id = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
		
		$target_dir = "katresim/".$id."/";
		mkdir($target_dir, 0777, true);
		$target_file = $target_dir . basename($_FILES["upload"]["name"]);
				
		 header("Location: category_main.php"); 
		}
else{
                   	
?>
		
<form  name="" method="post" action="addcat.php" enctype="multipart/form-data">	
<table class="table ">
			
<tr>
<td>Kategori Adı:</td>
<td><input class="form-control" type="text" name="catname" required ></td>
</tr>
				
<tr>
<td>Üst Kategori</td>
<td><select class="form-control" name="parent">

<?php 

$sql = "select * from 35cgncategory where type = 1 and parent_id=0 or id=0  ";
$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
$i = 0;
				while ($row = mysqli_fetch_array($result)) 
				{
				echo "<option value=\"".$row['id']."\">".$row['name']."</option>";
				}
?>					
</select>
</td>
</tr>				
<tr>
<td> <label>Bu kategorinin altına ürün ekle</label></td> 
<td> <input name="is_leaf"  type="checkbox" value="1" /> </td>
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