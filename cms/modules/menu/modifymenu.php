<?php ob_start(); ?>
<?php
error_reporting(0);
include("../../std/cgncon.php");
include ("../../std/check.php");
include ('../../std/lmenu.php');
?>
	
<div id="page-wrapper">
<div class="row">
<div class="col-lg-12"><h1 class="page-header">Menü Yönetimi</h1></div> 
<div class="col-lg-12">
<div class="panel panel-default">

<div class="panel-heading">Menü Düzenle</div>

<div class="panel-body">
				

<?php 
if(isset($_POST['submit'])) 
{ 
$id = $_POST['onself']; 
$mname = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['menuname']); 
$mrank = $_POST['menu_rank']; 
$context  = $_POST['editor1']; 
$menu_title = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['menu_title']); 
        $page_description = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['page_description']); 

$menu_keys =mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $_POST['menu_keys']); 
mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE 35cgnmenu SET content='$context', menu_name = '$mname' , menu_show = '1', menu_rank = $mrank,  menu_title = '$menu_title', keywords = '$menu_keys',description = '$page_description' WHERE menu_id = $id ") or die(header("Location: error.php"));

echo "<script language=\"javascript\">  alert(\"DÜZENLEME YAPILDI !!\");  window.location.href='page.php';</script>";  

} 
else 
{ 

$mname = $_GET['menu']; 
$fromdb = mysqli_query($GLOBALS["___mysqli_ston"], "select * from 35cgnmenu where menu_id ='$mname'") or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
$info = mysqli_fetch_array( $fromdb ); 

?> 
		
		
		<form action="modifymenu.php" method="post">
		<table class="table " border="0">
		<tr><td>Menu Adı:</td><td>
		<input type="hidden" name="onself" value ="<?php echo $info['menu_id']; ?>" >
		<input class="form-control" type="text" name="menuname" value ="<?php echo stripslashes( $info['menu_name']);?>" maxlength="40">
		</td></tr>
		<tr><td>Sıralama:</td><td>
		<input class="form-control" type="number" name="menu_rank" value ="<?php echo $info['menu_rank'];?>" maxlength="40" required>
		</td></tr>	
		
		<tr><td>Menüde görüntülenecek sayfanın başlığı:</td><td>
		<input class="form-control" type="text" name="menu_title" size="80" value ="<?php echo stripslashes($info['menu_title']);?>" >
		</td></tr>	
		<tr><td>Menüde görüntülenecek sayfanın anahtar kelimeleri:</td><td>
		<input class="form-control" type="text" name="menu_keys" size="80" value ="<?php echo stripslashes($info['keywords']);?>">
		</td></tr>	
			
	<tr><td>Sayfanın tanımı:</td><td>
	<input class="form-control" type="text" name="page_description" size="80"value ="<?php echo stripslashes($info['description']);?>">
	</td></tr>
	
		<tr>
	<td>İçerik:</td><td></td>
	</tr>
	<tr>
		<td colspan="2">
		  <textarea class="ckeditor" id="editor1" name="editor1"><?php echo $info['content'];?></textarea>
		
		</td>
		</tr>
		<tr><td colspan="2">
<button class="btn btn-primary btn-default " type="submit" name="submit">Kaydet</button>
<button class="btn btn-default" name="submit2" onClick="window.location.href='page.php'; return false;">Geri Dön</button>

			</td></tr>
	</table>
</form>

<?php
}
?>
				</div>
				<!-- /.col-lg-12 -->
			</div>

		</div>
		<!-- page wrapper -->
	</div>
	<!-- wrapper -->
</div>
</body>
</html>
<?php ob_flush(); ?>