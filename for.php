<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

 


<?php for ($i=0; $i < 10; $i++) { ?>
	<?php  	echo $i;?> <br>
<?php } ?>

<?php  
//il plakalarını döngü ile selectbox içine atalım.

?>

<select>
	<?php  
	for ($i=1; $i <= 81 ; $i++) { ?>
		<option><?php echo $i ?></option>
	<?php  }
	?>
	
</select>

<br><hr><br>





</body>
</html>