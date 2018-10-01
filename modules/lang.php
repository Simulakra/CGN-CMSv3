<?php    ob_start();      ?> 
<?php  
error_reporting(0); 
 include("cms/std/cgncon.php");  

$sqllang="SELECT * FROM 35cgnlang"; 
$resultlang = mysqli_query($GLOBALS["___mysqli_ston_user"], $sqllang); 
$langs=array();
while($rowlang = mysqli_fetch_array($resultlang)) 
{ 
	$langs[$rowlang['Lang']]=$rowlang['Status'];
} 

if($langs['English']==1)	{ echo '<li class="lang"><a href="./index#googtrans(en)" title="English"><img src="images/eng.png" height="36" class="lang"/></a></li>';  } 
if($langs['French']==1)	{ echo '<li class="lang"><a href="./index#googtrans(fr)" title="French"><img src="images/fr.png" height="36" class="lang"/></a></li>';  }  
if($langs['German']==1)	{ echo '<li class="english"><a href="./index#googtrans(de)" title="German"><img src="images/gr.png" height="36" class="lang"/></a></li>';  } 
((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
?> 