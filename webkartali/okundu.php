<?php include 'webkartali.php';

if (empty($_SESSION['user'])) {
  header('Location: index.php');
}else{
		$okundu = strip_tags(@$_GET['id']);


		$duzenle = $connn->prepare("UPDATE tab_iletisim_formu SET okundumu=? WHERE iletform_id = ?");
					$duzenle->execute(array(1, $okundu));




		if ($duzenle) {
			header('Location: iletiler.php?sonuc=Kayıt İşlemi Başarılı.. :) ');
		} else {
			header('Location: iletiler.php?sonuc=Kayıt İşlemi Başarısız.. :( ');
		}
}

?>