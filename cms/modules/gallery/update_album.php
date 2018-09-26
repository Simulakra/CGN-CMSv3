<?php  
include("../../std/check.php"); 
include("../../std/lmenu.php"); 
include("../../std/cgncon.php"); 
$sql = "select * from 35cgnalbum where id = ".$_GET['id'].""; 
$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
$row = mysqli_fetch_array($result); 
?> 

<div id="page-wrapper">
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">Albüm Adını Düzenle</div>
<div class="panel-body">

<form action="updated_album.php" method="get">
	<label>Albüm Adı:</label>
	<input type="hidden" name="id" value="<?php echo $_GET['id'];?>" maxlength="40">
	<input type="text" name="folder" value="<?php echo $row['folder'];?>" maxlength="40">
	<input type="submit" name="submit" value="Kaydet">
</form>
	
</div>
</div>    
</div> 
</div>   
</div>  
</body>
</html>