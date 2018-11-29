<div class="topbar">
<div class="container">

<ul class="pull-right social-icons">

<?php include("modules/socialmedia.php");
	  include("modules/lang.php"); ?>
</ul>

<a href="#" class="pull-left" id="contact-info"><i class="fa fa-bars"></i></a>       
<ul class="header-info-cols">
<li> <span class="icon-col"><i class="fa fa-map-marker"></i></span>
<div>
<div><span><a href="https://goo.gl/maps/mK13DxYz8ZU2" target="_blank">Cumhuriyet İşhanı Ofis: 551 Bayraklı-İzmir</a></span></div>
</div>
</li>
<li> <span class="icon-col"><i class="fa fa-phone"></i></span>
<div>
<div><span><a href="tel:02323434491">02323434491</a></span></div>
</div>
</li>
<li> <span class="icon-col"><i class="fa fa-clock-o"></i></span>
<div>
<div><span><a href="mailto:iletisim@cgnyazilim.com">iletisim@cgnyazilim.com</a></span></div>
</div>
</li>
<?php if( file_exists("modules/getoffer.php") ){
	echo '<li><a href="modules/getoffer.php"><span class="icon-col"><i class="fa fa-shopping-cart"></i></span></a></li>';
	try{session_start();}
	catch (Exception $e) {}

	if( !isset($_SESSION["offerCart"]) ){
		$_SESSION["offerCart"] = array();
	}
}
?>
</ul>
</div>
</div>