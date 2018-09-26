<?php ob_start(); ?>
<?php
include("../../std/cgncon.php");
include ("../../std/check.php"); 
include ("../../std/lmenu.php");
error_reporting(0);
?>


<div id="page-wrapper">
<div class="row">
<div class="col-lg-12"><h1 class="page-header">Ürün Kategorileri</h1></div> 
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-body">


<?php
		$i = 1;
		echo "<table class=\"table table-striped\">";
		echo "<thead><tr><th>Kategori Adı</th><th>Üst Kategori</th><th>Seçim</th></tr></thead>";
		$sql2 = "SELECT * FROM 35cgncategory where type = 1 or id = 0 ORDER BY COALESCE(parent_id, id), id";
		$result2 = mysqli_query($GLOBALS["___mysqli_ston"], $sql2) or die(mysqli_error($GLOBALS["___mysqli_ston"]));
		$i = 0;
					while ($row2 = mysqli_fetch_array($result2) ) 
					{
					$cat_id = $row2 ['id'];
					$cat_title =stripslashes($row2 ['name']);
					$cat_parent = $row2 ['parent_id'];	
					
					$sql3 = "select * from 35cgncategory where id = ".$cat_parent;
					$result3 = mysqli_query($GLOBALS["___mysqli_ston"], $sql3);
					$row3 = mysqli_fetch_array($result3 );
					echo "<tr>
								<td>".$cat_title."</td>
								<td>".$row3['name']."</td>
								<td>
								<a  class='tooltips' href = 'modifycat.php?id=".$cat_id."' ><span>Kategoriyi Düzenle</span><i class=\"fa fa-pencil fa-lg\" 'aria-hidden='true'>&nbsp;</i></a>
								<a  class='tooltips'  href = 'delcat.php?id=".$cat_id."'><span>Kategoriyi Sil</span><i class=\"fa fa-trash-o fa-lg\" 'aria-hidden='true'>&nbsp;</i></a>
								</td>
								</tr>";
					}
		echo "</table>";
		
		echo " </br><div id='divbuttons'>";
		echo "<form action=\"addcat.php\"><table border='0'>";
		echo "<input type=\"submit\" class=\"btn btn-primary\" name=\"button\" id=\"add\" value=\"Yeni Kategori Ekle\" />";
		echo "</table></form>";
		echo "</div>";
		
		((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res);

		?>
		
		
</div>
</div>
</div>
</div>
</div>
</div>


</body>
</html>
<?php ob_flush(); ?>