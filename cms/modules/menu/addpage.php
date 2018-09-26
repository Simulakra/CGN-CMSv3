<?php ob_start(); ?>
<?php
include("../../std/cgncon.php");
include ("../../std/check.php");
include ('../../std/lmenu.php');
error_reporting(0);

?>

<div id="page-wrapper">
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">Sayfa Yönetimi / Sayfa Ekleme</h1>
<div class="panel-body">

<?php 
        if(isset($_POST['submit'])) 
        { 
            $sql = ""; 

            if($_POST['pagename'] != "" && $_POST['selection'] != "" && $_POST['page_rank'] != "" ) 
                { 
                    $pagename =mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $_POST['pagename']); 
                    $menuname = $_POST['selection']; 
                    $context  = $_POST['editor1']; 
                    $page_rank = $_POST['page_rank']; 
                    $page_title = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['page_title']); 
                    $page_keys = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['page_keys']); 
                    $page_description = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['page_description']); 
                    $sql = "INSERT INTO 35cgnpage VALUES ( NULL,'$pagename','$context','$page_rank','$menuname','$page_title', '$page_keys','$page_description')"; 
                    mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die("Veri eklenemedi!"); 
                    echo "<script language=\"javascript\">  alert(\"DÜZENLEME YAPILDI !!\");  window.location.href='page.php';</script>";  
                   
                } 
            else 
                { 
                    ((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
                } 

        } 
        else 
        { 

?> 

<form name="addpage" method="post" action="addpage.php">
<table class="table " border="0">
<tr>
<td>Sayfa adı:</td>
<td><input class="form-control" type="text" name="pagename" maxlength="40"></td>
</tr>
<tr>
<td>Üst menü:</td>
<td><div id = "menus">
		
<?php 
             
    $sql = ""; 
    $sql = "select menu_id, menu_name from 35cgnmenu"; 
    $result = mysqli_query($GLOBALS["___mysqli_ston"], $sql); 
    echo "<select class=\"form-control\" name = \"selection\" >"; 
    while($row = mysqli_fetch_array($result)) 
        { 
            if($row['menu_id'] == $_GET['menu']) 
            {    echo "<option selected value = \"".$row['menu_id']."\">".$row['menu_name']."</option>";        } 
             
            else 
            {    echo "<option value = \"".$row['menu_id']."\">".$row['menu_name']."</option>";    }  
        } 
    echo "</select>"; 
    } 

?> 
		
</div></td>
</tr>

<tr>
		<td>Sıralama:</td>
		<td><input class="form-control" type="number" name="page_rank" maxlength="40" required></td>
	</tr>
	<tr><td>Sayfa başlığı:</td><td>
	<input class="form-control" type="text" name="page_title" size="80" >
	</td></tr>	
	<tr><td>Sayfa için anahtar kelimeler:</td><td>
	<input class="form-control" type="text" name="page_keys" size="80">
	</td></tr>	
	
	<tr><td>Sayfanın tanımı:</td><td>
	<input class="form-control" type="text" name="page_description" size="80">
	</td></tr>
	<tr>
		<td>İçerik:</td><td></td>
	</tr>
	<tr>
		<td colspan="2"><textarea class="ckeditor" id="editor1" name="editor1"></textarea>
		</td>
	</tr>
	<tr>
<td colspan="2">
<button class="btn btn-primary" type="submit" name="submit">Kaydet</button>
<button class="btn btn-default "  onClick="window.location.href='page.php'; return false;" name="back">Geri Dön</button>

	</td>
	</tr>
</table>
</form>

</div>
<!-- /.col-lg-12 -->
</div>

</div>
</div>
</body>
</html>
<?php ob_flush(); ?>