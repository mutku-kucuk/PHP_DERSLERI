<?php  
//Fonksiyon var mı yok mu?
//function_exists fonksiyonu var yok işlemini yapar...
function yaz($a){
return $a;

}

if (function_exists("yaz")) {
	echo "fonksiyon var";
}
else{
	echo "fonksiyon yok";
}
?>