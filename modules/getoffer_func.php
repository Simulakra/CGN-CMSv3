<?php
if( isset($_POST["submit"]) ){
	$cartitems = $_POST["cartitems"];
	$name = $_POST["name"];
	$mail = $_POST["email"];
	$phone = $_POST["phone"];
	$mailmesaj = "";

	foreach ( explode(",", $cartitems) as $cartitem ) {
		$sql = "select * from 35cgnproduct where id = ".$cartitem;
  	$res = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql);
  	$row = mysqli_fetch_array($res);
  	$mailmesaj .= $cartitem." - ".$row['name']."<br>";
	}

	// phpmailer
	require("../eposta/phpmailer/class.phpmailer.php");
	$mail = new PHPMailer();
	$mail->IsHTML(true);
	$mail->Subject = "CMS Teklif";
				  
	// HTML eposta icin eposta govdesini olusturuyoruz
	$mail->Body = "CMS Teklif<br>
	               Ad / Soyad: ".$name."<br>
	               Email : ".$mail."<br>
								 Telefon : ".$phone."<br>
								 Teklif Ürünleri : <br>".$mailmesaj."<br>
								 ";	

	$mail->IsSMTP();
	$mail->Host = "mail.cgnyazilim.com";
	$mail->SMTPAuth = true;     
	$mail->Username = "cgn@cgnyazilim.com";
	$mail->Password = "027CAG951an";
	$mail->From = "cgn@cgnyazilim.com";
	$mail->AddAddress("cgn@cgnyazilim.com");

	if(!$mail->Send()) {
	 echo "Mesajiniz gonderilemedi.<p>";
	 echo "Hata : " . $mail->ErrorInfo;
	 die();
	 echo yonlendir(3, "../index.php");
	}
	else
	 echo yonlendir(0, "../index.php");

	function yonlendir($sure,$sayfa){ 
	  $deger = "<meta http-equiv=\"refresh\" content=\"$sure;url=$sayfa\">\n"; 
	  return $deger; 
	}	

	header("Location: ../index.php");
}
else if( isset($_GET["action"]) )
{
	$act = true;
	session_start();
	$action = $_GET["action"];
	if($_SESSION["offerCart"]==null)
		$_SESSION["offerCart"] = array();
	if( $action == "1" ){
		if( isset($_GET["product"]) ){
			if( !array_search($_GET["product"], $_SESSION["offerCart"]) ){
				array_push($_SESSION["offerCart"], $_GET["product"]);
				echo '<script>alert("Ürününüz teklif sepetine eklendi. Teklif sepetinizi görmek için sayfanın en üstündeki alışveriş sepetine tıklayınız.");';
				echo ' window.location.href="../'.$_GET["url"];
				echo '"</script>';
				$act=false;
			}
		}
	}
	else if( $action == "2" ){
		if( isset($_GET["product"]) ){
			if( ($key = array_search($_GET["product"], $_SESSION["offerCart"])) !== false ){
				unset($_SESSION["offerCart"][$key]);
				echo '<script>alert("Ürününüz teklif sepetinden çıkarıldı.");';
				echo ' window.location.href="../'.$_GET["url"];
				echo '"</script>';
				$act=false;
			}
		}
	}
	
	if($act) echo '<script>window.location.href="../'.$_GET["url"].'"</script>';
}

//header("Location: ../".$_GET["url"]);
?>
