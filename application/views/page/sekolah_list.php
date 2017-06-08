<div style="background-color: #f9f9f9; ; padding: 20px 0px">
  <div class="container">
    <br>
    <nav style="background-color: #26A69A">
      <div class="container">
        <div class="nav-wrapper">
          <div class="col s12">
            <a href="#" class="breadcrumb"><i class="material-icons">home</i> Beranda</a>
            <a href="#" class="breadcrumb">Data Sekolah</a>
            <a href="#" class="breadcrumb">Nama Kabupaten</a>
            <a class="breadcrumb">Nama Kecamatan</a>
          </div>
        </div>
      </div>
    </nav>
    <br>

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
                  <th><b>Jenjang</b></th>
                  <th><b>Nama Sekolah</b></th>
                  <th><b>NPSN</b></th>
                </tr>
              </thead>
              <tbody>
              <?php
               $no = 1;
               foreach ($prof as $p) {
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?=$p->jenjang?></td>
                  <td><a href="<?=base_url()?>sekolah/detail/<?=$p->npsn?>"><?=$p->nama_sekolah?></a></td>
                  <td><?=$p->npsn?></td>
                </tr>
              <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
  
</div>

