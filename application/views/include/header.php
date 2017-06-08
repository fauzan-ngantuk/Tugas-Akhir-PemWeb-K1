<head>
      <title>Nyekolah Jogja</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets2/css/materialize.css"  media="screen,projection"/>
      <link rel="stylesheet" href="<?=base_url()?>assets2/css/table.css">
      <link rel="stylesheet" href="<?=base_url()?>assets2/css/style.css">
      
      <link rel="shortcut icon" type="image/png" href="<?=base_url()?>assets2/image/favicon.png"/>

      <!--Let browser know website is optimized for mobile-->
      <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"/> -->
      <!--Import jQuery before materialize.js-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="<?=base_url()?>assets2/js/materialize.js"></script>
      <link rel="stylesheet" href="<?=base_url()?>assets2/css/ayoshare.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <script>
        $(document).ready(function(){
          $(".button-collapse").sideNav();
          $(".dropdown-button").dropdown();
        });
      </script>
    </head>
    <body>

<nav>
        <div class="container">
          <div class="nav-wrapper">
            <a href="#" class="brand-logo"><img src="<?=base_url()?>assets2/image/logo.png" style="height: 35px; width: auto; margin-top: 12px"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

              <ul class="right hide-on-med-and-down">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="#">Berita</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="data">Data<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="#search"><i class="material-icons">search</i></a></li>
              <ul class="right hide-on-med-and-down">
                <li><a class="waves-effect waves-light btn">Login</a></li>
              </ul>
              </ul>
              <!-- <ul class="side-nav" id="mobile-demo">
                <li class="active"><a href="index.php">Home</a></li>
                <li ><a href="#">Berita</a></li>
                <li><a class="dropdown-button" href="#" data-activates="data">Data<i class="material-icons right">arrow_drop_down</i></a></li>
                <li ><a href="#">Search</a></li>
                <li ><a href="#login">Login</a></li>
              </ul> -->
          </div>
        </div>
      </nav>

      <ul id="data" class="dropdown-content">
        <li><a href="#">Pencarian</a></li>
        <li><a href="#">Data Sekolah</a></li>
      </ul>
