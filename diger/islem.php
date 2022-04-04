<?php  

require_once 'baglan.php';

if (isset($_POST['insertislemi'])) {
	$kaydet = $db->prepare("INSERT into bilgilerim set 
		bilgilerim_ad=:bilgilerim_ad,
		bilgilerim_soyad=:bilgilerim_soyad,
		bilgilerim_mail=:bilgilerim_mail,
		bilgilerim_yas=:bilgilerim_yas
		");

	$insert=$kaydet->execute(array(

	'bilgilerim_ad' => $_POST['bilgilerim_ad'],
	'bilgilerim_soyad' => $_POST['bilgilerim_soyad'],
	'bilgilerim_mail' => $_POST['bilgilerim_mail'],
	'bilgilerim_yas' => $_POST['bilgilerim_yas']


	));

	if ($insert) {
		//echo "Kayıt Başarılı";
		Header("Location:index.php?durum=ok");
		exit;
	}
	else{
		//echo "Kayıt Başarısız";
		Header("Location:index.php?durum=no");
		exit;
	}
}

?>