<html>
<head>
	<title>Mersin</title>
	<meta charset="utf-8">
</head>
<body>

<?php include 'webkartali/webkartali.php';
//strip_tags
$adi     = strip_tags(trim($_POST['adsoyad']));
$mail    = strip_tags(trim($_POST['email']));
$konu    = strip_tags(trim($_POST['subject']));
$icerik  = strip_tags(trim($_POST['message']));
$tarih   = strip_tags(trim($_POST['tarih']));


if (empty($adi) or empty($icerik)) {
	echo "<meta http-equiv='refresh' content='0;URL=index.php?snc=3#contact'>";
} else {



$sorgu = $connn->prepare("INSERT INTO tab_iletisim_formu SET 
iletform_id = ?,
iletform_ad = ?,
iletform_mail = ?,
iletform_konu = ?,
iletform_detay = ?,
iletform_yazilma_tarh = ?"
);

$ekle = $sorgu->execute(array(
	null, 
	$adi, 
	$mail, 
	$konu, 
	$icerik, 
	$tarih
	));


if ($ekle) {
	echo "İşlemi Başarılı";
	echo " <meta http-equiv='refresh' content='0;URL=index.php?snc=1#contact'>";
} else {
	echo "İşlemi Başarısız Oldu..!";
	echo " <meta http-equiv='refresh' content='0;URL=index.php?snc=4#contact'>";
}
}

?>

</body>
</html>
