<?php include 'webkartali.php';

if (empty($_SESSION['user'])) {
  header('Location: index.php');
}else{
		$Blogbaslik   = strip_tags(@$_POST['Blogbaslik']);
		$Blogicerik   = @$_POST['Blogicerik'];
		$Blogresim    = strip_tags(@$_POST['Blogresim']);
		$Blogetiket   = strip_tags(@$_POST['Blogetiket']);
		$Blogkategori = strip_tags(@$_POST['Blogkategori']);
		$Blogyazari   = strip_tags(@$_POST['Blogyazari']);
		$KayitTarihi  = @$_POST['KayitTarihi'];


		$sorgu = $connn->prepare("INSERT INTO blog_konulari SET 
		blgkonu_id = ?,
		blgkonu_baslik = ?,
		blgkonu_icerik = ?,
		blgkonu_yazan = ?,
		blgkonu_yaz_tarihi = ?,
		blgkonu_etiket = ?,
		blgkonu_kategori = ?,
		blgkonu_resim = ?"
		);

		$ekle = $sorgu->execute(array(
		 	null,
			$Blogbaslik,
			$Blogicerik,
			$Blogyazari,
			$KayitTarihi,
			$Blogetiket,
			$Blogkategori,
			$Blogresim	
			));


		if ($ekle) {
			header('Location: anasayfa.php?sonuc=Kayıt İşlemi Başarılı.. :)');
		} else {
			header('Location: anasayfa.php?sonuc=Kayıt İşlemi Başarısız.. :(');
		}
}

 ?>