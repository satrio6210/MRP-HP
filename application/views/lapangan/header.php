<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="No idea what this thing is.">
    <meta name="author" content="Mohamad David | Nur laili | Aisyah paramastri">

    <title>Nama Toko | <?php echo $page ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.countdown.css"> 
    <script type="text/javascript" src="js/jquery.plugin.js"></script> 
    <script type="text/javascript" src="js/jquery.countdown.js"></script>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/clean-blog.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/img.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url();?>">Nama Toko</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('lapangan/index');?>">Home</a>
            </li>
            
            <!--<li class="nav-item dropdown">
              <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret">Kompetisi</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url('lapangan/homePil/'.'futsalKom');?>">Futsal</a></li>
                <li><a class="nav-link" href="<?php echo base_url('lapangan/homePil/'.'basketKom');?>">Basket</a></li>
                <li><a class="nav-link" href="<?php echo base_url('lapangan/homePil/'.'badmintonKom');?>">Badminton</a></li>
              </ul>
            </li> -->
            <li class="nav-item">
              <?php 
              if($this->session->has_userdata('username')){
                echo '<a class="nav-link" href="'.base_url('lapangan/kain').'">Status Kain</a>';
              }
            ?>
            </li>
            <li class="nav-item">
              <?php 
              if($this->session->has_userdata('username')){
                echo '<a class="nav-link" href="'.base_url('lapangan/pesanan').'">History Pemesanan</a>';
              }
            ?>
            </li>
            <li class="nav-item <?php if($page =='login') {echo 'active';} ?>dropdown">
            <?php 
              if($this->session->has_userdata('username')){
              echo '
              <a class="nav-link" href="'.base_url('lapangan/logout').'" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$this->session->userdata('nama').'<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="'.base_url('lapangan/logout').'">Logout</a></li>
              </ul>
              ';
            }else{
               echo '<a class="nav-link" href="'.base_url('lapangan/login').'">Login</a>';
            }
             ?>
            </li>         
          </ul>
        </div>
      </div>
    </nav>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('https://www.goldingofnewmarket.co.uk/Content/User/Upload/StaticPages/Golding%20Tailoring%20Crop%202.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Nama Toko</h1>
              <span class="subheading">Tempat pemesanan [enter your description here]</span>
            </div>
          </div>
        </div>
      </div>
    </header>
