<div style="background-color: #f9f9f9; ; padding: 20px 0px">
  <div class="container">
    <br>
    <br>
    <div class="row">
      <div id="admin" class="col s12">
        <div class="card material-table">
          <div class="table-header">
            <span class="table-title">Data Sekolah</span>
            <div class="actions">
              <div class="input-field inline">
                <form method="POST">
                  <input name="npsn" type="text">
                  <label for="npsn">Masukan NPSN</label>  
                  <button class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></button>
                </form>
              </div>
            </div>
          </div>
            <table id="datatable"> 
              <thead>
                <tr>
                  <th><b>Jenjang</b></th>
                  <th><b>Nama Sekolah</b></th>
                  <th><b>NPSN</b></th>
                </tr>
              </thead>
              <tbody>
              <?php
                
                foreach ($sekolah as $s) { 
                  // print_r($sekolah);?>
                  
                  <tr>
                    <td><?php echo $s->jenjang; ?></td>
                    <td><?php echo $s->nama_sekolah; ?></td>
                    <td><a href="<?=base_url()?>sekolah/detail/<?php echo "$s->npsn";?>"><?php echo $s->npsn; ?></a></td>
                  </tr>
                <?php
                }
              ?>
                
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
</div>

