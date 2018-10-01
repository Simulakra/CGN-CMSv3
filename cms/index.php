<!DOCTYPE html>
<?php ob_start(); ?>
<?php
include("std/cgncon.php");
include ("std/check.php");
error_reporting ( 0 );
?>

<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CGN | cms v3.4</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="css/admin.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<link 						href="js/plugins/light/src/css/lightbox.css" 	rel="stylesheet"		 type="text/css" media="screen"/>
<script					 src="js/plugins/light/src/js/lightbox.js"			type="text/javascript"></script>
	
</head>
<body>

<div id="wrapper"><!-- wrapper -->


<!-- navbar-top-links -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
		<span class="sr-only">MENU</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.php">ADMIN | cms v3.4</a>
		</div>
            <!-- /.navbar-header -->
		<div id="hidemobile">
		<ul class="nav navbar-top-links navbar-right">
		<li><a href="https://www.facebook.com/cgnyazilim"><i class="fa fa-thumbs-o-up fa-fw"></i> </a></li>
		<li><a href="http://www.cgnyazilim.com/blog"><i class="fa fa-rss fa-fw"></i> </a></li>
		<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-question-circle fa-fw"></i>  <i class="fa fa-caret-down"></i></a>
		<ul class="dropdown-menu dropdown-user">
		<li><a href="http://www.cgnyazilim.com/help/cmsv3.pdf" target="_blank"><i class="fa fa-info-circle fa-fw"></i> Kullanım Klavuzu</a></li>
		<li><a href="skype:cgnyazilim?call"><i class="fa fa fa-skype fa-fw"></i> CGN Skype</a></li>
		<li><a href="mailto:destek@cgnyazilim.com"><i class="fa fa-envelope fa-fw"></i> CGN Mail</a></li>
		<li><a href="http://www.cgnyazilim.com"><i class="fa fa-globe fa-fw"></i> CGN Web</a></li>
		</ul>
		</li>
		<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> </a></li>
		</ul>
		</div>         <!-- /.navbar-top-links -->

		<div class="navbar-default navbar-static-side" role="navigation">
		<div class="sidebar-collapse l-side-scroll">
			<ul class="nav" id="side-menu">
			<li ><a href="index.php">									<i class="fa fa-dashboard fa-fw"></i> Ana Ekran</a></li>
			<li><a href="modules/menu/page.php">							<i class="fa fa-files-o fa-fw"></i> Menu &amp; Sayfa Yönetimi</a></li>
			<li><a href="modules/slider/index.php">					    	<i class="fa fa-picture-o fa-fw"></i> Slider Yönetimi</a></li>
			<li><a href="modules/urunler/category_main.php"> 	<i class="fa fa-cubes fa-fw"></i> Kategori Yönetimi</a></li>
			<li><a href="modules/urunler/product_main.php">   	<i class="fa fa-cube   fa-fw"></i> Ürün  Yönetimi</a></li>
			<li><a href="modules/referenceslogos/index.php">	<i class="fa  fa-th fa-fw"></i> Referans Yönetimi</a></li>
			<li><a href="modules/gallery/index.php">						<i class="fa fa-camera fa-fw"></i> Resim Galerisi Yönetimi</a></li>	
			<li><a href="modules/ourclients/index.php">					<i class="fa fa-check-square-o fa-fw"></i> Bizi Seçenler</a></li> 
			<li><a href="modules/news/index.php">							<i class="fa fa-pencil-square-o fa-fw"></i> Haber Yönetimi</a></li>
			<li><a href="modules/projects/index.php">					<i class="fa fa-check fa-fw"></i> Projeler Yönetimi</a></li> 
			<li><a href="modules/popup/index.php">						<i class="fa fa-bullhorn fa-fw"></i> Pop Up Duyuru</a></li>
			<li><a href="modules/lang/index.php">						<i class="fa fa-language fa-fw"></i> Dil Yönetimi</a></li>
			<li><a href="modules/social/index.php">						<i class="fa fa-thumbs-up fa-fw"></i> Sosyal Medya Yönetimi</a></li>
			<li><a href="modules/user/userman.php">					<i class="fa fa-user fa-fw"></i> Kullanıcı Yönetimi</a></li>
			<li><a href=<?php echo '"http://' . $_SERVER['HTTP_HOST'] . '/"' ?> target="_blank"> 							<i class="fa fa-globe fa-fw"></i> Siteye Git</a></li>
			<li><a href="logout.php">								<i class="fa fa-sign-out fa-fw"></i>Sistemden Çıkış </a></li>
			</ul>
		</div>
		</div>
            <!-- /.navbar-static-side -->
 </nav>
<!-- /LEFT SIDE BAR -nav menu -->

<div id="page-wrapper"><!-- page-wrapper -->

