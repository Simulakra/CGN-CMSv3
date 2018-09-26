<?php ob_start(); ?>

<?php
include("../../std/cgncon.php");
include("../../std/check.php");
include ("../../std/lmenu.php");
error_reporting(0);
?>

<div id="page-wrapper">
<div class="row"> <!-- ROW -->
<div class="col-lg-12"><h1 class="page-header">Haber Yönetimi </h1></div>   
<div class="col-lg-12"><!-- RESİMLER PANELİ -->
<div class="panel panel-default">
<div class="panel-body"><!-- Resimler SIRALANMAYA BAŞLAR -->


<?php 

$i      = 1; 
$sql="SELECT * FROM 35cgnpress order by date DESC"; 
$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql); 
echo "<table class=\"table table-striped\">"; 
echo '<thead style="font-weight:bold"> <tr><td>#</td><td>Etkinlik/Haber Başlığı</td><td>Tarih</td><td>Seçim</td></tr></thead>'; 

while($row = mysqli_fetch_array($result)) 
{ 
    $id=$row['id']; 
    $name=$row['title']; 
    $link=$row['link']; 
     
    echo "<tr>"; 
    echo "<td >" . $i . "</td>"; 
    echo "<td >" . $name. "</td>"; 
    echo "<td >".date_format(date_create($row['date']),'Y-m-d')."</td>";         
    echo "<td > 
    <a class='tooltips'  href = 'modifynews.php?id=".$id."'><span>Haberi Düzenle</span><i class=\"fa fa-pencil fa-lg\" 'aria-hidden='true'></i></a> 
    <a class='tooltips' href = 'delnews.php?id=".$id."&link=".$link." '><span>Haberi Sil</span><i class=\"fa fa-trash-o fa-lg\" 'aria-hidden='true'></i></a></td>"; 
    echo "</tr>"; 
    $i++; 
} 
echo "</table>"; 

echo " <div id='divbuttons'>"; 
echo "<form action=\"addnews.php\"><table border='0'>"; 
echo " <input type=\"submit\"  class=\"btn btn-primary\" name=\"button\" id=\"add\" value=\" Yeni Haber Ekle\" />"; 
echo "</table></form>"; 
echo "</div>"; 

((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 

?> 
</div>
</div>
</div>
</div>
</div>
</body>
</html>

<?php  ob_flush(); ?>