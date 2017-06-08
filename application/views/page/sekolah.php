<div style="background-color: #f9f9f9; padding: 20px 0px">
  <div class="container">
  <!-- card material start -->
    <div class="card material-table">
      <p align="right"><a class="waves-effect waves-light btn" href="#"><i class="material-icons left">file_download</i>PRINT TO EXCEL</a></p>
        <div class="table-header">
          <span class="table-title">Data Sekolah</span>
          <div class="actions">
            <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
          </div>
        </div>
        
        <table id="datatable">
          <thead>
            <tr>
              <th>No</th>
              <th><b>Kabupaten</b></th>
              <th><b>SD/MI</b></th>
              <th><b>SMP/MTS</b></th>
              <th><b>SMA/MA</b></th>
              <th><b>SMK</b></th>
              <th><b>Jumlah</b></th>
            </tr>
          </thead>
          <tbody>
          <?php
           $no = 1; 
           foreach ($kab as $k) {
            $id_kabu = $k->id;
            $sd = $this->my_lib->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'SD'));
            $mi = $this->my_lib->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'MI'));
            $smp = $this->my_lib->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'SMP'));
            $mts = $this->my_lib->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'MTS'));
            $sma = $this->my_lib->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'SMA'));
            $ma = $this->my_lib->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'MA'));
            $smk = $this->my_lib->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'SMK'));
            $sdmi = $sd + $mi;
            $smpmts = $smp + $mts;
            $smama = $sma + $ma;
            $jum = $this->my_lib->row_count('profil',array('kab'=>$id_kabu));
          ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><a href="<?=base_url()?>sekolah/perkecamatan/<?=$id_kabu?>"><?php echo $k->kabupaten ?></a></td>
              <td><?=$sdmi;?></td>
              <td><?=$smpmts?></td>
              <td><?=$smama?></td>
              <td><?=$smk?></td>
              <td><?=$jum?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
    </div>
    <!-- card material end -->
  </div>  
</div>
