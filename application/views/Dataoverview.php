<?php
  $jum_sekolah = $this->my_lib->row_count('profil');
  $jum_siswa = $this->my_lib->get_sum_row('siswa', array(), 'jumlah_siswa');
  $jum_prestasi = $this->my_lib->row_count('prestasi');
?>
<div>
  <div class="container" style="padding: 50px 0px">
    <div class="row">
      <div class="col s12 m4">
        <center>
          <i class="medium material-icons" style="color: #26A69A">school</i>
          <h5 style="color: #999">Sekolah</h5>
          <h1 style="color: #999; margin-bottom: 0px"><?php echo $jum_sekolah; ?></h1>
        </center>
      </div>
      <div class="col s12 m4">
        <center>
          <i class="medium material-icons" style="color: #26A69A">person</i>
          <h5 style="color: #999">Siswa</h5>
          <h1 style="color: #999; margin-bottom: 0px"><?php echo $jum_siswa; ?></h1>
        </center>
      </div>
      <div class="col s12 m4">
        <center>
          <i class="medium material-icons" style="color: #26A69A">star</i>
          <h5 style="color: #999">Prestasi</h5>
          <h1 style="color: #999; margin-bottom: 0px"><?php echo $jum_prestasi; ?></h1>
        </center>
      </div>
    </div>
  </div>
</div>