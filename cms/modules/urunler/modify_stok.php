<?php ob_start(); ?>
<?php
include ("../../std/cgncon.php");
include ("../../std/check.php"); 
include ("../../std/lmenu.php");
error_reporting(0);
?>
<?php
if(isset($_GET['id'])){	
	$sql = "SELECT name FROM 35cgnproduct WHERE id=".$_GET['id'];
	$res = mysqli_query($GLOBALS["___mysqli_ston"],  $sql);
	if($row = mysqli_fetch_array($res)){
		$productname=$row['name'];
	}

	$sql = "SELECT * FROM 35cgnproductbarkod WHERE id=".$_GET['id'];
	$res = mysqli_query($GLOBALS["___mysqli_ston"],  $sql);
	if($row = mysqli_fetch_array($res)){
		$barkod=$row['barkod'];
	}
	
	$sql = "SELECT * FROM 35cgnproductalarm WHERE id=".$_GET['id'];
	$res = mysqli_query($GLOBALS["___mysqli_ston"],  $sql);
	if($row = mysqli_fetch_array($res)){
		$alarmset=true;
		$alarmlimit=$row["stoklimit"];
	}
}
?>
<div id="page-wrapper">
<div class="row">
<div class="col-lg-12"><h1 class="page-header">Ürünler
<?php if(isset($_GET['id'])) echo " - ".$productname; ?>
<a class="btn btn-primary btn-default" href="product_main.php" style="float: right;"><i class="fa fa-undo fa-lg"aria-hidden='true'></i> Geri</a></h1></div> 
<div class="col-lg-12">

<ul class="nav nav-tabs">
  <li class="active"><a href="#"><i class="fa fa-dropbox"></i> Hızlı Stok Giriş/Çıkış</a></li>
  <li><a href="stok_alis.php<?php if(isset($_GET["id"])) echo "?id=".$_GET["id"];?>"><i class="fa fa-cart-arrow-down"></i> Fatura ile Ürün Alışı</a></li>
  <li><a href="stok_satis.php<?php if(isset($_GET["id"])) echo "?id=".$_GET["id"];?>"><i class="fa fa-shopping-bag"></i> Ürün Satışı</a></li>
</ul>

	<div class="panel panel-default">
		<div class="panel-body">
		<form method="POST">
			<table class="table">
				<tr>
					<td>
						<div class="col-6">
							<label>Miktar:</label>
							<input class="form-control" type="number" min="0" name="miktar" value="0">
						</div>
					</td>
					<td>
						<div class="col-6">
							<label>Ürün Barkodu:</label>
							<input class="form-control" type="text" name="barkod" value="<?php if(isset($_GET['id'])) if(isset($barkod)) echo $barkod; else echo $_GET['id'];?>">
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<center>
						<button class="btn btn-primary btn-default" formaction="stokislem/stokduzen.php"><i class="fa fa-plus"></i> Stok Giriş</button>
						<button class="btn btn-primary btn-default" formaction="stokislem/stokduzen.php?uruncikar=1"><i class="fa fa-minus"></i> Stok Çıkış</button>
						</center>
					</td>
				</tr>
			</table>
		</form>
		<?php
		if( isset($_GET['id']) ){
			echo '<div class="col-12">
			<h2>Ürün Stok Ayarları</h2>
		<table class="table">
			<tr>
				<td>
					<h4>Barkod Düzenlemeleri</h4>
					<form method="POST">
					<label>Barkod Ekle:</label>
					<input class="form-control" type="text" name="barkod" value="'.$barkod.'">
					<button class="btn btn-primary btn-default" formaction="stokislem/stokbarkod.php?id='.$_GET["id"].'" style="float: right;">
					<i class="fa fa-barcode"></i> Barkodu Kaydet</button>
					</form>
				</td>
				<td>
					<form method="POST">
					<h4>Stok Alarmı</h4>
					<input type="checkbox" name="stokalarm" ';
					if($alarmset) echo "checked"; 
					echo '> <strong>Alarm Aktif</strong> 
					<button class="btn btn-primary btn-default" formaction="stokislem/stokalarm.php?id='.$_GET["id"].'" style="float: right;">
					<i class="fa fa-assistive-listening-systems"></i> Alarm Ayarlarını Kaydet</button><br><br>
					<label>Belirtilen limitin altına düşünce haber versin:</label>
					<input class="form-control" type="number" name="miktar" min="1" value="';
					if(isset($alarmlimit)) echo $alarmlimit; else echo "1"; 
					echo '">
					</form>
				</td>
			</tr>
		</table>
		</div>';
		}
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