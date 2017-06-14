<div style="background-color: #f9f9f9">
  <div class="container">
  <br>
<?php foreach ($ar as $key) {
  # code... ?>

  <div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <h5 style="color: #26A69A"><strong> <?php echo $key->judul; ?> </strong></h5>
        <span><i class="fa fa-calendar"></i> <?php echo $key->pubdate; ?> </span>
        <br><br>
        <br>

                            <p style="text-align: center;"><img src="http://localhost/admin/page/cover-image/<?php echo $key->userPic; ?>" alt="" width="525" height="auto" /></p>
          <br><br>

          <?php echo $key->konten; ?>
      </div>
    </div>
  </div>

    
    </div>

    </div>
  </div>
</div>
        </div>  
</div>
    



<?php
} ?>
