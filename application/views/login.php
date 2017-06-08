<html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets2/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets2/css/materialize.css">
  
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
  </style>
</head>

<body>
  <div class="section"></div>
  <main>
    <center>
      <img class="responsive-img" style="width: 250px; margin-top: 50px" src="<?=base_url()?>assets2/image/logo.png" />
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 48px 80px 0px 80px; border: 1px solid #EEE;">

          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12" style=" max-width= 100px;">
                  <i class="material-icons prefix">email</i>
                  <input id="icon_email" type="text" class="validate">
                  <label for="icon_email" >Email</label>
                </div>
                </div>

                <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">lock</i>
                  <input id="icon_password" type="tel" class="validate">
                  <label for="icon_password">Password</label>
                </div>
                </div>

                <button class="large btn waves-effect waves-light" type="submit" name="action" style=" padding: 0px 70px 0px 70px ">Submit
                </button>
              
              </div>
            </form>
          </div>
        

        </div>
      </div>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>