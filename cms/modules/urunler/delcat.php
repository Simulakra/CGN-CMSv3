<? ob_start(); ?>
<?php
error_reporting(0);
include("../../std/cgncon.php");

$catid = $_GET['id'];

$sql = "select * from 35cgncategory where id = ".$catid;
$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"]));
$row = mysqli_fetch_array($result);
unlink($row['url']);
rmdir('katresim/'.$row['id'].'/');
mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM 35cgncategory WHERE id = ".$catid) or die(mysqli_error($GLOBALS["___mysqli_ston"]));
((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res);
header("Location: category_main.php");
?>
<?php ob_flush(); ?>
