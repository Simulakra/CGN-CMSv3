<?php
error_reporting(0);
session_unset();
if(isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}
session_destroy();
header("Location: ../cms/login.php");

?>

