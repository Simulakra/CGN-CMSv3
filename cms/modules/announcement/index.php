 <?php
	include("../../std/cgncon.php");
	include("../../std/check.php");
	include("../../std/lmenu.php");
	error_reporting(0);
	?>


<?php 
	if (isset($_POST['submit'])) {
		$head=$_POST['header'];
		$disc=$_POST['disc'];
		$sql= "INSERT INTO 35cgnannouncement (head,disc) VALUES ('$head','$disc')";

 ?>
	<div id="page-wrapper">
	    <div class="row">
	        <div class="col-lg-12"><h1 class="page-header">Bizi Seçenler</h1></div>
	        <div class="col-lg-12">
	            <div class="panel panel-default">
	                <div class="panel-body">
	          			<form action="index.php" method="post">
	          				Başlık:<br>
	          				<input type="text" name="header">
	          				Açıklama:<br>
	          				<textarea name="disc" rows="3" cols="25"></textarea><br>
	          				<button type="submit" name="submit" value="submit"> Gönder</button>
	          				<?php 
	          				if(mysqli_query($GLOBALS["___mysqli_ston"],$sql)){
								echo "oldu";
							}else{
								echo mysqli_error($GLOBALS["___mysqli_ston"]);
								echo "olmadı";
							}
							}
	          				 ?>
	          			</form>	   
	                </div>
	            </div>
	        </div>

	</body>
	</html>

 