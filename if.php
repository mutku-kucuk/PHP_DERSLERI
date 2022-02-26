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
if koşulur

== -> eşit ise
=== -> aynısı ise
< -> küçük ise
> -> büyük ise
<= -> küçük yada eşit ise
>= -> büyük yada eşit ise
OR -> veya
AND -> ve



*/

$say = 800;
if ($say==5) {
	echo "Bu sayı 5 tir";

}
elseif ($say==6) {
	echo "Bu sayı 6 tir";
}
else{
	echo "Bu degisik bir sayidir";
}

echo "<br>";
echo "<hr>";

//Kısa if kullanımı

echo $say == '800' ? 'sayi 800\'dur' : 'sayi 800\' degildir';

echo "<br><br>";

$deger = "kenevir";

?>


<select>
	<option <?php echo $deger=='elma' ? 'selected': '';?>>Elma</option>
	<option <?php echo $deger=='armut' ? 'selected': '';?>>Armut</option>
	<option <?php echo $deger=='kenevir' ? 'selected': '';?>>Kenevir</option>
</select>




</body>
</html>