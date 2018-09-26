<? ob_start();?> 
<?php 
$name = $_POST['username']; 
$pass = $_POST['password']; 
$pass = md5($pass); 

include("cgncon.php"); 
$sql = 'select * from 35cgnuser where username = "'.$name.'" and userpass="'.$pass.'";'; 
$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql); 
$count =  mysqli_num_rows($result); 

if($count == 1 ){ 
                    session_start(); 
                    //session_register('name'); 
                    //session_register('pass'); 
                    $_SESSION['name']= $name; 
                    $_SESSION['pass']= $pass; 
                    header("Location: ../index.php"); 
                    exit; 
} 
else{ 
            echo "<script language=\"javascript\">  alert(\" HATALI GİRİŞ  \");  window.location.href='../login.php';</script>";   
} 
mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
?> 
<? ob_flush();?> 