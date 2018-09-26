<?php 
if ($_GLOBALS['currentpage']=='page') {
	if(isset($_GET['menu'])) {
		$sql="SELECT keywords,description FROM 35cgnmenu WHERE menu_id=".$_GET['menu'];
		$result=mysqli_query($GLOBALS["___mysqli_ston_user"],$sql);
		$row=mysqli_fetch_array($result);
		echo '<meta name="keywords" content="CGN Elektonik,bilgisayar,laptop,dizüstü bilgisayar,beyaz eşya,'.$row['keywords'].'" />';
		echo '<meta name="description" content="'.$row['description'].'"/>';
	} else { 
		$id = $_GET['id']; 
		$sql = "SELECT keywords,description FROM 35cgnpage WHERE page_id=".$id; 
		$result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql); 
		$row = mysqli_fetch_array($result);
		echo '<meta name="keywords" content="CGN Elektonik,bilgisayar,laptop,dizüstü bilgisayar,beyaz eşya,'.$row['keywords'].'" />';
		echo '<meta name="description" content="'.$row['description'].'"/>';
	} 
} else if ($_GLOBALS['currentpage']=='news') {
	$sql = "SELECT keywords FROM 35cgnpress WHERE id=".mysqli_real_escape_string($GLOBALS["___mysqli_ston_user"], $_GET['id']);
	$result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql);
	$row = mysqli_fetch_array($result);
	echo '<meta name="keywords" content="CGN Elektonik,bilgisayar,laptop,dizüstü bilgisayar,beyaz eşya,'.$row['keywords'].'" />';
	
}


?>