<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/img/cookies.png">

  <style>
    @media print {
      .header {
        display: none;
      }
    }
  </style>

  <title><?php echo $title; ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo $url ?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo $url ?>assets/bootstrap/css/datetimepicker.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

  <!-- Custom styles for this template -->
  <link href="<?php echo $url ?>assets/css/navbar-fixed-top.css" rel="stylesheet">
  <link href="<?php echo $url ?>assets/css/full-slider.css" rel="stylesheet">
  <link href="<?php echo $url ?>assets/css/style.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top navbar-blue">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand header" href="index.php">Love Me Baked</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo $url ?>">Home</a></li>
          <li><a href="<?php echo $url ?>menu.php">Menu</a></li>
          <li><a href="<?php echo $url ?>kontak.php">Kontak Kami</a></li>
          <li><a href="<?php echo $url ?>info.php">Info Pembayaran</a></li>
          <?php if (!empty($_SESSION['iam_user'])) { ?>
            <?php
            $user = mysqli_fetch_object(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT*FROM user where id='$_SESSION[iam_user]'"));
            ?>
            <li><a href="<?php echo $url ?>pembayaran.php">Pembayaran</a></li>
            <li class="dropdown">

              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi <?php echo $user->nama; ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $url ?>profile.php">Profil</a></li>
                <li><a href="<?php echo $url ?>logout.php">Logout</a></li>
              </ul>
            </li>
          <?php } else { ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login/Register <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $url ?>login.php">Login</a></li>
                <li><a href="<?php echo $url ?>register.php">Register</a></li>
              </ul>
            </li>
          <?php } ?>


        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>

  <?php if ('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] == $url . 'index.php') { ?>
    <div class="container">

      <!-- Full Page Image Background Carousel Header -->
      <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
          <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('<?php $url ?>assets/img/logo1.png');"></div>
            <!-- <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div> -->
          </div>
          <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('<?php $url ?>assets/img/logo2.png');"></div>
            <!-- <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div> -->
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
        </a>

      </header>
    </div>
  <?php } ?>