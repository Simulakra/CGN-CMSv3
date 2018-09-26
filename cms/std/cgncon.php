 <?php  
 error_reporting(1); 

 $con=($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost",  "democmsv33",  "eR2a#74b")) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
 mysqli_select_db($GLOBALS["___mysqli_ston"],democmsv33) or die(mysqli_error($GLOBALS["___mysqli_ston"]));  
 mysqli_query($GLOBALS["___mysqli_ston"], "SET NAMES 'UTF8'"); 
 mysqli_query($GLOBALS["___mysqli_ston"], "SET character_set_connection = 'UTF8'"); 
 mysqli_query($GLOBALS["___mysqli_ston"], "SET character_set_client = 'UTF8'"); 
 mysqli_query($GLOBALS["___mysqli_ston"], "SET character_set_results = 'UTF8'"); 


 $conuser=($GLOBALS["___mysqli_ston_user"] = mysqli_connect("localhost",  "democmsuser",  "xr4A59p$")) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 
 mysqli_select_db($GLOBALS["___mysqli_ston_user"],democmsv33) or die(mysqli_error($GLOBALS["___mysqli_ston_user"]));  
 mysqli_query($GLOBALS["___mysqli_ston_user"], "SET NAMES 'UTF8'"); 
 mysqli_query($GLOBALS["___mysqli_ston_user"], "SET character_set_connection = 'UTF8'"); 
 mysqli_query($GLOBALS["___mysqli_ston_user"], "SET character_set_client = 'UTF8'"); 
 mysqli_query($GLOBALS["___mysqli_ston_user"], "SET character_set_results = 'UTF8'"); 
 
 header("Content-Type: text/html; charset=UTF-8");
 ?>  