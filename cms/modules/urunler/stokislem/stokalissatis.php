<?php
if( isset($_GET['islem']) && isset($_GET['id']) ){
	$islem = $_GET['islem'];
	include '../../../std/cgncon.php';
	if( is_numeric($_POST['adet']) && is_numeric($_POST['tutar']) && is_numeric($_POST['bedelsiz']) ){

		$faturano = $_POST['faturano'];
		$barkod = $_POST['barkod'];
		$iskonto = $_POST['iskonto'];
		$bedelsiz = $_POST['bedelsiz'];
		$tutar = $_POST['tutar'];
		$adet = $_POST['adet'];

		$sql = "SELECT id FROM 35cgnproductbarkod WHERE barkod='".$barkod."'";
		$result = mysqli_query($GLOBALS["___mysqli_ston"],  $sql);
		if( $row=mysqli_fetch_array($result) ){
			$barkod = $row['id'];
		}

		$sql = "SELECT id, stok FROM 35cgnproduct WHERE id=".$barkod;
		$result = mysqli_query($GLOBALS["___mysqli_ston"],  $sql);
		if( $row=mysqli_fetch_array($result) ){
			$yenistok = $row['stok'] + ($adet+$bedelsiz);
			if( $islem == 1 ){
				$yenistok = $row['stok'] - ($adet+$bedelsiz);
			}

			$sql2 = "UPDATE 35cgnproduct SET stok=".$yenistok." WHERE id=".$barkod;
			$result2 = mysqli_query($GLOBALS["___mysqli_ston"],  $sql2);

			if($islem==0){

				$sql = "INSERT INTO 35cgnproductislem(product_id, islem, tutar, adet, iskonto, faturano, bedelsiz) VALUES(".$barkod.",0,".$tutar.",".$adet.",'".$iskonto."','".$faturano."',".$bedelsiz.")";
				$res = mysqli_query($GLOBALS["___mysqli_ston"],  $sql);

				echo '<script language="javascript">
				alert("Ürün alışınız tamamlanmıştır.");
				window.location.href="../product_main.php";</script>'; 
			}
			elseif ($islem==1) {

				$sql = "INSERT INTO 35cgnproductislem(product_id, islem, tutar, adet, iskonto, faturano, bedelsiz) VALUES(".$barkod.",1,".$tutar.",".$adet.",'".$iskonto."','".$faturano."',".$bedelsiz.")";
				$res = mysqli_query($GLOBALS["___mysqli_ston"],  $sql);

				echo '<script language="javascript">
				alert("Ürün satışınız tamamlanmıştır.");
				window.location.href="../product_main.php";</script>'; 
			}
		}
		else{
			echo '<script language="javascript">
			alert("Girdiğiniz barkoda ait ürün bulunmamaktadır...");
			window.location.href="../';
			if($islem==0) echo 'stok_alis.php?id='.$_GET['id'].'";</script>';
			else echo 'stok_satis.php?id='.$_GET['id'].'";</script>';
		}
	}
	else{
    echo '<script language="javascript">
		alert("Adet, Giriş Tutarı gibi değerler sayısal olmalıdır...");
		window.location.href="../';
		if($islem==0) echo 'stok_alis.php?id='.$_GET['id'].'";</script>';
		else echo 'stok_satis.php?id='.$_GET['id'].'";</script>';
	}
}
?>