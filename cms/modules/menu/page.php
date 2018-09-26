<?php ob_start(); ?>
<?php
include ("../../std/cgncon.php");
include ("../../std/check.php");
include ('../../std/lmenu.php');
error_reporting ( 1 );
?>

		
<div id="page-wrapper">
<div class="row">
<div class="col-lg-12">
	<h1 class="page-header">Site Navigasyon Menüsü</h1>
    <div class="nw-popup " onclick="popupFunction()">
	   <i class="fa fa-question-circle fa-fw quest-cms"></i>
       <span class="nw-popuptext" id="my-nw-popup"> Hiçbir sayfa adı için harf büyük/küçük önemli değil<br>
        Ör: Anasayfa = AnAsAyFa<br>
        ****<br>
        Genel sayfalara girebileceğiniz isimler > işaretinin sağında<br>
        Genel sayfaların alt menü olup olamayacağı > işaretinin solundadır<br>
        <br>
        -Anasayfa<br>
        -Alt Menü olamaz > Anasayfa, Ana Sayfa, Home, Home Page<br>
        <br>
        -Ürünler<br>
        -Alt Menü olamaz > Ürünler, Ürünlerimiz<br>
        <br>
        -Galeri<br>
        -Alt Menü olabilir > Galeri, Gallery<br>
        <br>
        -Projelerimiz<br>
        -Alt Menü olabilir > Projeler, Projelerimiz<br>
        <br>
        -Referanslar<br>
        -Alt Menü Olabilir > Referanslar, Referanslarımız<br>
        <br>
        -İletişim<br>
        -Alt Menü olamaz > İletişim<br>
        <br>
        -Haberler<br><br>
        -Alt Menü olamaz > Haberler
</span>
    </div>
</div>
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-body">

      <?php 
                        //header ( "Content-Type: text/html; charset=UTF-8" ); 
                        $i = 1; 
                        $sql = "select * from 35cgnmenu where menu_type = 0 order by menu_rank ASC"; 
                        $result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(header("Location: ../error.php"));; 
                         
                        echo "<table class=\"table table-striped\">"; 
                        echo "<thead style = \"font-weight:bold\"><tr><td>Menü</td><td>Alt Menu</td><td>Sayfa Görünen İsmi</td><td>Anahtar Kelimeler</td><td align=\"right\"><a class='tooltips' href = 'addmenu.php'><span> Menü Ekle </span><i class=\"fa fa-plus fa-lg\" 'aria-hidden='true'></i><a></td></tr></thead>"; 
                        while ($row = mysqli_fetch_array($result)) { 
                            $menu_id = $row ['menu_id']; 
                            $menu_name = stripslashes($row ['menu_name']); 
                            $menu_rank = $row ['menu_rank']; 
                            $menu_title = stripslashes($row['menu_title']); 
                            $menu_keys = stripslashes($row['keywords']); 
                            $uzunluk = strlen($menu_keys); 
                            if ($uzunluk>15) { 
                            $menu_keys = substr($menu_keys,0,15) ; 
                            $menu_keys = $menu_keys . "...."; 
                            } 
                            echo "<div id = 'menuentry'>"; 
                            echo "<tr> 
                                    <td>" . $menu_rank .".    ". $menu_name . "</td> 
                                    <td></td> 
                                    <td>".$menu_title."</td> 
                                    <td>".$menu_keys."</td> 
                                    <td align=\"right\"> 
                                    <a class='tooltips' href = 'addpage.php?menu=".$menu_id."' >    <span>Alt Menü Ekle </span><i class=\"fa fa-plus fa-lg\" 'aria-hidden='true'>&nbsp;</i></a> 
                                    <a class='tooltips' href = 'modifymenu.php?menu=" . $menu_id . "' ><span>Menüyü Düzenle </span> <i class=\"fa fa-pencil fa-lg\" 'aria-hidden='true'>&nbsp;</i></a> 
                                    <a class='tooltips 'href = 'delmenu.php?menu=" . $menu_id . "'><span> Menüyü Sil </span>    <i class=\"fa fa-trash-o fa-lg\" 'aria-hidden='true'>&nbsp;</i></a> 
                                    </td> 
                                </tr>"; 
                            echo "</div>"; 
                                    $i ++; 
                                    $sql2 = "SELECT * FROM 35cgnpage where menu_id = " . $menu_id . " order by page_rank ASC"; 
                                    $result2 = mysqli_query($GLOBALS["___mysqli_ston"], $sql2); 
                                     
                                    while ($row2 = mysqli_fetch_array($result2)) { 
                                        $page_id = $row2 ['page_id']; 
                                        $page_name = stripslashes($row2 ['page_name']); 
                                        $page_rank = $row2 ['page_rank']; 
                                        $page_title = stripslashes($row2['page_title']); 
                                        $page_keys = stripslashes($row2['keywords']); 
                                        echo "<div id = \"pageentry\">"; 
                                        echo "<tr> 
                                                <td></td><td>" . $page_rank .".    ". $page_name . "</td> 
                                                <td>".$page_title."</td><td>".$page_keys."</td><td align=\"right\"> 
                                                <a class='tooltips' href = 'modifypage.php?page=" . $page_id . "' >    <span>Menüyü Düzenle </span><i class=\"fa fa-pencil fa-lg\" 'aria-hidden='true'>&nbsp;</i></a> 
                                                <a class='tooltips' href = 'delpage.php?page=". $page_id ."'>    <span> Menüyü Sil </span><i class=\"fa fa-trash-o fa-lg\" 'aria-hidden='true'>&nbsp;</i></a> 
                                                 
                                                </td></tr>"; 
                                        echo "</div>"; 
                                        } 
                        } 
                        echo "</table>"; 
                                                                             
                        ((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
        ?> 
			</div>
			</div>
		</div>
	</div>
</div>
<script>
function popupFunction() {
    var popup = document.getElementById("my-nw-popup");
    popup.classList.toggle("nw-show");
}
</script>
</body>
</html>
<?php ob_flush(); ?>