<!-- CGN yazılım &amp; bilişim hizmetleri - içerik yönetim sistemi - cgn[cms]_v3.2 -->
<?php
ob_start(); 
        include("../../std/cgncon.php");
		include ("../../std/check.php");
		include("../../std/lmenu.php");
?>

<div id="page-wrapper">
<div class="row"> 

<div class="col-lg-12"><h1 class="page-header">Banner Yönetimi</h1></div>    
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-body">
<?php  


    $sql = "select link,caption from 35cgnslider order by id asc;"; 
    $result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
    $folder = "uploads"; 
         
if(is_dir($folder)) 
{ 
$handler = opendir($folder); 
$output = "";             

while (false !== ($files = readdir($handler)))       
																												//   while(($files = readdir($handler))  !== false) 
{
$file_path = $dir . DIRECTORY_SEPARATOR . $files;
if (file_exists($file_path) && is_dir($file_path))


{ 
while($row = mysqli_fetch_array($result)) 
{ 
if (is_dir($files)) 
																																	//   if (file_exists($file_path) && is_dir($file_path))
{ 
                        $output .= "uploads/{$files}"; 

                        echo ' 
                        <div class="col-lg-3 col-md-4"> 
                                <div class="panel panel-default"> 
                                    <div class="panel-body"> 
                                            <a href="'; echo $row['link']; echo '" data-lightbox="Resimler" data-title='.$output.''.' > 
                                            <img src="'; echo $row['link']; echo '"  width="100%"  height="auto"> 
                                            </a> 
                                    </div> 
                                    <div class="panel-footer" style="min-height:40px;">'.$row['caption'].''.'  
                                        </a>  <a class="tooltips alignright" href="delete.php?link='.$row['link'].'" > 
                                            <span>Görseli Sil</span> <i class="fa fa-trash-o fa-2x" aria-hidden="true"></i> 
                                        </a></div>             
                                </div> 
                            </div>  
                            '; 
                    } 
     
                } 
            } 
        } 
        } 

?> 

</div>     

      
                   
</div>
</div>        <!-- //RESİMLER PANELİ --> 
   
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">Slider içine yeni görsel ekle</div>
<div class="panel-body">
    

		
<form action="upload.php"  enctype="multipart/form-data"  method="POST">
        <label>Görsel yazısı:</label>
        <input type="text" value="" name="caption"  maxlength="500"  ><br/><br/>
        <label>Görsel linki:</label>
        <input type="text" value="" name="tlink"  maxlength="500"  ><br/><br/>
		 <input name="userfile" type="file" required /><br/>
        <button  class="btn btn-primary " type="submit" name="submit">Yeni Görsel Ekle</button>
</form>



    
</div>  
</div> 
</div>  
</div>  		
</div>
	
	
</body>
</html>