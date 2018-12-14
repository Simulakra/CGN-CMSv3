<?php
if( isset($_GET['id']) ){
	include '../../../std/cgncon.php';
	if( isset($_POST['barkod']) ){
		$sql = "INSERT INTO 35cgnproductbarkod(id, barkod) VALUES(".$_GET['id'].",'".$_POST['barkod']."')";
		if( $res=mysqli_query($GLOBALS["___mysqli_ston"],  $sql) ){
			echo '<script language="javascript">
	    	alert("Ürün barkodu eklenmiştir.");
	    	window.location.href="../modify_stok.php?id='.$_GET['id'].'";</script>'; 
		}
		else{
			//aynı barkoddan var ise uyarı versin
			$sql2 = "UPDATE 35cgnproductbarkod SET barkod='".$_POST['barkod']."' WHERE id=".$_GET['id'];
			if( $res2=mysqli_query($GLOBALS["___mysqli_ston"],  $sql2) ){
				echo '<script language="javascript">
	    		alert("Ürün barkodu güncellenmiştir.");
	    		window.location.href="../modify_stok.php?id='.$_GET['id'].'";</script>';
	    } 
	    else{
	    	echo '<script language="javascript">
	    		alert("Ürün barkodu güncellenemedi!\nBu ürün barkodu başka bir üründe kullanılıyor olabilir.");
	    		window.location.href="../modify_stok.php?id='.$_GET['id'].'";</script>';
	    }
		}
	}
	else{
	$sql = "DELETE FROM 35cgnproductbarkod WHERE id=".$_GET['id'];
	$res=mysqli_query($GLOBALS["___mysqli_ston"],  $sql);
	echo '<script language="javascript">
	alert("Ürün barkodu kaldırılmıştır.");
	window.location.href="../modify_stok.php?id='.$_GET['id'].'";</script>'; 
	}
}
else{
	header("Location: ../product_main.php");
}
?>