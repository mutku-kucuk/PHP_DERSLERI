<?php  
require_once 'baglan.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD İşlemleri</title>
</head>
<body>
	<h1>Veritabanı PDO kayıt işlemleri</h1>
	<hr>
	<?php 
	if ($_GET['durum']=="ok") {
		echo "İşlem Başarılı";
	}elseif ($_GET['durum']=="no") {
		echo "İşlem Başarısız";
	}

	?>
	<form action="islem.php" method="POST">
		<input type="text" required name="bilgilerim_ad" placeholder="Adınızı Giriniz...">
		<input type="text" required name="bilgilerim_soyad" placeholder="Soyadınızı Giriniz...">
		<input type="email" required name="bilgilerim_mail" placeholder="Mail Giriniz...">
		<input type="text" required name="bilgilerim_yas" placeholder="Yas Giriniz...">
		<button type="submit" name="insertislemi">Formu Gönder</button>

	</form>

<br>
	<h4>Kayıtların Listelenmesi</h4>
	<hr>

	<?php /* 
	$bilgilerimsor=$db->prepare("SELECT * from bilgilerim");
	$bilgilerimsor->execute();

	$bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC);
	echo "<pre>";
	print_r($bilgilerimcek);
	echo "</pre>";

	echo "<br>";

	echo $bilgilerimcek['bilgilerim_ad'];
	*/
	//SELECT İŞLEMİ
	/*
	$bilgilerimsor=$db->prepare("SELECT * from bilgilerim");
	$bilgilerimsor->execute();


	while (	$bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)) {
		echo $bilgilerimcek['bilgilerim_ad'];
		echo "<br>";
	}
	*/
	?>

</body>
</html>