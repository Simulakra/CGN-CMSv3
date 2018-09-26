<?php
include("../../std/cgncon.php"); 
include ("../../std/check.php"); 
include("../../std/lmenu.php");
if(!isset($_GET['folder'])){	header("Location: index.php");}
?>


<div id="page-wrapper">
<div class="row">

<div class="col-lg-12"><h1 class="page-header">Albüm Yönetimi- Görseller</h1></div>    
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><b><?php   echo $_GET['name']; ?> </b>içindeki resimler</div>
<div class="panel-body">

<?php  
    $i = 1; 
    $sql = ""; 
    $sql = "select * from 35cgngallery where album = ".$_GET['folder']." order by caption asc;"; 
    $result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
    while($row = mysqli_fetch_array($result)) 
				{ 
					$s_sql="select count(*) as 'count' from 35cgnalbum where id=".$_GET['folder'].
			" and avatar='".$row['link']."'";
			$s_result = mysqli_query($GLOBALS["___mysqli_ston"], $s_sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
			$s_count =mysqli_fetch_array($s_result)['count'];

						echo '<div class="col-lg-3 col-md-4"> 
						<div class="panel panel-default"> 
						<!--     <div class="panel-heading">'.$i.'</div> --> 
						<div class="panelbody slider-list"> 
						<a href="'.$row['link'].'" data-lightbox="Resimler" data-title='.$row['caption'].'>' 
						. '<img slider-list-self src="'.$row['tlink'].'" width="100%" height="auto"></a></div> 
						<div class="panel-footer" style="min-height:40px;">'.$row['caption'].' 
						<a class="tooltips alignright" href="delete_photo.php?id='.$row['id'].'&name='.$_GET['name'].'"><span>Görseli Sil</span><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i> </a> 
						<a  class="tooltips alignright" href="set_album_avatar.php?id='.$row['id'].'&name='.$_GET['name'].'" > <span>Albüm Kapağı Yap</span><i class="fa fa-star';
						if($s_count==0)echo "-o";
						echo ' fa-2x" aria-hidden="true">&nbsp;</i> </a> 
						</div> 
						</div> 
						</div> '; 
					 
						$i++; 
				} 
?> 

</div>       
</div>
</div>      
   
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><?php   echo $_GET['name']; ?> içine yeni görsel ekle</div>
<div class="panel-body">

		<form action="upload.php" method="post" enctype="multipart/form-data">
			<input type="hidden" value="<?php echo $_GET['folder'];?>" name="folder" ><br/>
			<input type="hidden" value="<?php echo $_GET['name'];?>" name="name" >
			<label>Görsel yazısı:</label>
			<input type="text" value="" name="caption"  maxlength="240" ><br/><br/>
			<input type="file"   class="btn btn-default" value="" name="upload[]" multiple> <br/>
			<input type="submit"  class="btn btn-primary"  value="Görselleri <?php echo $_GET['name']?> içine ekle" />
			<button class="btn btn-default "  onClick="history.go(-1)">Geri Dön</button>
		</form>
	<br/>	
<small>
<div class="alert alert-warning">
Bu albümler şuan sitenizde yayınlanmaktadır.Albümlere ekleyeceğiniz görseller otomatik küçültülür, en iyi görüntülenme için 1200px - boy 800 px i geçmemelidir. 
</div>
</small>

</div>  
</div> 
</div>  
</div>  		
</div>    
</body>
</html>