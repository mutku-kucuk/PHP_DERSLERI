<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>get post methodları</title>
</head>
<body>
	<?php
	//echo $_POST['ad']." ".$_POST['soyad'];

	echo $_GET['ad']." ".$_GET['soyad'];
	$kullanici_id=151;
	?>

	<form action="islem.php" method="GET">
		Ad <input type="text" name="ad" placeholder="Adınızı Giriniz">
		Soyad <input type="text" name="soyad" placeholder="Soyadınızı Giriniz">
		<input type="submit" value="Formu Gönder" name="">
	</form>

	<a href="islem.php?kullanici_id=<?php echo $kullanici_id ?>"><button>Kullanıcıyı Sil</button></a>
</body>
</html>