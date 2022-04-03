<?php  

//COOKIE nedir nasıl oluşturulur?
/*$adsoyad = "Muhammet Utku Küçük";

setcookie("adsoyad",$adsoyad);

echo $_COOKIE['adsoyad'];*/


$adsoyad = "Muhammet Utku Küçük";

//setcookie("adsoyad",$adsoyad,time()+3600);
setcookie("adsoyad",$adsoyad,strtotime("+1 hours"));

echo $_COOKIE['adsoyad'];

/*COOKIE süre arttırma
strtotime("+30 seconds"); 30 saniye 
strtotime("+1 hours"); 1 saat 
strtotime("+1 day"); 1 gün 
strtotime("+1 week"); 1 hafta 

*/
?>