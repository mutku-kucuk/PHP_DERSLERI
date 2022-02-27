<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php  
$b = 10;

function ekle($a){
	global $b;
	return $a + $b;
}

echo ekle(50);
?>

</body>
</html>