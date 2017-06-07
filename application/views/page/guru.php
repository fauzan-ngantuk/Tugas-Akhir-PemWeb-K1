<div class="container">
  <br>
  <nav>
    <div class="container">
      <div class="nav-wrapper">
        <div class="col s12">
          <a href="#" class="breadcrumb"><i class="material-icons">home</i> Beranda</a>
          <a class="breadcrumb">Data Guru</a>
        </div>
      </div>
    </div>
  </nav>
  <br>

  <div class="row">
    <div id="admin" class="col s12">
      <div class="card material-table">
        <div class="table-header">
          <span class="table-title">Guru</span>
          <div class="actions">
            <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
          </div>
        </div>
          <table id="datatable"> 
            <thead>
              <tr>
            <th><b>Kabupaten</b></th>
            <th><b>SD/MI</b></th>
            <th><b>SMP/MTS</b></th>
            <th><b>SMA/MA</b></th>
            <th><b>SMK</b></th>
            <th><b>Jumlah</b></th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($kab as $k) {
          $id_kabu = $k->id;
          $sd = $this->my_lib->row_count('data_guru',array('kab'=>$id_kabu,'jenjang'=>'SD'));
          $mi = $this->my_lib->row_count('data_guru',array('kab'=>$id_kabu,'jenjang'=>'MI'));
          $smp = $this->my_lib->row_count('data_guru',array('kab'=>$id_kabu,'jenjang'=>'SMP'));
          $mts = $this->my_lib->row_count('data_guru',array('kab'=>$id_kabu,'jenjang'=>'MTS'));
          $sma = $this->my_lib->row_count('data_guru',array('kab'=>$id_kabu,'jenjang'=>'SMA'));
          $ma = $this->my_lib->row_count('data_guru',array('kab'=>$id_kabu,'jenjang'=>'MA'));
          $smk = $this->my_lib->row_count('data_guru',array('kab'=>$id_kabu,'jenjang'=>'SMK'));
          $sdmi = $sd + $mi;
          $smpmts = $smp + $mts;
          $smama = $sma + $ma;
          $jum = $this->my_lib->row_count('data_guru',array('kab'=>$id_kabu));
        ?>
          <tr>
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
  </div>
</div>
</div>

