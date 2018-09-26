<?php ob_start(); ?>

<?php
include("../../std/cgncon.php");
include("../../std/check.php");
include("../../std/lmenu.php");
error_reporting(0);
?>


<div id="page-wrapper">
    <div class="row"> <!-- ROW -->
        <div class="col-lg-12"><h1 class="page-header">Kullanıcı Yönetimi</h1></div>
        <div class="col-lg-12"><!-- RESİMLER PANELİ -->
            <div class="panel panel-default">
                <div class="panel-body"><!-- Resimler SIRALANMAYA BAŞLAR -->


      <?php 
                    if ($_POST['onself'] != "") { 
                        $id = $_POST['onself']; 
                        $uname = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['username']); 
                        $pass = md5($_POST['password']);
                        $userpasscheck = md5($_POST['password2']);
                        if($pass == $userpasscheck){
                            mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE 35cgnuser 
                            SET username = '$uname',  
                            userpass = '$pass' 
                            WHERE id = '$id'") or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
                            ((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
                            echo "<script language=\"javascript\">  alert(\"BAŞARILI.\");  window.location.href='userman.php';</script>";
                        }else{
                            echo "<script language=\"javascript\">  alert(\"ŞİFRELER EŞLEŞMİYOR.\");  window.location.href='userman.php';</script>";
                        }
                    } else { 
                        $id = $_GET['username']; 
                        $fromdb = mysqli_query($GLOBALS["___mysqli_ston"], 'select * from 35cgnuser where id = ' . $id); 
                        $info = mysqli_fetch_array($fromdb); 
                        $name = stripslashes($info["username"]); 

                        echo(stripslashes('<form action="modifyuser.php" method="post"> 
            <table class="table " border="0"> 
            <tr><td >Kullanıcı Adı:</td><td> 
            <input type="hidden" name = "onself" value = "' . $id . '" > 
            <input class="form-control" type="text" name="username" value = "' . $name . '" maxlength="40" required> 
            </td></tr> 
            <tr><td>Kullanıcı Şifresi:</td><td> 
            <input  class="form-control" type="password" name="password" value = "" maxlength="50" required> 
            </td></tr> 
            <tr><td>Kullanıcı Şifresini Tekrar Giriniz</td><td> 
            <input class="form-control" type="password" name="password2" maxlength="40" required> 
            </td></tr> 
            <tr><td colspan="2" >
    <input type="submit" class="btn btn-primary"  name="button" id="add" value="Kaydet" /> 
<input type="button" class="btn btn-default"  name="button" id="add" value="Geri Dön"  onClick="history.go(-1)"/> 
            </td></tr> 
            </table> 
            </form>')); 

                        ((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res);
                    } 

                    ?> 

                </div> <!-- //panel-body -->
            </div>    <!-- //panel-page -->
        </div> <!-- // column -->
    </div>        <!-- /#row -->
</div>    <!-- /#page-wrapper -->

</body>
</html>
<?php ob_flush(); ?>
