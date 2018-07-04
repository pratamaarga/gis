<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/datatable-bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="tengah">
          <div class="head-depan tengah">
            <div class="row">
              <div class="col-md-1">
                <img class="img-responsive margin-b10" src="img/logo22.png" width="100" height="100" alt="Logo Univ Gunadarma" />
              </div>
              <div class="col-md-11">
                <h1 class="judul-head">Sistem Informasi Geografis Universitas Gunadarma</h1>
                <p><i class="fa fa-map-marker fa-fw"></i> Sistem Informasi Geografis yang memberikan letak geografis Universitas Gunadarma di Wilayah Sekitar Jakarta</p>
              </div>
            </div>
            <hr class="hr1 margin-b-10" />
          </div>
        </div>
      </div>
    </div>
    <div class="container margin-b70">
    <nav class="navbar navbar-default navbar-utama" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Status</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="about.php" data-toggle="modal" data-target="#about"><i class="fa fa-user"></i> About</a></li>
            <li><a href="data.php"><i class="fa fa-list-ul"></i> Data Information</a></li>
            <li><a href="peta.php"><i class="fa fa-map-marker"></i> Distribution Maps</a></li>
        </div><!-- /.navbar-collapse -->
      </nav>  