<?php  
    $_GLOBALS['currentpage']='page';
    include("libraries/header.php"); 
    
?> 

<div id="main-container">
<div class="content">

<?php 
$cartitemarray = str_replace("\"","", json_encode($_GET["cart"]));

$content = '<div class="card col-sm-8"><div class="table-responsive"><table class="table card-table table-vcenter">';
foreach ( explode(",", $cartitemarray) as $cartitem ) {
  $sql = "select * from 35cgnproduct where id = ".$cartitem;
  $res = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql);
  $row = mysqli_fetch_array($res);
  $content .='<tr>
    <td style="width:170px;"><img src="cms/modules/urunler/'.$row['url'].'" alt="" class="h-8 w-8 bg-white" style="height:150px;"></td>
    <td><h3>'.$row['name'].'</h3></td>
    <td class="text-right text-white d-none d-md-table-cell text-nowrap"><a class="btn btn-sm btn-primary" href="modules/getoffer_func.php?action=2&product='.$cartitem.'&url=modules/getoffer.php">Sepetten Çıkar</a></td>
  </tr>';
}           
$content .= '</table></div></div>
<div class="col-sm-4">
<div class="row">
<form class="card" action="modules/getoffer_func.php" method="post" style="width:unset; display:unset; background:unset;">
<label class="form-label">Adınız</label>
<input type="text" class="form-control" name="name" placeholder="Ad Soyad" required>
<label class="form-label">Eposta</label>
<input type="text" class="form-control" name="email" placeholder="Email" required>
<label class="form-label">Telefon</label>
<input type="text" class="form-control" name="phone" placeholder="Telefon" required>
<input type="text" value="'.$cartitemarray.'" name="cartitems" style="display:none;">
<button type="submit" class="btn btn-primary btn-sm pull-right news-btn" style="font-size: large;" href="#"><i class="fa fa-shopping-cart"></i> Teklif İste</button>
</form></div></div>';
?>

<?php include("modules/hero_area.php"); ?>
<?php include("modules/single_text.php"); ?>
<?php// include ("modules/our_clients.php"); ?>


</div>
</div>

<?php include("libraries/footer.php"); ?>