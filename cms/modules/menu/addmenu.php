<?php ob_start(); ?>
<?php
include("../../std/cgncon.php");
include ("../../std/check.php");
include ('../../std/lmenu.php');
error_reporting(0);
?>
	
<div id="page-wrapper">
<div class="row">
<div class="col-lg-12"><h1 class="page-header">Menü  & Sayfa Yönetimi / Menü Ekle</h1></div> 
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-body">
<?php 

if(isset($_POST['submit'])) 
{ 
    $sql = ""; 

    if($_POST['menuname'] != "" && $_POST['menu_rank']!= "") 
    { 
        $menuname = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['menuname']); 
        $menu_rank = $_POST['menu_rank']; 
        $menu_title = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['menu_title']); 
        $menu_keys = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['menu_keys']); 
        $context  =$_POST['editor1']; 
        $page_description = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['page_description']); 

        $sql = "INSERT INTO 35cgnmenu VALUES ( NULL,'".$menuname."','1',".$menu_rank.",'".$context."','".$menu_title."','".$menu_keys."','".$menu_keys."', 0)"; 

        mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
        ((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
        echo "<script language=\"javascript\">  alert(\"İŞLEM YAPILDI !!\");  window.location.href='page.php';</script>";  
    } 
    else 
    { 
        ((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
    } 
} 
else 
{ 
} 
    ?> 
	  
<form action="addmenu.php" method="post">
<table  class="table " border="0">

<tr><td>Menu adı:</td><td><input class="form-control" type="text" name="menuname" maxlength="40"></td></tr>

<tr><td>Sıralama:</td><td><input class="form-control" type="number" name="menu_rank" maxlength="40" required></td></tr>	

<tr><td>Sitede gösterilecek menu adı:</td><td><input class="form-control" type="text" name="menu_title" size="80" ></td></tr>	

<tr><td>Sayfa için anahtar kelimeler:</td><td><input  class="form-control" type="text" name="menu_keys" size="80"></td></tr>	

<tr><td>Sayfanın tanımı:</td><td><input class="form-control" type="text" name="page_description" size="80"></td></tr>

<tr><td>İçerik:</td><td></td></tr>

<tr><td colspan="2"><textarea class="ckeditor" id="editor1" name="editor1"></textarea></td></tr>

<tr><td colspan="2" >
<button class="btn btn-primary btn-default " type="submit" name="submit">Kaydet</button>
<button class="btn btn-default btn-default " name="back" onClick="window.location.href='page.php'; return false;">Geri Dön</button>
</td></tr>

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