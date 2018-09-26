<?php ob_start(); ?>
<?php
include ("../../std/check.php");
include ('../../std/lmenu.php');
include("../../std/cgncon.php");
error_reporting(0);
?>

	
<div id="page-wrapper">
<div class="row">
<div class="col-lg-12"><h1 class="page-header">Sayfa Yönetimi / Sayfa Düzenle</h1></div> 
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-body">
<?php 
        if(isset($_POST['submit'])) 
        { 
                $id = $_POST['onself']; 
                $pagename = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['pagename']); 
                $menu_id = $_POST['selection']; 
                $context  =mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $_POST['editor1']); 
                $page_title = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['page_title']); 
                $page_keys = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['page_keys']); 
                $page_description = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['page_description']); 
                $rank = $_POST['page_rank']; 
                $sql = "select menu_id from 35cgnmenu where menu_name = '".$menuname."'"; 
                $result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
                $info = mysqli_fetch_array( $result ); 
                $sql = "UPDATE 35cgnpage SET  page_name = '".$pagename."' , page_context= '".$context."', page_rank = '".$rank."', page_title = '".$page_title."', keywords = '".$page_keys."', description = '".$page_description."' WHERE page_id = '".$id. "'";

                mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
                ((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
                echo "<script language=\"javascript\">  alert(\"İŞLEM YAPILDI !!\");  window.location.href='page.php';</script>";  

        } 
        else 
        { 

        $pageid = $_GET['page']; 
        $fromdb = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM 35cgnpage WHERE page_id = ".$pageid); 
        $info = mysqli_fetch_array( $fromdb ); 
		((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
		}
?> 
	
	
<form name="modifypage" method="post" action="modifypage.php">
		
		<table class="table " border="0">
		<tr>
		<td>Sayfa Adı:</td>
		<td>
		<input class="form-control" type="hidden" name="onself" value="<?php echo "$info[page_id]"; ?>"> <input class="form-control" type="text" name="pagename" value="<?php echo "$info[page_name]"; ?>" maxlength="40">
		</td>
		</tr>
		<tr>
		<td>Menu:</td>
		<td>
		<div id = "menus">
		
<?php         
$sql = ""; 
$sql = "SELECT menu_id, menu_name FROM 35cgnmenu"; 
$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql); 
echo "<select class=\"form-control\" name = \"selection\">"; 
while($roww = mysqli_fetch_array($result)) 
{ 
	if($roww['menu_id'] == $info['menu_id']) 
	{ 
		echo "<option selected = \"selected\" value = \"".$roww['menu_id']."\">".$roww['menu_name']."</option>"; 
	} 
	else 
	{ 
		echo "<option value = \"".$roww['menu_id']."\" >".$roww['menu_name']."</option>"; 
	} 


} 
echo "</select>"; 
?> 
		
		</div></td>
		</tr>
		 
		<tr>
		<td>Sıralama:</td>
		<td><input class="form-control" type="number" name="page_rank" value="<?php echo $info['page_rank']; ?>" maxlength="40" required></td>
		</tr>
			<tr><td>Sayfada görüntülenecek başlık:</td><td>
	<input class="form-control" type="text" name="page_title" size="80" value="<?php echo $info['page_title']; ?>" >
	</td></tr>	
	<tr><td>Sayfada görüntülenecek anahtar kelimeler:</td><td>
	<input class="form-control" type="text" name="page_keys" size="80" value="<?php echo $info['keywords']; ?>" >
	</td></tr>	
	
	<tr><td>Sayfanın tanımı:</td><td>
	<input class="form-control" type="text" name="page_description" size="80" value="<?php echo $info['description']; ?>"  >
	</td></tr>
	
	
		<tr>
		<td>İçerik:</td><td></td>
		</tr>
	
		<tr>
		<td colspan="2">
		<textarea class="ckeditor" id="editor1" name="editor1">		<?php echo $info['page_context']; ?>		</textarea>

		</td>
		</tr>
		
		<tr>
		<td colspan="2">
<button class="btn btn-primary" type="submit" name="submit">Kaydet</button>
<button class="btn btn-default "  onClick="window.history.go(-1);return false;">Geri Dön</button>
		</td>
		</tr>

		</table>

</form>

<?php

}
?>
			</div>
			<!-- panel body -->
			</div>
            <!-- panel default -->
		</div>
		<!-- /.col-lg-12 -->

	</div>
	<!-- /#row -->
</div>
<!-- /#page-wrapper -->

</body>
</html>
<?php ob_flush(); ?>