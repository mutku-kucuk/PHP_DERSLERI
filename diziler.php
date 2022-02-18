<?php
date_default_timezone_set('Europe/Istanbul');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php

$dizi = array("utku","kucuk",10,20,30,40,50);

print_r($dizi);
echo "<br>";

echo $dizi[0]; echo "<br>";
echo $dizi[1]; echo "<br>";
echo $dizi[2]; echo "<br>";
echo $dizi[3]; echo "<br>";
echo $dizi[4]; echo "<br>";
echo $dizi[5]; echo "<br>";
echo $dizi[6]; echo "<br>";

echo "<br>";
echo "<pre>";
print_r($dizi);
echo "</pre>";

//Dizilerde sık kullanılan hazır fonksiyonlar

$dizi = array(10,8,9,5,7,6,1,4,3,2);

echo "<pre>";
print_r($dizi);
echo "</pre>";

//sort => Küçükten büyüğe doğru sıralar.

echo "<pre>";
sort($dizi);
print_r($dizi);
echo("</pre>");

//rsort => Büyükten küçüğe doğru sıralar.

echo "<pre>";
rsort($dizi);
print_r($dizi);
echo"</pre>";

$newArray = array('a','b','c','d');
echo("<pre>");
rsort($newArray);
print_r($newArray);
echo("</pre>");

//in_array => Dizi içerisinde aradığımız değerin olup olmadığını denetler. Varsa 1 değerini döndürür.

echo in_array("b",$newArray);

echo("<br>");

echo $sonuc = in_array("b",$newArray);

echo("<br>");

if ($sonuc == 1) {
	echo("Aradiginiz deger var.");
}
else{
	echo("Aradiginiz sonuc yok.");
}

echo("<br>");

//implode => Dizi değerlerini birleştirmeye yarar.

$newArray = array('a','b','c','d');

echo implode(",", $newArray);

//explode => Değişkeni parçalayarak dizi haline getirir.

echo("<br>");

$zaman = "27-10-2017 19:08";

$sonuc=explode(" ",$zaman);

echo("<pre>");
print_r($sonuc);
echo("</pre>");

echo("Tarih: ".$sonuc[0]."<br>"."Saat: ".$sonuc[1]."<br>");

echo("<hr>");

//Date Time Zone Ayarları

echo("<br>");

echo date("d-m-y h:i:s");

echo("<br>");

$sonuc=date("d-m-y h:i:s");

$sonuc = explode(" ", $sonuc);

echo("<pre>") ;
print_r($sonuc);
echo("</pre>");

echo("Tarih: ".$sonuc[0]." "."Saat: ".$sonuc[1]);


?>

</body>
</html>