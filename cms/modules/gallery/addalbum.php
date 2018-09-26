<?php 
ob_start(); 
error_reporting(0);
include("../../std/cgncon.php");
?>


<?php  

    $folder = $_GET['folder']; 
    $sql = "INSERT INTO 35cgnalbum (folder,  createdate)     values('".$folder."', '".date('Y-m-d')."');"; 
    mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"]));         

((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
header("Location: index.php"); 
exit; 

?> 

<?php ob_flush(); ?>
