<?php  
ob_start();

session_start();

//Belirtilen Session Silme İşlemi
echo $_SESSION['adsoyad'];
echo "<br>";
echo $_SESSION['il'];

?>