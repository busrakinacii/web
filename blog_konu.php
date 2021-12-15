<?php include 'webkartali/webkartali.php';

$gelen_id = strip_tags(@$_GET['WebKartali']);
settype($gelen_id, "integer");

if ($gelen_id >0 and $gelen_id<10000) {
	$konu_sorgu=$connn->prepare("SELECT * FROM blog_konulari WHERE blgkonu_id=$gelen_id ");
	$konu_sorgu->execute();
} else {
	$konu_sorgu=$connn->prepare("SELECT * FROM blog_konulari WHERE blgkonu_id=$gelen_id ");
	echo " <meta http-equiv='refresh' content='0;URL=blog.php'>";
}
 ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<base href="http://www.google.com" />
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
<!--[if lt IE 7]>
            <link href="css/font-awesome-ie7.css" type="text/css" rel="stylesheet">  
        <![endif]-->
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
<!-- Favicon -->
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



<?php 

while ($konusorgu_ayrs=$konu_sorgu->fetch(PDO::FETCH_ASSOC)) {

echo '<div class="span2"><img src="'.$konusorgu_ayrs['blgkonu_resim'].'"></div>
<div class="span10">
	<b>Yazar :</b> '.$konusorgu_ayrs['blgkonu_yazan'].'<br>
	<b>Tarih :</b> '.$konusorgu_ayrs['blgkonu_yaz_tarihi'].'<br>
	<b>Kategori :</b> '.$konusorgu_ayrs['blgkonu_kategori'].'-Nolu Kategori<br><br>
	<a href="blog.php" class="btn btn-theme">Blog Yazıları</a>
	<a href="index.php" class="btn btn-theme">AnaSayfa</a>
</div>	
<div class="span12"><hr></div>';

echo '<!-- tam başlangıç -->
<div class="span12">
<font>
<h2>'.$konusorgu_ayrs['blgkonu_baslik'].'</h2>	
	<pre>
'.$konusorgu_ayrs['blgkonu_icerik'].'
	</pre>
</font>			

<b>Etiketler :</b> '.$konusorgu_ayrs['blgkonu_etiket'].'		
</div>
<!-- tam bitiş -->';
}

?>

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