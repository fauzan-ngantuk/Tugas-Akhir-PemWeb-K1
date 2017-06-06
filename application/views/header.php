<head>
      <title>Nyekolah.ID</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?=base_url()?>assets2/css/materialize.css"  media="screen,projection"/>
      <link rel="stylesheet" href="<?=base_url()?>assets2/css/table.css">

      <!--Let browser know website is optimized for mobile-->
      <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?=base_url()?>assets2/js/materialize.min.js"></script>
      <link rel="stylesheet" href="<?=base_url()?>assets2/css/ayoshare.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <script>
        $(document).ready(function(){
        $(".button-collapse").sideNav();
        $('.slider').slider();
        $(".dropdown-button").dropdown();
        $('.modal').modal();
        $('#login').modal('open');
        $('#login').modal('close');
        });
      </script>
    </head>
    <body>

<div id="nav">
    <div class="navbar-fixed">
        <nav class="nav">
            <div class="nav-wrapper container">
                <a href="<?=base_url()?>" class="brand-logo"><img src="<?=base_url()?>assets2/image/nyekolah.png"></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Berita</a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="data">Data<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="#"><i class="material-icons">search</i></a></li>
                    <li><a href="#login" class="waves-effect waves-light btn">Login</a></li>
                    <li><a href="#" class="dropdown-button" data-activates="module"><i class="material-icons">view_module</i></a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li class="active"><a href="index.php">Home</a></li>
                </ul>
                <!--Dropdown Module Start-->
                <ul id="data" class="dropdown-content">
                    <li><a href="#">Data Sekolah</a></li>
                    <li><a href="#">Data Peserta Didik</a></li>
                    <li><a href="#">Data Guru</a></li>
                </ul>
                <!--Dropdown Module End-->
            </div>
        </nav>
    </div>
</div>
