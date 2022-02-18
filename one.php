<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
// Bu bir yorum satiridir.
# Bu bir yorum satiridir.
/* Bu bir yorum satiridir. */

//echo "Merhaba Dunya";
?>

<?php
//echo "Ogrenci"." Utku Kucuk";
?>

<?php

echo $ad = "utku";
$soyad = "kucuk";
$no = 500;

echo $Ad;

/*
-Değişkenler $ işareti ile başlar.
-Değişlene değer ataması yapılırken = işareti kullanılır.
-Değişkene metinsel ifadeler aktarılırken " " veya ' ' kullanılabilir.
-Değişkene integer "sayısal" değer aktarılırken direkt olarak yazabiliriz.
-Değişkenlerde ufak büyük harf ayrımı vardır.
-Değişkenlerde rakam ile başlamıyoruz. Ama rakam ile bitirebiliyoruz. Özel karakterlerde dahildir.
-Değişkenler boşluk bırakmıyoruz.
-Değişkenler _ alt çizgi kullanabiliriz.
-Değişkenler türkçe karakter kullanmıyoruz.
*/



echo "<br>";
echo $ad." ".$soyad;

echo "<br>";
echo "<h1>Bilgilerim</h1>";
echo "<hr>";

echo "Adınız ve Soyadınız ..........: ".$ad." ".$soyad;
echo "<br>";
echo "Numaranız ....................: ".$no;

echo "<hr>";
echo "<br><br>";

?>

<?php
/*
Matematiksel İşlemler

*/

$numara1 = 50;
$numara2 = 12;

$topla = $numara1 + $numara2;
$cikar = $numara1 - $numara2;
$carpma = $numara1 * $numara2;
$bolme = $numara1 / $numara2;

echo $topla;

echo "<br>";
echo "<br>";
echo "<br>";

if ($topla> 50) {
	echo "50 'den buyuk";
}
else{
	echo "50 'den kucuk";
}

echo "<br>";
echo "<br>";

echo "Toplama İşlemi";
echo "<br>";
echo "$numara1 + $numara2 = $topla";
echo "<br><br>";

echo "Çıkarma İşlemi";
echo "<br>";
echo "$numara1 - $numara2 = $cikar";
echo "<br><br>";

echo "Çarpma İşlemi";
echo "<br>";
echo "$numara1 - $numara2 = $carpma";
echo "<br><br>";

echo "Bölme İşlemi";
echo "<br>";
echo "$numara1 - $numara2 = $bolme";
echo "<br><br>";

echo "<hr>";
?>

<?php

echo "<br>";

$atama = 400;

echo "\$atama degiskenin degeri : ".$atama;
echo "<hr>";

$atama += 500;

echo "\$atama degiskenin degeri : ".$atama;
echo "<hr>";

$atama -= 700;

echo "\$atama degiskenin degeri : ".$atama;
echo "<hr>";

$atama *= 300;

echo "\$atama degiskenin degeri : ".$atama;
echo "<hr>";

$atama /= 500;

echo "\$atama degiskenin degeri : ".$atama;
echo "<hr>";

/*
Arttırma ve eksiltme operatörleri
*/

echo "<br>";
$atama++;
echo "\$atama değişkenin değeri: ".$atama;
echo "<hr>";

echo "<br>";
$atama--;
echo "\$atama değişkenin değeri: ".$atama;
echo "<hr>";


//Hazır fonksiyonlara bakış

echo $sayi=  rand(0,10);
echo "<br>";

if ($sayi >= 5) {
	echo "kazandın"; 
}
else{
	echo "kaybettin";
}

?>

<?php

/*

" Çift tırnak ve 'Tek' tırnak arasındaki farklar.

-Çift tırnak içinde değişken içerikleri okunabilir, tek tırnak içerisinde içerikler okunmaz.

*/

echo "<br><br>";

$ad = "Utku";
$soyad = "Kucuk";

echo "Benim Adım $ad";
echo "<br>";
echo 'Benim Adım $ad';
?>

<?php

/* Yok sayma işaretleri */

echo "Ben $ad \"Udemy\" Kursuna Kayıt Oldum";

echo "<hr>";

//Hazır String Fonksiyonlar

//strtolower => Harfleri küçültür
//strtoupper => Harfleri büyütür
//ucwords => İlk harflerini büyük yazar
//ucfirst => Metinin ilk harfini büyük yazar
//strlen => Metnin karakter sayısını verir
//substr => Metnin belirtilen karakter sayıda kısmını alır

echo $yazi = "Ben udemy ileri seviye php kursuna kayıtlıyım";
echo "<br>";
echo strtolower($yazi);
echo "<br>";
echo strtoupper($yazi);
echo "<br>";
echo ucwords($yazi);
echo  "<br>";
echo ucfirst($yazi);
echo "<br>";
echo strlen($yazi);
echo "<br>";
echo $yazi = substr($yazi, 0,10);

//Devamını oku uygulaması

$haber = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

echo "<h1>Haber Başlığı</h1>";

echo "<p>".substr($haber,0,250)."...</p>";

echo "<a href=\"#\">Devamını Oku</a>";


?>

</body>
</html>