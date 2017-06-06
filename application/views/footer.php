<!-- Modal Structure -->
<div id="login" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Login</h4>
      <form action="" class="col s12" method="post" role="form">
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" name="email" class="validate" value="<?php if(isset($error)){ echo $_POST['email']; } ?>">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="password" type="password" name="password" class="validate">
            <label for="password">Password</label>
          </div>
        </div>
        <button class="waves-effect waves-light btn" type="submit" name="submit"><i class="material-icons right">send</i>Login</button>
      </form>
        <p>Lupa Password? Reset <a href="reset.php">Disini</a></p>
  </div>
  <div class="modal-footer">
    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
  </div>
</div>
<!-- Modal Structure End -->


        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l3 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l3 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l3 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l3 s12">
                <h5 class="white-text">HUBUNGI KAMI</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container"><center>
            &copy; 2017 Nyekolah.ID Developer | Made with <span class="fa fa-heartbeat" style="color:#f66767"></span> in Yogyakarta, Indonesia.</center>
            </div>
          </div>
        </footer>
        <script src='https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js'></script>
        <script src="<?=base_url()?>assets2/js/table.js"></script>
        <!-- jQuery Awesome Sosmed Share Button -->
        <script src="<?=base_url()?>assets2/js/ayoshare.js"></script>    
        <script src="<?=base_url()?>assets2/js/ayoshare.min.js"></script>    
        <script>
          $(function() {
            $(".shareini").ayoshare({
              google : true,
              facebook : true,
              pinterest : true,
              linkedin : true,
              twitter : true,
              email : true,
              whatsapp : true,
              telegram : true,
              line : true,
              bbm : true,
              viber : true,
              sms : true
            });
            $("#unik").ayoshare({
              google : true,
              stumbleupon : true,
              facebook : true,
              pinterest : true,
              bufferapp : true,
              reddit : true,
              vk : true,
              pocket : true,
              twitter : true,
              digg : true,
              telegram : true,
              sms : true
            });
          });
        </script>
        <script>
          (function($) {
            $(function() {
            $('.dropdown-button').dropdown({
              inDuration: 300,
              outDuration: 225,
              hover: true, // Activate on hover
              belowOrigin: true, // Displays dropdown below the button
              alignment: 'left' // Displays dropdown with edge aligned to the left of button
            });
          }); // End Document Ready
        })(jQuery); // End of jQuery name space
      </script>
