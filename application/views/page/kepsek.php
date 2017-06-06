<div class="container">
  <br>
  <nav>
    <div class="container">
      <div class="nav-wrapper">
        <div class="col s12">
          <a href="#" class="breadcrumb"><i class="material-icons">home</i> Beranda</a>
          <a class="breadcrumb">Data Kepala Sekolah</a>
        </div>
      </div>
    </div>
  </nav>
  <br>

  <div class="row">
    <div id="admin" class="col s12">
      <div class="card material-table">
        <div class="table-header">
          <span class="table-title">Kepala Sekolah</span>
          <div class="actions">
            <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
          </div>
        </div>
          <table id="datatable"> 
            <thead>
              <tr>
              	<th><b>No</b></th>
                <th><b>Kabupaten</b></th>
                <th><b>1 Periode</b></th>
                <th><b>2 Periode</b></th>
                <th><b>3 Periode</b></th>
                <th><b>> 3 Periode</b></th>
                <th><b>Jumlah</b></th>
              </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            foreach ($kab as $k) {
              $id_kabu = $k->id;
              $sd = $this->my_lib->jum_kepsek(array('kab'=>$id_kabu,'jenjang'=>'SD'));
              $mi = $this->my_lib->jum_kepsek(array('kab'=>$id_kabu,'jenjang'=>'MI'));
              $smp = $this->my_lib->jum_kepsek(array('kab'=>$id_kabu,'jenjang'=>'SMP'));
              $mts = $this->my_lib->jum_kepsek(array('kab'=>$id_kabu,'jenjang'=>'MTS'));
              $sma = $this->my_lib->jum_kepsek(array('kab'=>$id_kabu,'jenjang'=>'SMA'));
              $ma = $this->my_lib->jum_kepsek(array('kab'=>$id_kabu,'jenjang'=>'MA'));
              $smk = $this->my_lib->jum_kepsek(array('kab'=>$id_kabu,'jenjang'=>'SMK'));
              $sdmi = $sd + $mi;
              $smpmts = $smp + $mts;
              $smama = $sma + $ma;
              $jum = $this->my_lib->jum_kepsek(array('kab'=>$id_kabu));
            ?>
              <tr>
              	<td><?php echo $no++; ?></td>
                <td><a href="<?=base_url()?>kepsek/perkecamatan/<?=$id_kabu?>"><?php echo $k->kabupaten ?></a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?=$jum?></td>
              </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

