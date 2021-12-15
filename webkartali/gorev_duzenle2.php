<?php include 'webkartali.php';

if (empty($_SESSION['user'])) {
  header('Location: index.php');
}else{
        $Blogbaslik   	= strip_tags(@$_POST['Blogbaslik']);
        $Blogicerik   	= @$_POST['Blogicerik'];
        $Blogresim    	= strip_tags(@$_POST['Blogresim']);
        $Blogetiket   	= strip_tags(@$_POST['Blogetiket']);
        $Blogkategori 	= strip_tags(@$_POST['Blogkategori']);
        $Blogyazari   	= strip_tags(@$_POST['Blogyazari']);
        $DuzenleTarihi  = @$_POST['DuzenleTarihi'];

        $duzenlenecek_id = strip_tags($_POST['id_degeri']);


        $duzenle = $connn->prepare("UPDATE blog_konulari SET
        blgkonu_baslik= ?,
        blgkonu_icerik= ?,
        blgkonu_yazan= ?,
        blgkonu_yaz_tarihi= ?,
        blgkonu_etiket= ?,
        blgkonu_kategori= ?,
        blgkonu_resim= ?
        WHERE blgkonu_id = $duzenlenecek_id");
        $update = $duzenle->execute(array(
             $Blogbaslik,
             $Blogicerik,
             $Blogyazari,
             $DuzenleTarihi,
             $Blogetiket,
             $Blogkategori,
             $Blogresim
        ));




        if ($duzenle) {
        	header('Location: gorev_duzenle.php?id='.$duzenlenecek_id.'&sonuc=Kayıt İşlemi Başarılı.. :) ');
        } else {
        	header('Location: gorev_duzenle.php?id='.$duzenlenecek_id.'&sonuc=Kayıt İşlemi Başarısız.. :( ');
        }
}
?>