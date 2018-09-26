<?php
 ob_start(); 
 error_reporting(0);
 include("../../std/cgncon.php"); 
 ?>
 

 <?php 
 $img_del = $_GET['link']; 
 $query = mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM 35cgnslider WHERE link = '$img_del' "); 
  
if ($query)        {    unlink("$img_del");    }else                    {  echo "<script language=\"javascript\">  alert(\"SİLME İŞLEMİ BAŞARISIZ\"); </script>";    } 

((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
header("Location: index.php"); 
exit;?> 

<? ob_flush(); ?>