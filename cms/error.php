<!-- CGN SUMMERılım &amp; bilişim hizmetleri - içerik yönetim sistemi - cgn[cms]_v3.2 -->
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
<title>CGN | cms v3.3</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="css/admin.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<link 						href="lib/light/src/css/lightbox.css" 	rel="stylesheet"		 type="text/css" media="screen"/>
<script					    src="lib/light/src/js/lightbox.js"													type="text/javascript"></script>
	
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
                <a class="navbar-brand" href="index.php">ADMIN | cms v3.2</a>
            </div>
            <!-- /.navbar-header -->
<div id="hidemobile">
<ul class="nav navbar-top-links navbar-right">
<li><a href="https://www.facebook.com/cgnSUMMERilim"><i class="fa fa-thumbs-o-up fa-fw"></i> </a></li>
<li><a href="http://www.cgnSUMMERilim.com/blog"><i class="fa fa-rss fa-fw"></i> </a></li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-question-circle fa-fw"></i>  <i class="fa fa-caret-down"></i></a>
<ul class="dropdown-menu dropdown-user">
<li><a href="http://www.cgnSUMMERilim.com/help/cmsv3.pdf" target="_blank"><i class="fa fa-info-circle fa-fw"></i> Kullanım Klavuzu</a></li>
<li><a href="skype:cgnSUMMERilim?call"><i class="fa fa fa-skype fa-fw"></i> CGN Skype</a></li>
<li><a href="mailto:destek@cgnSUMMERilim.com"><i class="fa fa-envelope fa-fw"></i> CGN Mail</a></li>
<li><a href="http://www.cgnSUMMERilim.com"><i class="fa fa-globe fa-fw"></i> CGN Web</a></li>
</ul>
</li>
<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> </a></li>
</ul>
</div>         <!-- /.navbar-top-links -->

<div class="navbar-default navbar-static-side" role="navigation">
<div class="sidebar-collapse">
		<ul class="nav" id="side-menu">
		<li ><a href="index.php">													<i class="fa fa-dashboard fa-fw"></i> Ana Ekran</a></li>
		<li><a href="modules/menu/page.php">						<i class="fa fa-files-o fa-fw"></i> Menu &amp; Sayfa Yönetimi</a></li>
		<li><a href="modules/slider/index.php">					<i	class="fa fa-picture-o fa-fw"></i> Slider Yönetimi</a></li>
		<li><a href="modules/gallery/index.php">					<i	class="fa fa-camera fa-fw"></i> Resim Galerisi Yönetimi</a></li>	
		<li><a href="modules/videogallery/index.php">		<i	class="fa fa-video-camera fa-fw"></i> Video Galerisi Yönetimi</a></li>	   
		<li><a href="modules/ourclients/index.php">				<i	class="fa fa-check-square-o fa-fw"></i> Bizi Seçenler</a></li>
		<li><a href="modules/fromportfolio/index.php">		<i	class="fa fa-star fa-fw"></i> Öne Çıkanlar </a></li>
		<li><a href="modules/projects/index.php">				<i	class="fa fa-check fa-fw"></i> Projeler Yönetimi</a></li>
		<li><a href="modules/referenceslogos/index.php">				<i	class="fa  fa-th fa-fw"></i> Referans Yönetimi</a></li>
		<li><a href="modules/news/index.php">						<i	class="fa fa-pencil-square-o fa-fw"></i> Haber Yönetimi</a></li>
		<li><a href="modules/popup/index.php">						<i	class="fa fa-bullhorn fa-fw"></i> Pop Up Duyuru</a></li>
		<li><a href="modules/catalogue/index.php">						<i	class="fa fa-file-pdf-o  fa-fw"></i> Katalog Yönetimi</a></li>
		<li><a href="modules/social/index.php">						<i	class="fa fa-thumbs-up fa-fw"></i> Sosyal Medya Yönetimi</a></li>
		<li><a href="modules/user/userman.php">					<i	class="fa fa-user fa-fw"></i> Kullanıcı Yönetimi</a></li>
		<li><a href="#" target="_blank"> <i class="fa fa-globe fa-fw"></i> Siteye Git</a></li> 
		<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Sistemden Çıkış</a></li>
		</ul>
</div>
</div>
			
        </nav>
<!-- /LEFT SIDE BAR -nav menu -->

<div id="page-wrapper"><!-- page-wrapper -->
<div class="row">
<div class="col-lg-12"><h1 class="page-header">Bir hata oluştu, lütfen daha sonra tekrar deneyiniz...</h1></div>
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-body">
İşlem sırasında bir hata oluştu, lütfen daha sonra tekrar deneyiniz..</br>
Hata devam ederse, <a href="mailto:destek@cgnSUMMERilim.com"> destek  talep ediniz. : destek@cgnSUMMERilim.com.</a></br>
</div>
</div>
</div>					
</div>
</div><!-- /page-wrapper -->
</div><!-- /wrapper -->
	
</body>
</html>

<?php ob_flush(); ?>                    