<?php
include("../../std/cgncon.php");
include("../../std/check.php");
include("../../std/lmenu.php");
error_reporting(0);
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12"><h1 class="page-header">Bizi Seçenler</h1></div>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">

<?php 

	$sql="SELECT * FROM 35cgnlang";
	$result=mysqli_query($GLOBALS["___mysqli_ston"],$sql);
	$checked=array();
	while ($row=mysqli_fetch_array($result)) {
		$checked[$row['Lang']]= $row['Status'];
	}
	
	if (isset($_POST['submit'])) {
		//echo "oldu";
		$langs=array("English","French","German");
		$lang=$_POST['lang'];
		//var_dump($lang);
		foreach ($lang as $value) {
				$sql1="UPDATE 35cgnlang SET Status=1 WHERE Lang='$value'";
				mysqli_query($GLOBALS["___mysqli_ston"],$sql1);
		}
		$unchecked=array_diff($langs, $lang);
		var_dump($unchecked);
		foreach ($unchecked as $value) {
			$sql1="UPDATE 35cgnlang SET Status=0 WHERE Lang='$value'";
			mysqli_query($GLOBALS["___mysqli_ston"],$sql1);
		}
		echo "<script language=\"javascript\">  alert(\"Dil seçim işlemi başarılı\");  window.location.href='index.php';</script>";
		//header("Location:index.php");
	}
	?>
 
                	<form method="post" action="index.php">
	                	<table class="table">
			            	<tr><td>İngilizce</td><td> <input type="checkbox" name="lang[]" value="English" <?php if($checked["English"]==1) echo "checked" ?>></td></tr>
			            	<tr><td>Fransızca</td> <td><input type="checkbox" name="lang[]" value="French"  <?php if($checked["French"]==1) echo "checked" ?>></td></tr>
			            	<tr><td>Almanca</td>  <td><input type="checkbox" name="lang[]" value="German" <?php if($checked["German"]==1) echo "checked" ?>></td> </tr><br>
			            	<tr> <td><button type="submit" class="btn btn-primary" name="submit">Ekle</button>
			            	<button class="btn btn-default "  onClick="window.history.go(-1); return false;">Geri Dön</button></td></tr>
		            	</table>
	            	</form>
	            	
                	
                    
                </div>
            </div>
        </div>

</body>
</html>