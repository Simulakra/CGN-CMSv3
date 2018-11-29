<?php
if( isset($_GET["action"]) )
{
	session_start();
	$action = $_GET["action"];
	if( $action == "1" ){
		if( isset($_GET["product"]) ){
			if( !array_search($_GET["product"], $_SESSION["offerCart"]) ){
				array_push($_SESSION["offerCart"], $_GET["product"]);
				echo '<script>alert("Ürününüz teklif sepetine eklendi. Teklif sepetinizi görmek için sayfanın en üstündeki alışveriş sepetine tıklayınız.");</script>';
			}
		}
	}
}
header("Location: ../".$_GET["url"]);
?>
