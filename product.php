<?php  
include("libraries/header.php"); 

$id = mysqli_real_escape_string($GLOBALS["___mysqli_ston_user"], $_GET ['id']); 
$sql = 'select * from 35cgnproduct where id = ' . $id; 
$result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die (mysqli_error($GLOBALS["___mysqli_ston_user"]));
$rowx = mysqli_fetch_array($result); 
$title = $rowx[name]; 
?> 

<div id="main-container">
<div class="content">

<?php include("modules/page_hero_area.php"); ?> 

<div class="spacer-20"></div> 

<div class="container"> 
<div class="row"> 

<?php include ('modules/productmenu.php'); ?>

<!--ÜRÜNLER-->
<div class="col-sm-9">
<div class="col-sm-4">
<div class="feature-block text-align-center">
<?php 
echo 	'<a class="magnific-image alignleft" href="cms/modules/urunler/'.$rowx['url']. '" data-gal="prettyPhoto[products]" title="'.$rowx['name'].'">
			<img src="cms/modules/urunler/'.$rowx['url'].'" width="350"height="120" alt="İlan resmi"/> 
			</a> '; 
?> 
</div>
</div>

<div class="col-sm-8">
<p> <?php echo $rowx['page']; ?> </p>
</div>

<div class="spacer-20"></div> 

<div class="col-sm-12">

<ul class="nav nav-tabs" style="height: auto !important">
<li class="active"> <a data-toggle="tab" href="#sampletab2"> Ürün Fotoğrafları </a> </li>
<li> <a data-toggle="tab" href="#sampletab3"> Ürün Detayları </a> </li>
<li> <a data-toggle="tab" href="#sampletab4"> Ek Dökümanlar </a> </li>
</ul>
<?php 
$id = mysqli_real_escape_string($GLOBALS["___mysqli_ston_user"], $_GET ['id']); 
$sql = 'select * from 35cgnproduct where id = ' . $id; 
$result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die (mysqli_error($GLOBALS["___mysqli_ston_user"]));
$rowx = mysqli_fetch_array($result); 

$dizin = "cms/modules/urunler/urunresim/".$rowx['id'].""; 
$tutucu = opendir($dizin);  
while($dosya = readdir($tutucu))
{  
$resim = $dosya;  
} 

closedir($tutucu);  
$limit = 1; 
?> 

<div class="tab-content">

<div id="sampletab2" class="tab-pane active">
<?php
$parts = explode ( ";", $rowx ['urls'] );
$n = count ( $parts );

echo "<ul class='sort-destination isotope project-items' data-sort-id='projects' style='position: relative; overflow: hidden;'>";

for($i = 0; $i < $n-1; $i ++)
{
if ($rowx ['type'] == 1) 
	{
	echo "<li class='col-sm-12 col-md-3 col-xs-12 grid-item project-grid-item paving format-standard isotope-item'>";
	echo '<a class="magnific-image alignleft" href="cms/modules/urunler/'.$parts[$i]. '" data-gal="prettyPhoto[products]" title="ürün resmi"> <img src="cms/modules/urunler/'.$parts[$i].'" width="100%" height="120" alt="ürün resmi"/></a> ';
	} 
else 
{
	echo "<li class='col-sm-12 col-md-3 col-xs-12 grid-item project-grid-item paving format-standard isotope-item'>";
	echo '<a class="magnific-image alignleft" href="cms/modules/urunler/'.$parts[$i]. '" data-gal="prettyPhoto[products]" title="ürün resmi"> <img src="cms/modules/urunler/'.$parts[$i].'" width="100%" width="120" alt="ürün resmi"/></a> ';
}

echo "</li>";
}
echo "</ul>";
?>

<div class="clear"></div>
</div>

<div id="sampletab3" class="tab-pane">
<?php echo $rowx['desci'];?>
<div class="clear"></div>
</div>
<div id="sampletab4" class="tab-pane">

<?php
$partsf = explode ( ";", $rowx['files']);
$f = count ( $partsf );

echo "<ul class=\"productlifes\">";

 for($i = 0; $i < $f-1 ; $i ++)
		{
			
			$path=$partsf [$i];
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			

		if ($ext == "xlsx")
		{echo "<li><a href=\"cms/modules/urunler/".str_replace(' ', '',$partsf [$i])."\"><img src=\"images/assets/excel.png\"></a></td><td align=\"center\" width=\"400px\">" .basename($partsf [$i]). "</li>";	}

		else if ($ext == "xls")
		{echo "<li><a href=\"cms/modules/urunler/".str_replace(' ', '',$partsf [$i])."\"><img src=\"images/assets/excel.png\"></a></td><td align=\"center\" width=\"400px\">" .basename($partsf [$i]). "</li>";	}

		else if ($ext == "pdf")
		{echo "<li><a href=\"cms/modules/urunler/".str_replace(' ', '',$partsf [$i])."\"><img src=\"images/assets/pdf.png\"></a></td><td align=\"center\" width=\"400px\">".basename($partsf [$i])."</li>";	}

		else if ($ext == "docx")
		{echo "<li><a href=\"cms/modules/urunler/".str_replace(' ', '',$partsf [$i])."\"><img src=\"images/assets/word.png\"></a></td><td align=\"center\" width=\"400px\">" .basename($partsf [$i])."</li>";	}

		else if ($ext == "doc")
		{echo "<li><a href=\"cms/modules/urunler/".str_replace(' ', '',$partsf [$i])."\"><img src=\"images/assets/word.png\"></a></td><td align=\"center\" width=\"400px\">" .basename($partsf [$i])."</li>";	}

		else if($ext == "txt")
		{echo "<li><a href=\"cms/modules/urunler/".str_replace(' ', '',$partsf [$i])."\"><img src=\"images/assets/file.png\"></a></td><td align=\"center\" width=\"400px\">".basename($partsf [$i]). "</li>";	}

		else {}	
		
		} 
		
		
if($rowx['video'] !== "") { echo "<li><a href=\"".$rowx['video']."\"><img src=\"images/assets/video.png\"> ürün videosu</a></li>";}
else	if	($rowx['video'] == "") 				 {echo "</ul>";}

echo "</ul>";
?>

</div>
</div>
</div>

</div>
<!--ÜRÜNLER-->
</div>
</div>
</div>
</div>            
<div class="spacer-60"></div>
<?php include("libraries/footer.php"); ?>