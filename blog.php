<?php include 'webkartali/webkartali.php';

$konu_sorgu = $connn->prepare("SELECT * FROM blog_konulari order by blgkonu_id DESC");
$konu_sorgu->execute();


function kisalt($kelime, $uzunluk, $son="...."){
 $say = strlen($kelime);
 if($say > $uzunluk){ 
 $yeni = substr($kelime,0,$uzunluk);
 $yeni .= $son;
 }elseif(($say == $uzunluk) or ($say < $uzunluk)){
 $yeni = $kelime;
 }
 return $yeni;
}


 ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Mersin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- css -->
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- skin color -->
<link href="color/default.css" rel="stylesheet">
<link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>

<?php 
include 'navbar_anasayfa.php';
 ?>

<!-- spacer section -->
<section class="spacer green">
<div class="container">
	<div class="row">
		<div class="span12 aligncenter flyUp">
			<h2 class="pagetitle">Mersin </h2>
		</div>
	</div>
</div>
</section>
<!-- end spacer section -->
<!-- section: team -->
<section id="maincontent" class="inner">
<div class="container">
<div class="row">



<!--- konu başlangıç -->
<?php 

while($konusorgu_ayrs=$konu_sorgu->fetch(PDO::FETCH_ASSOC)) {
		echo '<div class="span2"><img src="'.$konusorgu_ayrs['blgkonu_resim'].'"></div>
<div class="span10">
<h2>'.$konusorgu_ayrs['blgkonu_baslik'].'</h2>';
echo "<b>Yazar : </b>".$konusorgu_ayrs['blgkonu_yazan']." &nbsp;&nbsp;&nbsp;&nbsp; <b>Tarih : </b> ".$konusorgu_ayrs['blgkonu_yaz_tarihi'];
echo '<hr>';

echo kisalt($konusorgu_ayrs['blgkonu_icerik'], 200);
//echo $konusorgu_ayrs['blgkonu_icerik'];
echo '
<br><br><br>
<a href="Blog-Konu/'.$konusorgu_ayrs['blgkonu_id'].'" class="btn btn-small btn-theme">İçeriğik Detayları..</a>

<br><br><br><br>
</div>	
<div class="span12"><hr></div>
<!-- konu bitiş -->';
}


 ?>



		<!-- tam başlangıç -->
		<div class="span12">
<font>
	:) 
	</font>			
		</div>
		<!-- tam bitiş -->
				
	

</div>
<!-- end container -->
</section>


<?php 
include 'footer.php';
 ?>


<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- nav -->
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.nav.js"></script>
<!-- localScroll -->
<script src="js/jquery.localscroll-1.2.7-min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.js"></script>
<!-- prettyPhoto -->
<script src="js/jquery.prettyPhoto.js"></script>
<!-- Works scripts -->
<script src="js/isotope.js"></script>
<!-- flexslider -->
<script src="js/jquery.flexslider.js"></script>
<!-- inview -->
<script src="js/inview.js"></script>
<!-- animation -->
<script src="js/animate.js"></script>
<!-- twitter -->
<script src="js/jquery.tweet.js"></script>
<!-- contact form -->
<script src="js/validate.js"></script>
<!-- custom functions -->
<script src="js/custom.js"></script>
</body>
</html>