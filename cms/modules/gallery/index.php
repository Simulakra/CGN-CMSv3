<?php
include("../../std/cgncon.php");
include ("../../std/check.php"); 
include ("../../std/lmenu.php");
error_reporting(0);
?>

<div id="page-wrapper">
<div class="row">
<div class="col-lg-12"><h1 class="page-header">Resim Galerisi Yönetimi - Albümler</h1></div>    
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-body">

<?php  
    $sql = ""; 
    $sql = "select * from 35cgnalbum where id > 0;"; 
    $result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
    while($row = mysqli_fetch_array($result)) 
				{ 
					echo '<div class="col-lg-3 col-md-4"> 
						<div class="panel panel-default"> 
							<div class="panel-heading"><b>'.$row['folder'].'</b></div> 
							<div class="panel-body"><a href="view.php?folder='.$row['id'].'&name='.$row['folder'].'"><img src="'.$row['avatar'].'" width="100%" height="145px;"></a></div> 
							<div class="panel-footer" style=min-height:30px;>'.date_format(date_create($row['createdate']),'d-m-y').'<a class="tooltips alignright" href="delete_album.php?id='.$row['id'].'" > 
							<span>Albümü Sil</span> <i class="fa fa-trash-o fa-2x" aria-hidden="true"></i> </a><a class="tooltips alignright" href="update_album.php?id='.$row['id'].'" > <span>Düzenle</span>
							<i class="fa fa-pencil fa-2x">&nbsp;</i></a></div>                    
						</div> 
						</div> '; 
				} 
?> 

</div>


              
</div>
</div>    


<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-body">
	<form action="addalbum.php" method="get">
		<label>	Yeni Albüm Adı:</label>
		<input type="text" name="folder" required value="<?php echo $_GET['folder'];?>" maxlength="160">
		<input type="submit"   class="btn btn-primary"  name="submit" value="Kaydet">
	</form>
</div> 
</div> 
</div>  
   
</div> 
</div>       
</body>
</html>