<?php    ob_start();      ?> 
<?php  
error_reporting(0); 
 include("cms/std/cgncon.php");  

$sqlsocial="SELECT * FROM 35cgnsocial"; 
$resultsocial = mysqli_query($GLOBALS["___mysqli_ston_user"], $sqlsocial); 

while($rowsocial = mysqli_fetch_array($resultsocial)) 
{ 
$skype = $rowsocial['Skype']; 
$facebook = $rowsocial['Facebook']; 
$twitter = $rowsocial['Twitter']; 
$instagram = $rowsocial['instagram']; 
$youtube = $rowsocial['youtube']; 
$linkedin = $rowsocial['linkedin']; 
$googleplus = $rowsocial['googleplus']; 
} 

if ($facebook !='')     {    echo '    <li class="facebook"><a target="_blank" href='.$facebook.' title="Facebook"><i class="fa fa-facebook-f"></i></a></li>';    }    else {} 
if ($skype !='')     {    echo '    <li class="skype"><a target="_blank" href='.$skype.' title="skype"><i class="fa fa-skype"></i></a></li>';    }    else {} 
if ($twitter !='')     {    echo '    <li class="twitter"><a target="_blank" href='.$twitter.' title="twitter"><i class="fa fa-twitter"></i></a></li>';    }    else {} 
if ($instagram !='')     {    echo '    <li class="instagram"><a target="_blank" href='.$instagram.' title="instagram"><i class="fa fa-instagram"></i></a></li>';    }    else {} 
if ($youtube !='')     {    echo '    <li class="youtube"><a target="_blank" href='.$youtube.' title="youtube"><i class="fa fa-youtube"></i></a></li>';    }    else {} 
if ($linkedin !='')     {    echo '    <li class="linkedin"><a target="_blank" href='.$linkedin.' title="linkedin"><i class="fa fa-linkedin"></i></a></li>';    }    else {} 
if ($googleplus !='')     {    echo '    <li class="google"><a target="_blank" href='.$googleplus.' title="gplus"><i class="fa fa-google"></i></a></li>';    }    else {} 

((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
?> 