<?php include 'webkartali.php';

if (empty($_SESSION['user'])) {
  header('Location: index.php');
}else{
	$silinecek = strip_tags(@$_GET['id']);

		$geleni_sil = $connn->prepare("DELETE FROM blog_konulari WHERE blgkonu_id = ?");
					$geleni_sil->execute(array($silinecek));



		if ($geleni_sil) {
			header('Location: gorevler.php ');
		} else {
			header('Location: gorevler.php ');
		}
}

 ?>