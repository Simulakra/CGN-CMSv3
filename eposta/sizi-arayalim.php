<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
<?PHP

 // phpmailer sinifimizi uygulamamiza dahil ediyoruz.
 require("phpmailer/class.phpmailer.php");

 $mail = new PHPMailer();
 
 // Eposta HTML olarak gonderilsin (HTML gonderimini iptal etmek icin true yerine false yazin)
 $mail->IsHTML(true);
 
 // Eposta konu basligi
 $mail->Subject = "İletişim Formu";
 
 // TXT eposta icin eposta govdesini olusturuyoruz
 $mail->AltBody = "Bizi Arayın Formu\n\n
                   Ad / Soyad: ".$_POST['name']."\n
                   Telefon : ".$_POST['phone']."\n
                   İlgili Servis : ".$_POST['service']."\n
				  ";
				  
 // HTML eposta icin eposta govdesini olusturuyoruz
 $mail->Body    = "Bizi Arayın Formu<br>
                   Ad / Soyad: ".$_POST['name']."<br>
                   Telefon : ".$_POST['phone']."<br>
                   İlgili Servis : ".$_POST['service']."\n
                ";

 // epostamizi SMTP ustunden yollayalim.
 $mail->IsSMTP();

 // SMTP sunucu adresimiz.
 $mail->Host = "mail.cgnyazilim.com";
 
 // Sunucumuz kimlik dogrulamasi istiyorsa "true" degerini verelim.
 $mail->SMTPAuth = true;     

 // SMTP kullanici adi ve parolasi
 $mail->Username = "cgn@cgnyazilim.com";
 $mail->Password = "027CAG951an";

 // Eposta kimden gidiyor?
 $mail->From = "cgn@cgnyazilim.com";

 // Eposta icin gorunen isim (Opsiyonel)
 //$mail->FromName = "Teknik Destek";

 // hedef adres (gorunen isim olmadan)
 $mail->AddAddress("onur@cgnyazilim.com");
 
 // hedef adres (gorunen isim ile birlikte)
 //$mail->AddAddress("alici1@adres.com", "ALICI 1");

 // Eposta birden fazla kisiye gidecek ise $mail->AddAddress'i yine kullanabiliriz.
 //$mail->AddAddress("alici2@adres.com");

 // Yanitlama adresi ornegi (Opsiyonel)
 //$mail->AddReplyTo("destek@niobeweb.net","Teknik Destek");

 // Eposta icin sozcuk kaydirma. (Opsiyonel)
 //$mail->WordWrap = 50;

 // Eposta eklentisi (Opsiyonel)
 //$mail->AddAttachment("deneme.txt");

 // Eposta eklentisi (giden dosya adini biz belirleyelim) (Opsiyonel)
 //$mail->AddAttachment("deneme.txt", "yeni.txt");

 if(!$mail->Send()) {
   echo "Mesajiniz gonderilemedi.<p>";
   echo "Hata : " . $mail->ErrorInfo;
   die();
   echo yonlendir(3, "dsa.php");
  }
 else{
   echo yonlendir(0, "index.php");
}
 function yonlendir($sure,$sayfa){ 
        $deger = "<meta http-equiv=\"refresh\" content=\"$sure;url=$sayfa\">\n"; 
        return $deger; 
}

?>
</body>
</html>