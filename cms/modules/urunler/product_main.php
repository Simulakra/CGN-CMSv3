<?php ob_start(); ?>
<?php
include ("../../std/cgncon.php");
include ("../../std/check.php"); 
include ("../../std/lmenu.php");
error_reporting(0);
?>

<div id="page-wrapper">
<div class="row">
<div class="col-lg-12"><h1 class="page-header">Ürünler
<a class="btn btn-primary btn-default" href="modify_stok.php" style="float: right;"><i class="fa fa-dropbox fa-lg"aria-hidden='true'></i> Hızlı Stok Giriş</a>
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" style="float: right;"><i class="fa fa-assistive-listening-systems"></i> Stok Alarmları</button></h1> </div>
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-body">
	<?php
		$i = 1;
		echo "<table class=\"table table-striped\">";
		echo "<thead style=\"font-weight:bold\"><tr><th>Ürün Adı</th><th>Kategori</th><th>Tanım</th><th>Stok</th><th>Seçim</th></tr></thead>";
		$sql2 = "SELECT * FROM 35cgnproduct where type = 1";
		$result2 = mysqli_query($GLOBALS["___mysqli_ston"],  $sql2 );
		$i = 0;
		while ( $row2 = mysqli_fetch_array( $result2 ) ) {
			
			$id = $row2 ['id'];
			$title = $row2 ['name'];
			$parent = $row2 ['parent_id'];
			$desc = $row2 ['desci'];			
			$stok = $row2 ['stok'];			

			$uzunluk = strlen($desc);
			if ($uzunluk>40){
				$desc = mb_substr($desc,0,40) ;
				$desc = $desc . "....";
			}

			$desc = strip_tags($desc);
			
			$sql3 = "select * from 35cgncategory where id = ".$parent;
			$result3 = mysqli_query($GLOBALS["___mysqli_ston"], $sql3);
			$row3 = mysqli_fetch_array( $result3 );
			
			echo "<tr>
						<td>".$title."</td>
						<td>".$row3['name']."</td>
						<td>".$desc."</td>
						<td>".$stok."</td>
						<td>
						<a class='tooltips' href='modify_stok.php?id=".$id."'>
						<span>Stok Takibi</span>
						<i class=\"fa fa-dropbox fa-lg\" 'aria-hidden='true'>&nbsp;</i></a>
						<a class='tooltips'  href = 'modifyproduct.php?id=".$id."' >	
						<span>Ürünü Düzenle</span>	
						<i class=\"fa fa-pencil fa-lg\" 'aria-hidden='true'>&nbsp;</i></a>
						<a class='tooltips' href = 'delproduct.php?id=".$id."'>			
						<span>Ürünü Sil</span>				
						<i class=\"fa fa-trash-o fa-lg\" 'aria-hidden='true'>&nbsp;</i></a>
						</td>
						</tr>";
			}
		echo "</table>";
		echo " </br><div id='divbuttons'>";
		echo "<form action=\"addproduct.php\"><table border='0'>";
		echo "	<input type=\"submit\" class=\"btn btn-primary\" name=\"button\" id=\"add\" value=\" Yeni Ürün Ekle\" />";
		echo "</table></form>";
		echo "</div>";
		
		//((is_null($___mysqli_res = mysqli_close( $con ))) ? false : $___mysqli_res);
	?>

</div>
</div>
</div>
</div>
</div>
</div>




<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-assistive-listening-systems"></i> Stok Alarmları</h4>
      </div>
      <div class="modal-body">
      	<?php
      	$sql = "SELECT 35cgnproduct.name,35cgnproduct.stok,35cgnproductalarm.stoklimit FROM 35cgnproduct, 35cgnproductalarm WHERE 35cgnproduct.stok < 35cgnproductalarm.stoklimit AND 35cgnproduct.id=35cgnproductalarm.id";
				$res = mysqli_query($GLOBALS["___mysqli_ston"],  $sql);
				$bildirimvar=false;
				while ( $row = mysqli_fetch_array($res) ) {
					$bildirimvar=true;
					echo '<p>Ürün Adı:'.$row['name'].'<br>Stok Adedi:'.$row['stok'].'<br>Stok Alarmınız:'.$row['stoklimit'].'</p>';
				}
				if(!$bildirimvar) echo '<p>Stok kayıtlarınızda tetiklenen bir alarm bulunmamaktadır.</p>'.$sql;
      	?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
      </div>
    </div>
    <?php
    if ($bildirimvar){
    	echo '<script>
			$(document).ready(function(){
			    // Show the Modal on load
			    $("#myModal").modal("show");
			});
			</script>';
    }
    ?>
  </div>
</div>


</body>
</html>
<?php ob_flush(); ?>