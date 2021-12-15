<?php include 'webkartali.php';
$kayit_sonucu = strip_tags(@$_GET['sonuc']);

if (empty($_SESSION['user'])) {
  header('Location: index.php');
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title><?php echo $title ?></title>


<script type="text/javascript" src="ckeditor/ckeditor.js"></script>


  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a href="anasayfa.php" class="logo">TUĞBA MEMİŞ</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a href="#" data-toggle="offcanvas" class="sidebar-toggle"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
   
              <!-- User Menu-->
             
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img src="images/AhmeTT2.jpg" alt="User Image" class="img-circle"></div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['user']; ?></p>
              <p class="designation"></p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="anasayfa.php"><i class="fa fa-home"></i><span>AnaSayfa</span></a></li>
            <li><a href="gorevler.php"><i class="fa fa-edit"></i><span>Blog Yazıları</span></a></li>
            <li><a href="iletiler.php"><i class="fa fa-comments"></i><span>Gelen İletiler</span></a></li>
            <li><a href="index.php"><i class="fa fa-sign-out"></i><span>Çıkış</span></a></li>
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-home"></i> <?php echo $title; ?></h1>
           
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">AnaSayfa</a></li>
            </ul>
          </div>
        </div>
        <div class="row mt-20">
          <div class="col-md-8">
            
  <!--Form Başla -->
<div class="card">
              <h3 class="card-title">Yeni Blog Yazısı&nbsp;&nbsp;&nbsp;&nbsp; [<font color="88BDF2"><?php echo date("Y-m-d"); ?></font>]</h3>
              <br>
              <div class="card-body">
                <form action="gorev_kaydet.php" method="post">

                  <div class="form-group">
                    <label class="control-label">Yazı Başlığı</label>
                    <input type="text" name="Blogbaslik" placeholder="Lütfen Başlık Belirtiniz.." class="form-control">
                  </div>
                  <br>

                  <div class="form-group">
                    <label class="control-label">Yazı İçeriği</label>
                    <textarea rows="4" name="Blogicerik" placeholder="Lütfen Açıklama Yapınız.." class="ckeditor"></textarea>
                  </div>
                  <br>

                   <div class="form-group">
                    <label class="control-label">Resim Linki</label>
                    <input type="text" name="Blogresim" placeholder="Lütfen Başlık Belirtiniz.." class="form-control">
                  </div>
                  <br>

                  <div class="form-group">
                    <label class="control-label">Etiketler</label>
                    <input type="text" name="Blogetiket" placeholder="Lütfen Başlık Belirtiniz.." class="form-control">
                  </div>
                  <br>

                  <div class="form-group">
                    <label class="control-label">Kategori No</label>
                    <input type="text" name="Blogkategori" placeholder="Lütfen Başlık Belirtiniz.." class="form-control">
                  </div>
                  <br>

                   <div class="form-group">
                    <label class="control-label">Yazar Kim ?</label>
                    <input type="text" name="Blogyazari" placeholder="Lütfen Başlık Belirtiniz.." class="form-control">
                  </div>                  
                
              </div>
              <div class="card-footer">
<input type="hidden" name="KayitTarihi" value="<?php echo date('Y-m-d'); ?>">                
              <input type="submit" class="btn btn-success icon-btn" value="Kaydet">&nbsp;&nbsp;&nbsp;
              <input type="reset" class="btn btn-warning icon-btn">&nbsp;&nbsp;&nbsp;
              <?php 
if (empty($kayit_sonucu)) {
  echo $kayit_sonucu;
} else {
  echo $kayit_sonucu;
}
               ?>
              </div>
            </div>
           
            </form>
  <!-- Form Bitiş -->
          </div>
          
  <!-- Sol Bileşenler Başlangıç -->
          <div class="col-md-4">
            
            <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
              <div class="info">
                <h4><b>Toplam Blog Yazısı </b></h4>
                <p> <b>
<?php 
$toplam_gorv= $connn->prepare("SELECT count(*) as geneltplm FROM blog_konulari");
$toplam_gorv->execute();
$data=$toplam_gorv->fetch(PDO::FETCH_ASSOC);
echo $data['geneltplm'];

 ?>                  
                </b></p>
              </div>
            </div>

            <div class="widget-small info"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
              <div class="info">
                <h4>Gelen Posta</h4>
                <p> <b>
  <?php 
$toplam_posta=$connn->prepare("SELECT count(*) as posta FROM tab_iletisim_formu");
$toplam_posta->execute();

$data=$toplam_posta->fetch(PDO::FETCH_ASSOC);
echo $data['posta'];

 ?>                 

                </b></p>
              </div>
            </div>

            <div class="widget-small danger"><i class="icon fa fa-thumbs-o-down fa-3x"></i>
              <div class="info">
                <h4>Okunmayan Posta</h4>
                <p> <b>
<?php 
$toplam_okunmayan=$connn->prepare("SELECT count(*) as okunmayan FROM tab_iletisim_formu WHERE okundumu='0'");
$toplam_okunmayan->execute();

$data=$toplam_okunmayan->fetch(PDO::FETCH_ASSOC);
echo $data['okunmayan'];
?>                   

                </b></p>
              </div>
            </div>



            <div class="widget-small warning coloured-icon"><i class="icon fa fa-sort fa-3x"></i>
              <div class="info">
                <h4>Okunan Posta</h4>
                <p> <b>
<?php 
  $toplam_okunduki=$connn->prepare("SELECT count(*) as okunduki FROM tab_iletisim_formu WHERE okundumu='1'");
  $toplam_okunduki->execute();
  $data=$toplam_okunduki->fetch(PDO::FETCH_ASSOC);
  echo $data['okunduki'];
?>
                </b></p>
              </div>
            </div>


          </div>
          
         
<!--Sol Bileşenler Bitiş -->

      </div>
    </div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/essential-plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.vmap.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.vmap.world.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.vmap.sampledata.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	var data = {
      		labels: ["January", "February", "March", "April", "May"],
      		datasets: [
      			{
      				label: "My First dataset",
      				fillColor: "rgba(220,220,220,0.2)",
      				strokeColor: "rgba(220,220,220,1)",
      				pointColor: "rgba(220,220,220,1)",
      				pointStrokeColor: "#fff",
      				pointHighlightFill: "#fff",
      				pointHighlightStroke: "rgba(220,220,220,1)",
      				data: [65, 59, 80, 81, 56]
      			},
      			{
      				label: "My Second dataset",
      				fillColor: "rgba(151,187,205,0.2)",
      				strokeColor: "rgba(151,187,205,1)",
      				pointColor: "rgba(151,187,205,1)",
      				pointStrokeColor: "#fff",
      				pointHighlightFill: "#fff",
      				pointHighlightStroke: "rgba(151,187,205,1)",
      				data: [28, 48, 40, 19, 86]
      			}
      		]
      	};
      	var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      	var lineChart = new Chart(ctxl).Line(data);
      
      	var map = $('#demo-map');
      	map.vectorMap({
      		map: 'world_en',
      		backgroundColor: '#fff',
      		color: '#333',
      		hoverOpacity: 0.7,
      		selectedColor: '#666666',
      		enableZoom: true,
      		showTooltip: true,
      		scaleColors: ['#C8EEFF', '#006491'],
      		values: sample_data,
      		normalizeFunction: 'polynomial'
      	});
      });
    </script>
  </body>
</html>