<?php
if( isset($_GET['id']) ){
	include '../../../std/cgncon.php';

	if( isset($_POST['stokalarm']) ){
		$sql = "INSERT INTO 35cgnproductalarm(id, stoklimit) VALUES(".$_GET['id'].",".$_POST['miktar'].")";
		if( $res=mysqli_query($GLOBALS["___mysqli_ston"],  $sql) ){
			echo '<script language="javascript">
	    	alert("Ürün alarmınız tanımlanmıştır.");
	    	window.location.href="../modify_stok.php?id='.$_GET['id'].'";</script>'; 
		}
		else{
			$sql2 = "UPDATE 35cgnproductalarm SET stoklimit=".$_POST['miktar']." WHERE id=".$_GET['id'];
			$res2=mysqli_query($GLOBALS["___mysqli_ston"],  $sql2);
			echo '<script language="javascript">
	    	alert("Ürün alarmınız güncellenmiştir.");
	    	window.location.href="../modify_stok.php?id='.$_GET['id'].'";</script>'; 
		}
	}
	else{
	$sql = "DELETE FROM 35cgnproductalarm WHERE id=".$_GET['id'];
	$res=mysqli_query($GLOBALS["___mysqli_ston"],  $sql);
	echo '<script language="javascript">
	alert("Ürün alarmınız kaldırılmıştır.");
	window.location.href="../modify_stok.php?id='.$_GET['id'].'";</script>'; 
	}
}
else{
	header("Location: ../product_main.php");
}
?>