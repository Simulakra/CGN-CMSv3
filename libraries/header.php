<?php   include("cms/std/cgncon.php");  ?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Language" content="TR"/>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        
<?php include("libraries/metatags.php"); ?> 
<?php include("libraries/favicons.php"); ?> 
<?php include("libraries/csslib.php"); ?> 
<?php include("libraries/jslib.php"); ?>

<?php// include("libraries/hidelink.php"); ?>
<?php //include("libraries/masklink.php"); ?>
 
</head>
<body class="home header-style2">
<div class="body">
<?php include("modules/topbar.php"); ?>

<div class="header-wrapper">
<header class="site-header">
<div class="container navorta">
<div class="col-md-12">
<div class="row">
<div class="site-logo col-md-2">
<a href="#"><img src="images/logo.png"  alt="CGN Elektronik"></a>
</div>
<div class="col-md-9">
<a href="#" id="menu-toggle">Menu</a>
<div class="site-header-right">
<nav role="menu" style="text-align: left;">
<?php include("modules/navmenu.php"); ?>

</nav>
</div>

</div>

<div class="td-icon-search col-md-1" style="z-index:2">
<?php //include("modules/searchbox.php") ?>
</div>

</div>
</div>
</div>
</header>
</div>  