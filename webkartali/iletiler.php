<?php include 'webkartali.php';

if (empty($_SESSION['user'])) {
  header('Location: index.php');
}

    function kisalt($metin, $uzunluk){
        $metin = substr($metin, 0, $uzunluk)."...";
        $metin_son = strrchr($metin, " ");
        $metin = str_replace($metin_son," ...", $metin);
        return $metin;
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

  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a href="anasayfa.php" class="logo"></a>
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
            <li><a href="anasayfa.php"><i class="fa fa-home"></i><span>AnaSayfa</span></a></li>
            <li><a href="gorevler.php"><i class="fa fa-edit"></i><span>Blog Yazıları</span></a></li>
            <li class="active"><a href="iletiler.php"><i class="fa fa-comments"></i><span>Gelen İletiler</span></a></li>
            <li><a href="index.php"><i class="fa fa-sign-out"></i><span>Çıkış</span></a></li>
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-cogs"></i> Posta Kutusu</h1>
            
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-comments fa-lg"></i></li>
              <li><a href="#">İletiler</a></li>
            </ul>
          </div>
        </div>
  <!-- Tablo Başlangıç -->
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table id="sampleTable" class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>İŞLEM</th>
                      <th>ID</th>
                      <th>Adı</th>
                      <th>Mail</th>
                      <th>Konu</th>
                      <th>İçerik</th>
                      <th>Tarihi</th>
                      <th>Okundumu?</th>
                    </tr>
                  </thead>
                  <tbody>
       
<?php 
$tumunu_cek=$connn->prepare("SELECT * FROM tab_iletisim_formu");
$tumunu_cek->execute();

while ($tumunu_ayrs=$tumunu_cek->fetch(PDO::FETCH_ASSOC)) {

if ($tumunu_ayrs['okundumu'] ==1) {
        echo '<tr>';

       echo '
        <td style="width:100px;"><a href="gorev_sil.php?id='.$tumunu_ayrs['iletform_id'].'"><span class="label label-danger">Sil</span></a>
        <a href="okundu.php?id='.$tumunu_ayrs['iletform_id'].'"><span class="label label-primary">Okundu Yap</span></a>
        </td>';


        echo '<td>'.$tumunu_ayrs['iletform_id'].'</td>
        <td>'.$tumunu_ayrs['iletform_ad'].'</td>
        <td>'.$tumunu_ayrs['iletform_mail'].'</td>
        <td>'.$tumunu_ayrs['iletform_konu'].'</td>
        <td>';

    echo $tumunu_ayrs['iletform_detay'];
    //$uzun_kelime = $tumunu_ayrs['iletform_detay'];
    //echo kisalt($uzun_kelime, 45);

        echo '</td>
        <td>'.$tumunu_ayrs['iletform_yazilma_tarh'].'</td>
        <td>Okunmuş MESAJ</td>';

    echo '</tr>';
} else {

        echo '<tr bgcolor="#ee6363">';

       echo '
        <td style="width:100px;"><a href="gorev_sil.php?id='.$tumunu_ayrs['iletform_id'].'"><span class="label label-danger">Sil</span></a>
        <a href="okundu.php?id='.$tumunu_ayrs['iletform_id'].'"><span class="label label-primary">Okundu Yap</span></a>
        </td>';


        echo '<td>'.$tumunu_ayrs['iletform_id'].'</td>
        <td>'.$tumunu_ayrs['iletform_ad'].'</td>
        <td>'.$tumunu_ayrs['iletform_mail'].'</td>
        <td>'.$tumunu_ayrs['iletform_konu'].'</td>
        <td>';

    echo $tumunu_ayrs['iletform_detay'];
    //$uzun_kelime = $tumunu_ayrs['iletform_detay'];
    //echo kisalt($uzun_kelime, 45);

        echo '</td>
        <td>'.$tumunu_ayrs['iletform_yazilma_tarh'].'</td>
        <td><b>OKUNMADI !</b></td>';

    echo '</tr>';

}


}

 ?>
                  </tbody>
                </table>              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/essential-plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <!-- <script type="text/javascript">$('#sampleTable').DataTable();</script> -->

 <script type="text/javascript">
    $('#sampleTable').DataTable({
      order: [ [1, 'desc'] ]
    });

    </script> 

  <!-- Tablo Bitiş -->

  </body>
</html>