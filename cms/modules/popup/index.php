<?php
ob_start(); 
        include("../../std/cgncon.php");
		include ("../../std/check.php");
		include("../../std/lmenu.php");
?>
<?php  
$sql2 = "select  videolink from 35cgnpopup"; 
$fromdb = mysqli_query($GLOBALS["___mysqli_ston"], $sql2) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
mysqli_query($GLOBALS["___mysqli_ston"], $sql2) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 

$sql3 = "select * from 35cgnpopup"; 
$show = mysqli_query($GLOBALS["___mysqli_ston"], $sql3) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
mysqli_query($GLOBALS["___mysqli_ston"], $sql3) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 

$showpopupstat = mysqli_fetch_array($show); 
$info = mysqli_fetch_array($fromdb); 
?> 


<div id="page-wrapper">
<div class="row"> 
<div class="col-lg-12"><h1 class="page-header">Pop Up Duyuru Yönetimi</h1></div>   
<div class="col-lg-6">
<div class="panel panel-default">
<div class="panel-body">
<form action="setpopup.php" method="post">

<?php 
	 
	if ($showpopupstat[showpopup] ==1) 
		{ 
	echo'<small><div class="alert alert-warning">Popup durumu : YAYINDA </div></small>';	
		} 	
	else
		{ 
	echo'<small><div class="alert alert-warning">Popup durumu: YAYINDA DEĞİL </div></small>';	
		} 	
	
?> 
<div class="radio">  <label><input type="radio"  name="showpopup"  value="1">Pop Up duyuruyu yayınla</label></div>
<div class="radio">  <label><input type="radio"  name="showpopup" value="0">Pop Up duyuruyu yayından kaldır</label></div><br/>

<button  class="btn btn-default " type="submit" name="submit">Seçimi Kaydet</button>

</form>
</div>      
</div>
</div> 



<div class="col-lg-6">
<div class="panel panel-default">
<div class="panel-body">

<?php 
	if ($showpopupstat[showpopup] ==1) 
		{ 
			if ($showpopupstat[grfx] ==1) 
				{ 
			echo'<small><div class="alert alert-warning">Pop Up türü : GÖRSEL </div></small>';	
				} 	
			else{}

				if ($showpopupstat [video] ==1) 
				{ 
			echo'<small><div class="alert alert-warning">Pop Up türü: VIDEO </div></small>';	
				} 	
				else{}
		 } 
	else
		{	echo'<small><div class="alert alert-warning">Pop Up YAYINDA DEĞİL </div></small>';	
			echo "<script language=\"javascript\">  alert(\"HATA > ÖNCE DUYURUYU YAYINLAYIN!\"); </script>";
		}		 
?> 

<form action="setpopuptype.php" method="post">
<div class="radio">  <label><input type="radio" name="radio" value="1">Görsel yayınla</label></div>
<div class="radio">  <label><input type="radio" name="radio" value="2">Video yayınla</label></div><br/>
<button  class="btn btn-default " type="submit" name="submit">Seçimi Kaydet</button>
</form>
</div>      
</div>
</div> 


 <div class="col-lg-6">
<div class="panel panel-default">
<div class="panel-heading">Pop Up için görsel </div>
<div class="panel-body">    

<?php  
$sql = "select grfxlink from 35cgnpopup;"; 
$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
$row = mysqli_fetch_array($result);
echo ' 
<div class="col-lg-12"> 
<div class="panel panel-default"> 
<div class="panel-body uppop"> 
<a href="'; echo $row['grfxlink']; echo '" data-lightbox="Resimler" data-title='.$output.''.' > 
<img src="'; echo $row['grfxlink']; echo '"  width="100%"  height="auto"> 
</a> 
</div> 
</div>  
</div>  
'; 
?> 
	
<form action="upload.php"  enctype="multipart/form-data"  method="POST">
		 <input name="popupgrfx" type="file" required /><br/>
        <button  class="btn btn-default " type="submit" name="submit">Yeni Görsel Ekle</button>
        <?php 
        	header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
			header("Pragma: no-cache"); // HTTP 1.0.
			header("Expires: 0");
        ?>
</form>
    
</div>  
</div> 
</div>  

<div class="col-lg-6">
<div class="panel panel-default">
<div class="panel-heading">Pop Up için video </div>
<div class="panel-body">
				
<form name="" method="post" action="savevideolink.php" enctype="multipart/form-data">

<table class="table ">
<tr>
<td>Video Linki:</td>
<td><input class="form-control" type="text" name="videolink" value="<?php echo $info[videolink]; ?>" maxlength="100"></td>
</tr>

<tr>
<td>Video Önizleme:</td>
<td><iframe width="275" height="150" src="<?php echo $info[videolink]; ?>" frameborder="0" data-gal="prettyPhoto[rt_theme_portfolio]" class="imgeffect play" allowfullscreen></iframe>
</td>
</tr>

<tr>
<td>
<button class="btn btn-primary " type="submit" name="submit"> Videoyu Düzenle</button>
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