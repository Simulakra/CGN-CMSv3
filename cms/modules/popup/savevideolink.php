<?php 
ob_start(); 
error_reporting(0);
include("../../std/cgncon.php");
 ?>
                    <?php 
 //STOP PLAY ISSUE
                 
                        $videolink = $_POST['videolink']; 
                        $newurl = str_replace("https://www.youtube.com/watch?v=", "https://www.youtube.com/embed/",$videolink); 
						//$newurl = $newurl."?version=3&enablejsapi=1&playerapiid=popupplayer";
                        $sql = "UPDATE 35cgnpopup SET  videolink = '" . $newurl . "' "; 
                        mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 							
                        ((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
						        echo "<script language=\"javascript\">  alert(\"Video güncellendi\");  window.location.href='index.php';</script>"; 
						    
                    ?> 
<?php ob_flush(); ?>