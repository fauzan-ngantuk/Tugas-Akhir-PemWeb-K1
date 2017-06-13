<div class="slider">
    <ul class="slides">
      <li>
        <img src="<?=base_url()?>assets2/image/aksi.jpg" style="height: 100%"> <!-- random image -->
        <div class="caption left-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="<?=base_url()?>assets2/image/sekolah1.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
<div style="background-color: #f9f9f9">
  <div class="container">
    <div class="section-card" style="padding: 25px 0px">
      <!--   Icon Section   -->
      <ul>
      <li>
      <div class="row">
      <?php
        foreach ($berita as $key) {
          # code...
          ?>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <div style="height: 200px; width: 100%; background-image: url(<?php echo $key->userPic; ?>); background-size: 100%"></div>
                <h5 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #26A69A"><?=$key->judul;?></h5>
              </div>
              <div class="card-content">
                <?=$key->deskripsi;?>
              </div>
              <div class="card-action">
                <a href="#" style="color: #26A69A">selengkapnya</a>
              </div>
            </div>
          </div>
      <?php
        }
      ?>

      
      
        

      </div>

      </li>

      </ul>
     
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
      $('.slider').slider({
        indicators : false,
        height : 500
      });
    });
</script>