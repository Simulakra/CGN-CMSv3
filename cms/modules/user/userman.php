<?php ob_start(); ?>

<?php
include("../../std/cgncon.php");
include("../../std/check.php");
include ("../../std/lmenu.php");
error_reporting(0);
?>


<div id="page-wrapper">
<div class="row"> <!-- ROW -->
<div class="col-lg-12"><h1 class="page-header">Kullanıcı İşlemleri </h1></div>    
<div class="col-lg-12"><!-- RESİMLER PANELİ -->
<div class="panel panel-default">
<div class="panel-body"><!-- Resimler SIRALANMAYA BAŞLAR -->

<?php 
$i      = 1; 
$sql="SELECT * FROM 35cgnuser"; 
$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql); 

echo "<table class=\"table table-striped\"><tr><th>#</th><th>Kullanıcı Adı</th><th>Şifre</th><th>Seçim</th></tr>"; 
while($row = mysqli_fetch_array($result)) 
{ 
    $name=$row['username']; 
    $password=$row['userpass']; 
    $id = $row['id']; 
    echo "<tr>"; 
    echo "<td width='5%'>" . $i . "</td>"; 
    echo "<td width='30%'>" . $name . "</td>"; 
    echo "<td width='55%'>" . $password . "</td>"; 
    echo "<td width='10%'> 
    <a class='tooltips' href = 'modifyuser.php?username=$id'><span>Düzenle</span> 
    <i class=\"fa fa-pencil fa-lg\" 'aria-hidden='true'>&nbsp;</i></a> 
    "; 
    if($i != 1){
    	echo "
    	<a class='tooltips'  href = 'deluser.php?username=$id'><span>Sil</span> 
    	<i class=\"fa fa-trash-o fa-lg\" 'aria-hidden='true'>&nbsp;</i></a>	
   		"; 
    }
    echo "</td>";

    echo "</tr>"; 
    $i++; 
} 
echo "</table>"; 

echo " <div id='divbuttons'>"; 

echo "<form action=\"adduser.php\" ><table border='0'>"; 
echo "    <input type=\"submit\" class=\"btn btn-primary\"  name=\"button\" id=\"add\" value=\"Yeni Kullanıcı Ekle\" />";  
echo "    <input type=\"button\" class=\"btn btn-default\"  name=\"button\" id=\"add\" value=\"Geri Dön\"  onClick=\"window.location.href='/Yavrular/cmsdemo/cms'; return false;\"/>"; 
echo "</table></form>"; 
echo "</div>"; 


((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
?> 
</div> <!-- //panel-body -->
</div>    <!-- //panel-page -->
</div> <!-- // column -->
</div>        <!-- /#row -->
</div>    <!-- /#page-wrapper -->
</body>
</html>
<?php ob_flush(); ?>