<div class="container">
 <br>
  <!-- breadcumb start -->
  <nav>
    <div class="container">
      <div class="nav-wrapper">
        <div class="col s12">
          <a href="#" class="breadcrumb"><i class="material-icons">home</i> Beranda</a>
          <a href="#" class="breadcrumb">Data Sekolah</a>
          <a class="breadcrumb">Nama Kabupaten</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- breadcumb end -->

  <div class="row">
    <div id="admin" class="col s12">
      <div class="card material-table">
        <div class="table-header">
          <span class="table-title">Data Sekolah</span>
          <div class="actions">
            <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
          </div>
        </div>
          <table id="datatable">
            <thead>
              <tr>
                <th><b>No</b></th>
                <th><b>Kecamatan</b></th>
                <th><b>SD/MI</b></th>
                <th><b>SMP/MTS</b></th>
                <th><b>SMA/MTS</b></th>
                <th><b>SMK</b></th>
                <th><b>Jumlah</b></th>
              </tr>
            </thead>
            <tbody>
            <?php $no = 1;
             foreach ($keca as $k) {
              $id_kec = $k->kode_kec;
              $sd = $this->my_lib->row_count('profil',array('kec'=>$id_kec,'jenjang'=>'SD'));
              $mi = $this->my_lib->row_count('profil',array('kec'=>$id_kec,'jenjang'=>'MI'));
              $smp = $this->my_lib->row_count('profil',array('kec'=>$id_kec,'jenjang'=>'SMP'));
              $mts = $this->my_lib->row_count('profil',array('kec'=>$id_kec,'jenjang'=>'MTS'));
              $sma = $this->my_lib->row_count('profil',array('kec'=>$id_kec,'jenjang'=>'SMA'));
              $ma = $this->my_lib->row_count('profil',array('kec'=>$id_kec,'jenjang'=>'MA'));
              $smk = $this->my_lib->row_count('profil',array('kec'=>$id_kec,'jenjang'=>'SMK'));
              $sdmi = $sd + $mi;
              $smpmts = $smp + $mts;
              $smama = $sma + $ma;
              $jum = $this->my_lib->row_count('profil',array('kec'=>$id_kec));
            ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><a href="<?=base_url()?>sekolah/listsekolah/<?=$id_kec?>"><?php echo $k->nama_kec ?></a></td>
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
    </div>
  </div>
</div>  


