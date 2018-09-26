<?php ob_start(); ?>

<?php
include("../../std/check.php");
include ("../../std/lmenu.php");
error_reporting(0);
?>


<div id="page-wrapper">
<div class="row"> 
<div class="col-lg-12"><h1 class="page-header">Haber Yönetimi</h1></div>    
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">Haber Ekle</div>
<div class="panel-body">


	<form name="addnews" method="post" action="upload.php" enctype="multipart/form-data">	
			<table class="table ">
				<tr>		<td>Başlık:</td>				<td><input class="form-control" style="width:400px" type="text" required name="newstitle" maxlength="200"></td>				</tr>
				<tr>		<td>Tarih(YYYY-AA-GG)</td>		<td><input  class="form-control" type="text" name="newsdate" required value="<?php echo (date("Y-m-d ")); ?>" maxlength="40"></td>				</tr>
				<tr>		<td>Anahtar kelimeler:</td>	    <td><input class="form-control" type="text" name="page_keys" size="80">	</td></tr>
				<tr>		<td>Haber resmi:</td>		    <td>		 <input name="userfile" type="file" required />       	</td></tr>
				<tr>		<td colspan="2"><textarea id="editor1" class="ckeditor" required	name="desc"></textarea></td>								</tr>
				<tr>		<td colspan="2">
								<button class="btn btn-primary" type="submit" name="submit">Kaydet</button>
								<button class="btn btn-default "  onClick="window.location.href='index.php'; return false;">Geri Dön</button>
							</td>
				</tr>
			</table>
	</form>

</div>    
</div>    
</div> 
</div>   
</div> 

</body>
</html>
<?php ob_flush(); ?>