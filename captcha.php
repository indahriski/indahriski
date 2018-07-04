<?php
/*
captcha.php
*/
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
session_start();
	$text = rand(10000,99999);
	$_SESSION["kode_cap"] = $text;
	$width = 65;
	$height = 25;
	$font_size = 14;

	$image_p = imagecreate($width,$height);
	$white = imagecolorallocate($image_p,0,0,0);
	$black = imagecolorallocate($image_p,225,225,225);

imagestring($image_p,$font_size,5,5,$text,$black);
imagejpeg($image_p,null,80);
//Skrip ini akanmenghasilkan nomor acak dari 10000 sampai 99999 dan 
//menyimpannya ke variabel $_SESSION [‘kode_cap’]. 
//Kemudian menghasilkan gambar 25×65 piksel dengan latar belakang hitam dan teks putih menggunakan ukuran 14.
?>
