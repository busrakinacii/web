<?php ob_start(); session_start();

try{
	  $connn = new PDO('mysql:host=localhost;dbname=mersin;charset=utf8','root','');
	}catch(PDOException $e){
		echo 'Hata: '.$e->getMessage();
	}

$title     = "";  
$kullanici = "admin";
$sifresi   = "123";


?>
