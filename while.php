<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php  
//While döngüsü
$say = 1;
while ($say <=10) {
	echo $say++." ";
}


?>

<?php  
echo "<br>";
$dizi=array("elma","armut","üzüm","kavun","karpuz");

echo "<pre>";
print_r($dizi);
echo "</pre>";
echo "<hr>";

echo $dizi[0]; echo "<br>";
echo $dizi[1]; echo "<br>";
echo $dizi[2]; echo "<br>";
echo $dizi[3]; echo "<br>";
echo $dizi[4]; echo "<br>";

echo "<br>";

$say = count($dizi);

for ($i=0; $i <= $say; $i++) { 
	echo $dizi[i]; echo "<br>";
}
?> 

</body>
</html>