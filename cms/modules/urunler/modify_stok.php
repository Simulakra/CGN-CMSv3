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

			<table class="table">
				<tr>
					<td>
						<div class="col-6">
							<label>Miktar:</label>
							<input class="form-control" type="" name="">
						</div>
					</td>
					<td>
						<div class="col-6">
							<label>Ürün Barkodu:</label>
							<input class="form-control" type="" name="">
						</div>
					</td>
				</tr>
			</table>
			<div class="col-12">
				<a class="btn btn-primary btn-default " href=""><i class="fa fa-plus"></i> Stok Giriş</a>
				<a class="btn btn-primary btn-default " href=""><i class="fa fa-minus"></i> Stok Çıkış</a>
			</div>


		</div>
	</div>
</div>
</div>
</div>
</div>
		
</body>
</html>
<?php ob_flush(); ?>