<div style="background-color: #f9f9f9">
  <div class="container">
    <div class="section-card" style="padding: 50px 0px">
      <!--   Icon Section   -->
      <center>
        <h5 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #26A69A">Berita Terbaru</h5>
      </center>
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
                <div style="height: 200px; width: 100%; background-image: url('http://localhost/admin/page/cover-image/<?php echo $key->userPic; ?>'); background-size: 100%"></div>
                <h5 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #26A69A"><?=$key->judul;?></h5>
              </div>
              <div class="card-content" style="min-height: 137px">
                <?=$key->deskripsi;?>
              </div>
              <div class="card-action">
                <a href="http://localhost/sekolah/artikel/publish/<?php echo $key->id ?>" style="color: #26A69A">selengkapnya</a>
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


