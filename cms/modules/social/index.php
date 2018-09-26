<?php ob_start(); ?>
<?php
include("../../std/check.php");
include("../../std/cgncon.php");
include ("../../std/lmenu.php");
error_reporting(0);
?>


<div id="page-wrapper">
<div class="row"> <!-- ROW -->
<div class="col-lg-12"><h1 class="page-header">Sosyal Mecralar Yönetimi</h1></div>    
<div class="col-lg-9"><!-- RESİMLER PANELİ -->
<div class="panel panel-default">
<div class="panel-body"><!-- Resimler SIRALANMAYA BAŞLAR -->



<?php 
if(isset($_POST[Skype])) 
{ 
    $skype = $_POST['Skype']; 
    $facebook = $_POST['Facebook']; 
    $twitter = $_POST['Twitter']; 
    $instagram = $_POST['instagram']; 
    $youtube = $_POST['youtube']; 
    $linkedin = $_POST['linkedin']; 
    $googleplus = $_POST['googleplus']; 
    
     
 $sql = "Update 35cgnsocial Set Skype='".$skype."',  instagram='".$instagram."', youtube='".$youtube."', foursquare='".$foursquare."', linkedin='".$linkedin."',   
    googleplus='".$googleplus."', tumblr='".$tumblr."', pinterest='".$pinterest."', Facebook='".$facebook."', Vimeo='".$vimeo."', Email='".$email."', Twitter='".$twitter."' where id = 0";  
    mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"]));  
    ((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res);  
     
    echo "<script language=\"javascript\">  alert(\"DÜZENLEME BAŞARILI\");  window.location.href='index.php';</script>"; 


} 
else   
{ 
    $sql="SELECT * FROM 35cgnsocial where id=0"; 
    $result = mysqli_query($GLOBALS["___mysqli_ston"], $sql); 
    $row = mysqli_fetch_array($result); 
     
    $skype = $row['Skype']; 
    $facebook = $row['Facebook']; 
    $twitter = $row['Twitter']; 
    $instagram = $row['instagram']; 
    $youtube = $row['youtube']; 
    $linkedin = $row['linkedin']; 
    $googleplus = $row['googleplus']; 


    echo("<form action=\"index.php\" method=\"post\"> 
        <table class=\"table \" border=\"0\"> 
        <tr><td>Skype:</td><td> 
        <input class=\"form-control\" type=\"text\" name=\"Skype\"  placeholder=\"Skype kullanıcı adınızı yazınız.\" maxlength=\"200\" value=\"".$skype."\"> 
        </td></tr> 
         
        <tr><td>Facebook:</td><td> 
        <input class=\"form-control\" type=\"text\" name=\"Facebook\"   placeholder= \"http:// yada https:// ile başlayan Facebook adresinizi yazınız.\" maxlength=\"200\" value=\"".$facebook."\"> 
        </td></tr> 
		
        <tr><td>Twitter:</td><td> 
        <input class=\"form-control\" type=\"text\" name=\"Twitter\"   placeholder= \"http:// yada https:// ile başlayan Twitter adresinizi yazınız.\" maxlength=\"200\" value=\"".$twitter."\"> 
        </td></tr> 
		
        <tr><td>İnstagram:</td><td> 
        <input class=\"form-control\" type=\"text\" name=\"instagram\"    placeholder= \"http:// yada https:// ile başlayan İnstagram adresinizi yazınız.\"maxlength=\"200\" value=\"".$instagram."\"> 
        </td></tr> 
		
        <tr><td>Youtube:</td><td> 
        <input class=\"form-control\" type=\"text\" name=\"youtube\"    placeholder= \"http:// yada https:// ile başlayan Youtube adresinizi yazınız.\" maxlength=\"200\" value=\"".$youtube."\"> 
        </td></tr> 
		
        <tr><td>LinkedIn:</td><td> 
        <input class=\"form-control\" type=\"text\" name=\"linkedin\"   placeholder= \"http:// yada https:// ile başlayan LinkedIn adresinizi yazınız.\"maxlength=\"200\" value=\"".$linkedin."\"> 
        </td></tr> 
		
        <tr><td>Google+ :</td><td> 
        <input class=\"form-control\" type=\"text\" name=\"googleplus\"   placeholder= \"http:// yada https:// ile başlayan Google+ adresinizi yazınız.\" maxlength=\"200\" value=\"".$googleplus."\"> 
        </td></tr>
		

         
        <tr><td colspan=\"2\" > <button type=\"submit\"  class=\"btn btn-primary\"  name=\"submit\">Kaydet</button>         </td></tr> 
        </table> 
        </form>"); 
} 
?> 
                

</div>    
</div> <!-- // ROW -->
</div>        <!-- /#page-wrapper -->
</div>    <!-- /#wrapper -->

</body>
</html>
<?php ob_flush(); ?>
