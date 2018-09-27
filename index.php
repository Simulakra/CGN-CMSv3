<?php 
ob_start();
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strrpos($actual_link, ".php")!= false)
{header('Location: '.'/index/');}

include("libraries/header.php");
?>

<?php
include("modules/slider.php");
echo mysqli_error();
?>

                
<div id="main-container" class="main-container-index">
<div class="content">

<?php// include("modules/catalogue.php"); ?>
<?php include("modules/entry_text.php"); ?>



<?php //include("modules/from_portfolio.php"); ?>            

<?php include("modules/news_and_blog.php"); ?>

<div class='spacer-10'></div>

<?php include("modules/our_clients.php"); ?>

</div>

</div>
<?php include("modules/popup.php"); ?>
<?php include("libraries/footer.php"); ?>
<?php ob_flush();?>