<div class="row">
<div class="col-lg-12"><h1 class="page-header">İçerik Yönetim Sistemi Paneline Hoşgeldiniz...</h1></div>
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-body">
Sol taraftaki menüden, internet sitesi içeriklerini yönetebilirsiniz.Sağ üst taraftaki menüden yardım ve destek linklerine ulaşabilirsiniz.</br>
Bu panelden internet sitenizin tasarımı değiştiremezsiniz.</br>
</div>
</div>
	<iframe width="49%" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTZPZmkghvm0fsKooeYaOtsYLoGADfaz8zfbUIJzv6c9nSwZ3bga2M1UXPW-pQeX3z3Mp6NHrJbI2eP/pubchart?oid=199142581&amp;format=image"></iframe>
</div>					
</div>

<div id="dash">
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default noborder">
<div class="panel-body">

<div class="col-xs-2 aligncenter"><div class="panel panel-default">
<div class="panel-body"><a href="modules/menu/page.php"><i class="fa fa-files-o fa-4x"></i> </a></div>
<div class="panel-footer"><a href="modules/menu/page.php">Menu &amp; Sayfa </a> </div>
</div></div>

<div class="col-xs-2 aligncenter"><div class="panel panel-default">
<div class="panel-body"><a href="modules/slider/index.php"><i class="fa fa-picture-o fa-4x"></i> </a></div>
<div class="panel-footer"><a href="modules/slider/index.php">Slider Yönetimi </a> </div>
</div></div>


<div class="col-xs-2 aligncenter"><div class="panel panel-default">
<div class="panel-body"><a href="modules/urunler/category_main.php"><i class="fa  fa-cubes  fa-4x"></i> </a></div>
<div class="panel-footer"><a href="modules/urunler/category_main.php">Kategori Yönetimi</a> </div> 
</div></div>

<div class="col-xs-2 aligncenter"><div class="panel panel-default">
<div class="panel-body"><a href="modules/urunler/product_main.php"><i class="fa  fa-cube  fa-4x"></i> </a></div>
<div class="panel-footer"><a href="modules/urunler/product_main.php">Ürün Yönetimi</a> </div> 
</div></div>

<div class="col-xs-2 aligncenter"><div class="panel panel-default">
<div class="panel-body"><a href="modules/referenceslogos/index.php"><i class="fa  fa-th  fa-4x"></i> </a></div>
<div class="panel-footer"><a href="modules/referenceslogos/index.php">Referans Logoları</a> </div> 
</div></div>

<div class="col-xs-2 aligncenter"><div class="panel panel-default">
<div class="panel-body"><a href="modules/gallery/index.php"><i class="fa fa-camera fa-4x"></i> </a></div>
<div class="panel-footer"><a href="modules/gallery/index.php">Resim Galerisi </a> </div>
</div></div>

 
</div>
</div>
</div>					
</div>

<div class="row">
<div class="col-lg-12">
<div class="panel panel-default noborder">
<div class="panel-body">


<div class="col-xs-2 aligncenter"><div class="panel panel-default"> 
<div class="panel-body"><a href="modules/ourclients/index.php"><i class="fa fa-check-square-o fa-4x"></i> </a></div>
<div class="panel-footer"><a href="modules/ourclients/index.php">Bizi Seçenler</a> </div>
</div></div>

<div class="col-xs-2 aligncenter"><div class="panel panel-default">
<div class="panel-body"><a href="modules/news/index.php"><i class="fa fa-pencil-square-o fa-4x"></i> </a></div>
<div class="panel-footer"><a href="modules/news/index.php">Haber Yönetimi</a> </div>
</div></div>
 
<div class="col-xs-2 aligncenter"><div class="panel panel-default">
<div class="panel-body"><a href="modules/projects/index.php"><i class="fa fa-check fa-4x"></i> </a></div>
<div class="panel-footer"><a href="modules/projects/index.php">Projelerimiz</a> </div>
</div></div>

<div class="col-xs-2 aligncenter"><div class="panel panel-default">
<div class="panel-body"><a href="modules/popup/index.php"><i class="fa fa-bullhorn fa-4x"></i> </a></div>
<div class="panel-footer"><a href="modules/popup/index.php">Pop Up Duyuru</a> </div>
</div></div>

<div class="col-xs-2 aligncenter"><div class="panel panel-default">
<div class="panel-body"><a href="modules/lang/index.php"><i class="fa fa-language fa-4x"></i> </a></div>
<div class="panel-footer"><a href="modules/lang/index.php">Dil Yönetimi</a> </div>
</div></div>

<div class="col-xs-2 aligncenter"><div class="panel panel-default">
<div class="panel-body"><a href="modules/social/index.php"><i class="fa fa-thumbs-up fa-4x"></i> </a></div>
<div class="panel-footer"><a href="modules/social/index.php">Sosyal Medya</a> </div>
</div></div>

</div>
</div>
</div>					
</div>

<div class="row">
<div class="col-lg-12">
<div class="panel panel-default noborder">
<div class="panel-body">

<div class="col-xs-2 aligncenter"><div class="panel panel-default">
<div class="panel-body"><a href="modules/user/userman.php"><i class="fa fa-user fa-4x"></i> </a></div>
<div class="panel-footer"><a href="modules/user/userman.php">Kullanıcı Yönetimi</a> </div>
</div></div>

</div>
</div>
</div>					
</div>


</div>

</div>
</div>
</body>
</html>
<?php ob_flush(); ?>                    