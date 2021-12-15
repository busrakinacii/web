<?php include 'webkartali.php';

if (empty($_SESSION['user'])) {
  header('Location: index.php');
}else{
		$silinecek = strip_tags(@$_GET['id']);


			$geleni_sil = $connn->prepare("DELETE FROM tab_iletisim_formu WHERE iletform_id = ?");
						$geleni_sil->execute(array($silinecek));



			if ($geleni_sil) {
				header('Location: iletiler.php ');
			} else {
				header('Location: iletiler.php ');
			}

}

 ?>