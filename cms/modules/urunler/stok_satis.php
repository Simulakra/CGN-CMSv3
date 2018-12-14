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
}
?>
<div id="page-wrapper">
<div class="row">
<div class="col-lg-12"><h1 class="page-header">Ürünler
<?php if(isset($_GET['id'])) echo " - ".$productname; ?>
<a class="btn btn-primary btn-default" href="product_main.php" style="float: right;"><i class="fa fa-undo fa-lg"aria-hidden='true'></i> Geri</a></h1></div> 
<div class="col-lg-12">

<ul class="nav nav-tabs">
  <li><a href="modify_stok.php<?php if(isset($_GET["id"])) echo "?id=".$_GET["id"];?>"><i class="fa fa-dropbox"></i> Hızlı Stok Giriş/Çıkış</a></li>
  <li><a href="stok_alis.php<?php if(isset($_GET["id"])) echo "?id=".$_GET["id"];?>"><i class="fa fa-cart-arrow-down"></i> Fatura ile Ürün Alışı</a></li>
  <li class="active"><a href="#"><i class="fa fa-shopping-bag"></i> Ürün Satışı</a></li>
</ul>

	<div class="panel panel-default">
		<div class="panel-body">
			<form method="POST">
				<table class="table">
					<tr>
						<td>
							<label>Adedi:</label>
							<input class="form-control" type="number" min="0" value="0" name="adet">
						</td>
						<td>
							<label>Ürün Barkodu:</label>
							<input class="form-control" type="" name="barkod" value="<?php if(isset($_GET['id'])) if(isset($barkod)) echo $barkod; else echo $_GET['id'];?>">
						</td>
					</tr>
					<tr>
						<td>
							<label>Giriş Tutarı:</label>
							<input class="form-control" type="number" min="0" value="0" name="tutar">
						</td>
						<td>
							<label>İskonto Oranı:</label>
							<input class="form-control" type="" name="iskonto">
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td>
						</td>
					</tr>
				</table>
				<button type="submit" class="btn btn-primary" name="button" id="add">
					<i class="fa fa-minus"></i> Satışı Stoktan Çıkar</button> 
			</form>
		</div>
	</div>

</div>
</div>
</div>
</div>
		
</body>
</html>
<?php ob_flush(); ?>