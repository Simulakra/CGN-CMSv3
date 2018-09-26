<!-- CGN yazılım &amp; bilişim hizmetleri - içerik yönetim sistemi - cgn[cms]_v3.2 -->
<?php
        include("../../std/cgncon.php");
		include ("../../std/check.php");
		include("../../std/lmenu.php");
?>

<div id="page-wrapper">
<div class="row"> 
<div class="col-lg-12"><h1 class="page-header">Katalog Yönetimi</h1></div>     
<div class="col-lg-4">
<div class="panel panel-default">
<div class="panel-heading">Katalog dosyasını yükle </div>
<div class="panel-body">    		
<form action="upload.php"  enctype="multipart/form-data"  method="POST">
<input name="dosya" type="file" required /><br/>
<button  class="btn btn-default " type="submit" name="submit">Yeni Katalog Yükle</button>
</form>
 </div>  
</div> 
</div>  		
</div>


</body>
</html>