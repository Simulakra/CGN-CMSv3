<?php
include("../../std/check.php");
include("../../std/lmenu.php");
include("../../std/cgncon.php"); 
if (!isset($_GET['albumname'])) {    header("Location: index.php");}
?>

<div id="page-wrapper">
<div class="row"> 
<div class="col-lg-12"><h1 class="page-header">Projeler Yönetimi / Proje Görselleri</h1></div>
		
 <div class="col-lg-12">		
<div class="panel panel-default">
<div class="panel-heading"><b><?php echo $_GET['name']; ?> </b>içindeki görseller</div>
<div class="panel-body">
<?php 
$i = 1; 
$sql = ""; 
$sql = "select * from 35cgnprojectdetail where ref_id = " . $_GET['albumname'] . " order by id asc;"; 
$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
		while ($row = mysqli_fetch_array($result)) 
		{ 
			$s_sql="select count(*) as 'count' from 35cgnprojects where id=".$row['ref_id'].
			" and filename='".$row['link']."'";
			$s_result = mysqli_query($GLOBALS["___mysqli_ston"], $s_sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
			$s_count =mysqli_fetch_array($s_result)['count'];

				echo '<div class="col-lg-3 col-md-4"> 
				<div class="panel panel-default"> 
				<div class="panel-heading">' . $i . '</div> 
				<div class="panelbody slider-list"> 
				<a class="slider-list-img" href="' . $row['link'] . '" data-lightbox="Resimler" data-title=' . $row['title'] . '' . ' ><img class="slider-list-self" src="' . $row['link'] . '" width="100%" height="auto"></a></div> 
				<div class="panel-footer" style=min-height:30px;>' . $row['title'] . ' 
				<a class="tooltips alignright" href="delete_project_photo.php?id=' . $row['id'] . '&name=' . $_GET['name'] . '"><span>Görseli Sil</span><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a> 
				<a class="tooltips alignright" href="set_project_avatar.php?id=' . $row['id'] . '&name=' . $_GET['albumname'] . '"   class="tooltips" data-toggle="tooltip" data-placement="right"> 
				<i class="fa fa-star';
				if($s_count==0) echo "-o";
				echo ' fa-2x" aria-hidden="true">&nbsp;</i> <span>Albüm kapağı yap</span> </a> 
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
                <div class="panel-heading"><?php echo $_GET['name']; ?> içine yeni görsel ekle</div>
                <div class="panel-body">

                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" value="<?php echo $_GET['albumname']; ?>" name="albumname"><br/>
                        <input type="hidden" value="<?php echo $_GET['name']; ?>" name="name"><br/>
                        <label>Görsel yazısı:</label>
                        <input type="text" value="" name="title" maxlength="240"><br/><br/>
                        <input type="file" value="" name="upload[]" multiple> <br/>
                        <input type="submit" class="btn btn-primary" value="Görseli <?php echo $_GET['name'] ?> içine ekle"/>
                        <button class="btn btn-default " onClick="window.location.href='index.php'; return false;">Geri Dön</button>
                    </form>
                        
                </div>
            </div>
        </div>
		
    </div>
</div>
</body>
</html>