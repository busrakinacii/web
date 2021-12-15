<?php include 'webkartali/webkartali.php';

$sorgu_blog_konu = $connn->prepare("SELECT * FROM blog_konulari ORDER BY RAND() LIMIT 4");
$sorgu_blog_konu->execute();

// yazı kısaltma fonksiyonu
function kisalt($kelime, $uzunluk, $son="...."){
 $say = strlen($kelime); // harfleri saydık
 if($say > $uzunluk){ // uzunluk değşkeninden uzun ise;
 $yeni = substr($kelime,0,$uzunluk); // büyük olduğunda parçaldık
 $yeni .= $son; // kelimenin sonuna ekledik.
 }elseif(($say == $uzunluk) or ($say < $uzunluk)){ // küçük yada eşit ise;
 $yeni = $kelime; // değişiklilk yapma
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
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="color/default.css" rel="stylesheet">
<link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>

<?php 
include 'navbar.php';
 ?>

<!-- Header area -->

<!-- spacer section -->
<section class="spacer green">
<div class="container">
	<div class="row">
		<div class="span6 alignright flyLeft">
			<blockquote class="large">
				 Hayallerin <br> ötesindeki şehir...<strong>MERSİN</strong>
		</div>
		<div class="span6 aligncenter flyRight">
			
		</div>
	</div>
</div>
</section>
<!-- end spacer section -->
<!-- section: team -->
<section id="about" class="section">
<div class="container">
	<h4>Tarihçemiz</h4>
	<div class="row">
		<div class="span4 offset1">
			<div>
				<h2>Mersin  <strong>Tarihi</strong></h2>
				<p>
					Eski bir yerleşim merkezi olan Mersin ve civârı, arkeolojik kazılara göre çok eski çağlarda insanların yaşadığı bir bölgedir.Mersin yakınında “Yümüktepe” deki kazılardan çıkan eşyâlar bu bölgede binlerce sene önce yaşamış insanları gösterir.Yümüktepe civârında bulunan kalenin ise en az 6000 sene önceye âit olduğu tesbit edilmiştir. Anadolu’da en eski târihî eser olarak kabul edilmektedir.
				        7.yüzyıldan Osmanlıların fethine kadar bu bölge, Arapların, Abbasilerin, Mısırlı Tulunoğullarının, Selçukluların, Moğolların, Haçlıların, Memlukların, Ramzanoğulları ve Karamanoğullarının eline geçmiş, 16. yüzyıldan itibaren buralar Osmanlı topraklarına katılmıştır.
				
				
				</p>
			</div>
		</div>
		<div class="span6">
			<div class="aligncenter">
			<br><br>	<img src="img/icons/kizkalesi.jpg" alt="" />
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span2 offset1 flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="img/icons/tarsus.jpg" alt="" />
				<h3>Tarsus</h3>
				<p>
					
				</p>
			</div>
		</div>
		<div class="span2 flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="img/icons/mezitli.jpg" alt="" />
				<h3>Mezitli</h3>
				<p>
					
				</p>
			</div>
		</div>
		<div class="span2 flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="img/icons/camliyayla2.png" alt="" />
				<h3>Çamlıyayla</h3>
				<p>
					
			</div>
		</div>
		
		<div class="span2 flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="img/icons/anamur.jpg" alt="" />
				<h3>Anamur</h3>
				<p>
					
				</p>
			</div>
		</div>
		<div class="span2 flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="img/icons/silifke.jpg" alt="" />
				<h3>Silifke</h3>
				<p>
					
				</p>
			</div>
		</div>
	</div>
</div>
<!-- /.container -->
</section>
<!-- end section: team -->
<!-- section: services -->
<section id="services" class="section green">
<div class="container">
	<h4>Gezilecek Yerler</h4>
	<!-- Four columns -->
	<div class="row">
		<div class="span3 animated-fast flyIn">
			<div class="service-box">
				<img src="img/icons/yerkopru.jpg" alt="" height="160" width="160" />
				<h2>Yer Köprü Şelalesi</h2>
				<p>
					 Mersin’deki en etkileyici keşfimiz açık ara Mut İlçesi’ne bağlı Yerköprü Milli Parkı içinde bulunan Yerköprü Şelalesi. Bizce Mersin’in turizm çalışmalarında en öne çıkarılası güzelliği, zaten doğa anıtı olarak korumaya alınmış. 
				</p>
			</div>
		</div>
		<div class="span3 animated flyIn">
			<div class="service-box">
				<img src="img/icons/kizkalesi3.jpg" alt="" height="170" width="160" />
				<h2>Kız Kalesi</h2>
				<p>
					 Kızkalesi Erdemli’deki en bilinen turistik yerlerden biri. Erdemli’de diye geçse de aslında Erdemli’ye 23 kilometre uzaklıkta, Mersin’e ise yaklaşık 60 kilometre.
				</p>
			</div>
		</div>
		<div class="span3 animated-fast flyIn">
			<div class="service-box">
				<img src="img/icons/cennet.jpg" alt="" height="170" width="160" />
				<h2>Cennet cehennem</h2>
				<p>
					Bu çöküntüler, bundan milyonlarca yıl önce, hatta insanlık daha ortada bile yokken, Miyosen Çağ’da (günümüzden 23 – 5 milyon yıl öncesine denk gelen zaman dilimi) mağaraların tavanının çökmesi sonucu oluşmuş. 
				</p>
			</div>
		</div>
		<div class="span3 animated-slow flyIn">
			<div class="service-box">
				<img src="img/icons/adam.jpg" alt="" height="150" width="150" />
				<h2>Adam Kayalar</h2>
				<p>
					 Adamkayalar Mersin‘in Erdemli ilçesinde ve Şeytan Deresi Vadisi’nde. Kızkalesi’ne 5 kilometre uzaklıkta yani arabanız varsa 7-8 dakikada ulaşabilirsiniz. Adamkayalar ismini kayaların üstüne yapılan insan kabartmalarından almış.
				</p>
			</div>
		</div>
	</div>
</div>
</section>
<!-- end section: services -->
<!-- section: works -->
<section id="works" class="section">
<div class="container clearfix">
	<h4>Fotoğraflarla Mersin</h4>
	<!-- portfolio filter -->
	<div class="row">
		<div id="filters" class="span12">
			<ul class="clearfix">
				<li><a href="#" data-filter="*" class="active">
				<h5>Tümü</h5>
				</a></li>
				<li><a href="#" data-filter=".web">
				<h5>Tarsus</h5>
				</a></li>
				<li><a href="#" data-filter=".print">
				<h5>Yemek</h5>
				</a></li>
				<li><a href="#" data-filter=".design">
				<h5>Özel</h5>
				</a></li>
				<li><a href="#" data-filter=".photography">
				<h5>Diğerleri..</h5>
				</a></li>
			</ul>
		</div>
		<!-- END PORTFOLIO FILTERING -->
	</div>
	<div class="row">
		<div class="span12">
			<div id="portfolio-wrap">
				<!-- portfolio item -->
				<div class="portfolio-item grid  photography print">
					<div class="portfolio">
						<a href="img/works/yemek.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/yemek.jpg" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek  resim</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid design ">
					<div class="portfolio">
						<a href="img/works/kiz.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/kiz.jpg" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek resim</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid  design web">
					<div class="portfolio">
						<a href="img/works/r4.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/r4.jpg" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek  resim</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid photography">
					<div class="portfolio">
						<a href="img/works/r1.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/r1.jpg" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek resim</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid photography">
					<div class="portfolio">
						<a href="img/works/r2.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/r2.jpg" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek resim</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid photography">
					<div class="portfolio">
						<a href="img/works/r3.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/r3.jpg" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek  resim</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid photography ">
					<div class="portfolio">
						<a href="img/works/r.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/r.jpg" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek  resim</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid photography">
					<div class="portfolio">
						<a href="img/works/kiz.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/kiz.jpg" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek  resim</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid photography print">
					<div class="portfolio">
						<a href="img/works/yemek.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/yemek.jpg" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek  resim</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid design web">
					<div class="portfolio">
						<a href="img/works/tarsus.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/tarsus.jpg" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Örnek  resim</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
			</div>
		</div>
	</div>
</div>
</section>
<!-- spacer section -->
<section class="spacer bg3">
<div class="container">
	<div class="row">
		<div class="span12 aligncenter flyLeft">
			<blockquote class="large">
				 Şimdi Mersin'e uçmanın tam vakti...
			</blockquote>
		</div>
		<div class="span12 aligncenter flyRight">
			<i class="icon-rocket icon-10x"></i>
		</div>
	</div>
</div>
</section>
<!-- end spacer section -->
<!-- section: blog -->
<section id="blog" class="section">
<div class="container">
	<h4>Sizden Gelenler</h4>
	<!-- Three columns -->
	<div class="row">
		
<?php


while($sorgu_blog_konu_ayrs=$sorgu_blog_konu->fetch(PDO::FETCH_ASSOC)) {
		echo '<div class="span3">
			<div class="home-post">
				<div class="post-image">
					<img class="max-img" src="'.$sorgu_blog_konu_ayrs['blgkonu_resim'].'" alt="" />
				</div>
				<div class="post-meta">
					<i class="icon-file icon-2x"></i>
					<span class="date">'.$sorgu_blog_konu_ayrs['blgkonu_yaz_tarihi'].'</span>
					<span class="tags">'.$sorgu_blog_konu_ayrs['blgkonu_yazan'].'</span>
				</div>
				<div class="entry-content">
					<h5><strong>'.$sorgu_blog_konu_ayrs['blgkonu_baslik'].'</strong></h5>
					<p>
						'.kisalt($sorgu_blog_konu_ayrs['blgkonu_icerik'], 20).' &hellip;
					</p>
					<a href="Blog-Konu/'.$sorgu_blog_konu_ayrs['blgkonu_id'].'" class="more">Yazının Devamı..</a>
				</div>
			</div>
		</div>';
}

?>
		


	</div>
	<div class="blankdivider30"></div>
	<div class="aligncenter">
		<a href="blog.php" class="btn btn-large btn-theme">Tüm Yazılar</a>
	</div>
</div>
</section>

<!-- end spacer section -->
<!-- section: contact -->
<section id="contact" class="section green">
<div class="container">
	<h4>İletişim</h4>
	<p>

		 İrtibat da kalalım, <strong>BİZE YAZIN</strong>..
	</p>
	<div class="blankdivider30">
	</div>
	<div class="row">
		<div class="span12">
			<div class="cform" id="contact-form">
				
				<form action="iletisimformu.php" method="post">
					<div class="row">
						<div class="span6">
							<div class="field your-name form-group">
								<input type="text" name="adsoyad" placeholder="Adınız" autocomplete="off"/>
							</div>
							<div class="field your-email form-group">
								<input type="text" name="email" placeholder="Mail Adresiniz" autocomplete="off"/>
							</div>
							<div class="field subject form-group">
								<input type="text" name="subject" placeholder="Konu Başlığı" autocomplete="off"/>
							</div>
						</div>
						<div class="span6">
							<div class="field message form-group">
								<textarea name="message" rows="5"></textarea>
							</div>
							<input type='hidden' name='tarih' value='<?php echo date("Y-m-d"); ?>'>
							<input type="submit" value="Gönder" class="btn btn-theme pull-left">
						</div>
					</div>
				</form>
<?php 
$gelen = strip_tags(@$_GET['snc']);

if ($gelen=='3') {
	echo "<b>Hatalı</b>, veya <b>Eksik</b> bilgi girişi..!";
	
} else if ($gelen=='1') {
	echo '<b>Mesajınız Gönderildi, Teşekkür Ederiz.</b>';
}else{
	echo " *** ";
}

 ?>


			</div>
		</div>
<!-- ./span12 -->
	</div>
</div>
</section>

<?php 
include 'footer.php';
 ?>


<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
<script src="js/jquery.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.localscroll-1.2.7-min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/inview.js"></script>
<script src="js/animate.js"></script>
<script src="js/validate.js"></script>
<script src="js/custom.js"></script>


</body>
</html>