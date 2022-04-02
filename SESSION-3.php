<?php 
//Session nasıl oluşturulur?
session_start();
$_SESSION['adsoyad']="Muhammet Utku Küçük";
$_SESSION['il'] = "İstanbul";
echo $_SESSION['adsoyad'];

 ?>