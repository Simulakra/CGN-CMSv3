<?php
include ("../../std/check.php"); 
include ("../../std/lmenu.php");
include("../../std/cgncon.php");
error_reporting(0);
?>

<div id="page-wrapper">
<div class="row"> 
<div class="col-lg-12"><h1 class="page-header">Proje Yönetimi</h1></div>    
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-body">

<?php  
    $sql = ""; 
    $sql = "select * from 35cgnprojects where id > 0;"; 
    $result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
    while($row = mysqli_fetch_array($result)) 
				{ 
					echo '<div class="col-lg-3 col-md-4"> 
					<div class="panel panel-default"> 
					<div class="panel-heading">'.$row['albumname'].'</div> 
					<div class="panel-body"><a href="view.php?albumname='.$row['id'].'&name='.$row['albumname'].'"><img src="'.$row['filename'].'" width="100%" height="145px"></a></div> 
					<div class="panel-footer" style="min-height:30px;">'.date_format(date_create($row['update']),'d-m-Y').'<a class="tooltips alignright" href="delete_project.php?id='.$row['id'].'" > 
					<span>Projeyi Sil</span> <i class="fa fa-trash-o fa-lg" aria-hidden="true"></i> </a></div>                    
					</div> 
					</div> '; 
				} 
?> 

</div>
<small> <div class="alert alert-warning">
Bu projeler şuan sitenizde yayınlanmaktadır. Projelere ekleyeceğiniz görseller otomatik küçültülür,  en iyi görüntü için en 800px - boy 500 px i geçmemelidir. </div>  </small>
</div>
</div>    

<div class="col-lg-12">
<form action="add_project.php" method="get">
<label>	Yeni Referans Adı: </label>
<input type="text" name="albumname" required><br>
<label> Referans Detayları:</label>
<input type="text" name="refInfo" required><br><br>
<input type="submit" class="btn btn-primary" value="Yeni Proje Ekle">
</form>
</div>
</div>    
</div>
</body>
</html>