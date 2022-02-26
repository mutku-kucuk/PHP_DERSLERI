<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>if uygulama</title>
</head>
<body>

<?php
//if uygulama örneği

/*	$kadi = "utku";
	$password="132";

	$kullanici_ad = $_POST["kullanici_ad"];
	$kullanici_password =  $_POST["kullanici_password"];

	if ($kullanici_ad == $kadi AND $kullanici_password == $password) {
		echo "Giriş Başarılı";
	}
	else{
		echo "Giriş Başarısız";
	}
*/
	$kadi = "utku";
	$password="132";
	

	if ($kadi == $_POST["kullanici_ad"] AND $password == $_POST["kullanici_password"]) {
		echo "Giriş Başarılı";
	}
	else{
		echo "Giriş Başarısız";
	}


?>
<br>
<h3>Kullanıcı Girişi</h3>
<br>

<form action="" method="POST">
	Kullanıcı Adı <input type="text" name="kullanici_ad" placeholder="Kullanıcı Adını Giriniz...">
	Şifre <input type="password" name="kullanici_password" placeholder="Şifrenizi Giriniz...">
	<button type="submit">Giriş Yap</button>
</form>
</body>
</html>