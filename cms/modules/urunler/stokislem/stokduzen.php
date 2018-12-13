<?php
if( isset($_POST['barkod']) ){
	if( isset($_POST['miktar']) ){
		if( is_numeric($_POST['miktar']) ){

			include '../../../std/cgncon.php';
			$barkod = $_POST['barkod'];
			$miktar = $_POST['miktar'];
			$sql = "SELECT id, stok FROM 35cgnproduct WHERE id=".$barkod;
			$result = mysqli_query($GLOBALS["___mysqli_ston"],  $sql);
			if( $row=mysqli_fetch_array($result) ){
				$yenistok = $row['stok'] + $miktar;
				if( isset($_GET['uruncikar']) ){
					if( $_GET['uruncikar']==1 ){
						$yenistok = $row['stok'] - $miktar;
					}
				}
				$sql2 = "UPDATE 35cgnproduct SET stok=".$yenistok." WHERE id=".$barkod;
				$result2 = mysqli_query($GLOBALS["___mysqli_ston"],  $sql2);
				if( isset($_GET['uruncikar']) ){
					echo '<script language="javascript">
	    			alert("Ürün stok çıkışınız tamamlanmıştır.");
	    			window.location.href="../product_main.php";</script>'; 
				}
				else{
					echo '<script language="javascript">
	    			alert("Ürün stok girişiniz tamamlanmıştır.");
	    			window.location.href="../product_main.php";</script>'; 
				}
			}
			else{
				echo '<script language="javascript">
    			alert("Girdiğiniz barkoda ait ürün bulunmamaktadır...");
    			window.location.href="../modify_stok.php?id='.$_POST['barkod'].'";</script>'; 
			}
		}
		else{
			echo '<script language="javascript">
    		alert("Miktar sayısal bir değer olmalıdır...");
    		window.location.href="../modify_stok.php?id='.$_POST['barkod'].'";</script>'; 
		}
	}
	else{
    	echo '<script language="javascript">
    	alert("Ekleme yapılacak miktarı giriniz...");
    	window.location.href="../modify_stok.php?id='.$_POST['barkod'].'";</script>'; 
	}
}
else{
    echo '<script language="javascript">
	alert("Ekleme yapılacak ürün barkodu giriniz...");
	window.location.href="../modify_stok.php";</script>';  
}
?>