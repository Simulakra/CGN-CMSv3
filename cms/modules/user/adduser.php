<?php ob_start(); ?>

<?php
include("../../std/cgncon.php");
include("../../std/check.php");
include("../../std/lmenu.php");
error_reporting(0);
?>


<div id="page-wrapper">
    <div class="row"> <!-- ROW -->
        <div class="col-lg-12"><h1 class="page-header">Yeni Kullanıcı Ekle</h1></div>
        <div class="col-lg-12"><!-- RESİMLER PANELİ -->
            <div class="panel panel-default">
                <div class="panel-body"><!-- Resimler SIRALANMAYA BAŞLAR -->


          <?php 
                    if (isset($_POST[username])) { 


                        if ($_POST['username'] != "" && $_POST['password'] != "") { 
                            $userpass = md5($_POST['password']); 
                            $userpasscheck = md5($_POST['password2']); 
                            $user = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST[username]); 
                            if($userpass==$userpasscheck){
                                mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO 35cgnuser VALUES (NULL, '$user', '$userpass');"); 
                                ((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
                                header("Location: userman.php"); 
                            }
                            else{
                                ((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
                                echo "<script language=\"javascript\">  alert(\"ŞİFRELER EŞLEŞMİYOR.\");  window.location.href='userman.php';</script>";  

                            }
                        } else { 
                            ((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
                                  echo "<script language=\"javascript\">  alert(\"HATA >İŞLEM BAŞARISIZ, TEKRAR DENEYİNİZ\");  window.location.href='index.php';</script>";  

                        } 

                    } else { 

                        echo("<form action=\"adduser.php\" method=\"post\"> 
        <table class=\"table \" border=\"0\"> 
        <tr><td>Kullanıcı Adı:</td><td> 
        <input class=\"form-control\" type=\"text\" name=\"username\" maxlength=\"40\" required> 
        </td></tr> 
        <tr><td>Kullanıcı Şifresi</td><td> 
        <input class=\"form-control\" type=\"password\" name=\"password\" maxlength=\"40\" required> 

        </td></tr> 
        <tr><td>Kullanıcı Şifresini Tekrar Giriniz</td><td> 
        <input class=\"form-control\" type=\"password\" name=\"password2\" maxlength=\"40\" required> 
        
        </td></tr> 
        <tr><td colspan=\"2\"> 
    <input type=\"submit\" class=\"btn btn-primary\"  name=\"button\" id=\"add\" value=\"Kaydet\" /> 
<input type=\"button\" class=\"btn btn-default\"  name=\"button\" id=\"add\" value=\"Geri Dön\"  onClick=\"window.location.href='userman.php'; return false;\"/> 
        </td></tr> 
        </table> 
        </form>"); 
                    } 
                    ?> 
                </div> 
            </div> 
        </div>
    </div>  
</div> 
</body>
</html>
<?php ob_flush(); ?>