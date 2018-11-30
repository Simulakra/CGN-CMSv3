<?php
session_start();
//$_GLOBALS["offerCart"] = $_SESSION["offerCart"];
//echo json_encode($_SESSION["offerCart"]);

header( "Location: ../getoffer.php?cart=".implode(",", $_SESSION["offerCart"]) );
?>