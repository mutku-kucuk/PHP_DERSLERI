<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
/*
5 lik sistem öğrencinin not durumunu yazan uygulama

1 => Kaldınız
2 => Geçtiniz
3 => Ortalama
4 => İyi
5 => Pekiyi


*/

if (isset($_POST['notunuz'])) {
	echo "Notunuz: ".$not = $_POST['not']; echo " ";

	switch ($not) {
		case '1':
			echo "Kaldınız";
			break;
		case '2':
			echo "Geçtiniz";
			break;
		case '3':
			echo "Ortalama";
			break;
		case '4':
			echo "İyi";
			break;
		case '5':
			echo "Pekiyi";
			break;
		
		default:
			echo "Tanımsız Değer";
			break;
	}
}


?>
<form action="" method="POST">
	Notunuzu Girin <input type="number" max="5" name="not">
	<input type="submit" name="notunuz">
</form>


</body>
</html>