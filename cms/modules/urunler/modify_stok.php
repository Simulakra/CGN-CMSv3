<?php ob_start(); ?>
<?php
include ("../../std/cgncon.php");
include ("../../std/check.php"); 
include ("../../std/lmenu.php");
error_reporting(0);
?>

<div id="page-wrapper">
<div class="row">
<div class="col-lg-12"><h1 class="page-header">Ürünler</h1></div> 
<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-body">
		<form method="POST">
			<table class="table">
				<tr>
					<td>
						<div class="col-6">
							<label>Miktar:</label>
							<input class="form-control" type="number" name="miktar" value="0">
						</div>
					</td>
					<td>
						<div class="col-6">
							<label>Ürün Barkodu:</label>
							<input class="form-control" type="text" name="barkod" value="<?php if(isset($_GET['id']))echo $_GET['id'];?>">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<button class="btn btn-primary btn-default" formaction="stokislem/stokduzen.php"><i class="fa fa-plus"></i> Stok Giriş</button>
						<button class="btn btn-primary btn-default" formaction="stokislem/stokduzen.php?uruncikar=1"><i class="fa fa-minus"></i> Stok Çıkış</button>
					</td>
				</tr>
			</table>
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