<?php	ob_start(); 	 ?>
 <?php
 include("cms/std/cgncon.php");  
$sql = "SELECT * FROM 35cgnpopup"; 
$result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql); 
$row=mysqli_fetch_array($result); 

    $showpopup=$row['showpopup'];  
    $grfx=$row['grfx'];  
    $video=$row['video'];  
    $grfxlink=$row['grfxlink'];  
    $videolink=$row['videolink'];  

if($row['showpopup'] == 0) 
{     
//pop up ı yayınlama - do nothing
} 

else if($row['showpopup'] == 1)     

{ 

									if($row['grfx'] == 1) 
										
									{ 
echo <<<EOT
<script src="../cms/js/plugins/popup/jquery.colorbox.js"></script>
<link rel="stylesheet" href="../cms/js/plugins/popup/colorbox.css" />
<div style="display: none;"><div id="popup-message">
<img class="popup-img" src="../cms/modules/popup/uploads/popup.jpg"  width="500">
</div></div>
EOT;
										}     

										else 
										{
											
									if ($row['video'] == 1)         
{ 


echo <<<EOT
<script src="../cms/js/plugins/popup/jquery.colorbox.js"></script>
<link rel="stylesheet" href="../cms/js/plugins/popup/colorbox.css" />
<div style="display: none;"><div id="popup-message">
<iframe width="560" height="315"  src="$videolink"  frameborder="0" allowfullscreen></iframe>
</div></div>
EOT;
}         
else {}		
										}

} 


             
((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res);  
?>  
<?php ob_flush(); ?>