<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 
/* Formdan girilen sayının tek yada çift olduğunu bulma */

if (isset($_POST['notislemi'])) {
	echo "Sayı: ".$not = $_POST['not']; echo " - ";

	if ($not%2) {
		echo "Bu sayı tektir";
	}
	else{
		echo "Bu sayı cifttir";
	}
}

 ?>

 <form action="" method="POST">
 	Sayı Girin <input type="number" name="not" placeholder="Sayı Girin">
 	<button type="submit" name="notislemi">Sonuçlandır</button>
 </form>

</body>
</html>