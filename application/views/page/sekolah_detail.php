<div style="background-color: #f9f9f9;; padding: 20px 0px">
  <!-- container start -->
  <div class="container">
  <br>
  <?php foreach ($detail as $d) {
      $kepsek = $this->my_lib->get_data('kepsek', array('npsn'=>$d->npsn));
      $wakasek = $this->my_lib->get_data('wakasek', array('npsn'=>$d->npsn));
      $kec = $this->my_lib->get_data('kecamatan', array('kode_kec'=>$d->kec));
      $kab = $this->my_lib->get_data('kabupaten', array('id'=>$d->kab));
      $tanah = $this->my_lib->get_data('aset_tanah', array('npsn'=>$d->npsn));
      if ($tanah) {
        # code...
        $luas_tanah = $tanah[0]->luas_tanah;
        $kepemilikan = $tanah[0]->kepemilikan;
        $status_tanah = $tanah[0]->status_tanah;
      }
      else{
        $luas_tanah = "-";
        $kepemilikan = "Tidak diketahui";
        $status_tanah = "Tidak diketahui";  
      }
      $sarpras = $this->my_lib->get_data('sarpras', array('npsn'=>$d->npsn));
      $jml_guru_p = $this->my_lib->row_count('data_guru', array('npsn'=>$d->npsn, 'jk'=>'P'));
      $jml_guru_l = $this->my_lib->row_count('data_guru', array('npsn'=>$d->npsn, 'jk'=>'L'));
      $jml_tkp_p = $this->my_lib->row_count('tenkependik', array('npsn'=>$d->npsn, 'jk'=>'Pe'));
      $jml_tkp_l = $this->my_lib->row_count('tenkependik', array('npsn'=>$d->npsn, 'jk'=>'La'));
      $jml_bangunan = $this->my_lib->row_count('aset_bangunan', array('npsn'=>$d->npsn));
      $luas_bangunan = $this->my_lib->get_sum_row('aset_bangunan', array('npsn'=>$d->npsn), 'luas_bangunan');
    } ?>
    
    <!-- breadcumb start -->
    <nav style="background-color: #26A69A; margin-bottom: 20px">
      <div class="container">
        <div class="nav-wrapper">
          <div class="col s12">
            <a href="#" class="breadcrumb"><i class="material-icons">home</i> Beranda</a>
            <a href="#" class="breadcrumb">Data Sekolah</a>
            <a href="#" class="breadcrumb"><?=$kab[0]->kabupaten?></a>
            <a href="#" class="breadcrumb"><?=$kec[0]->nama_kec?></a>
            <a class="breadcrumb"><?=$d->nama_sekolah?></a>
          </div>
        </div>
      </div>
    </nav>
    <!-- breadcumb end -->

    <!-- row start -->
    <div class="row">
        <div class="col s3">
          <div class="card-panel teal">
              <img src="http://dapo.dikdasmen.kemdikbud.go.id/assets/img/iconsekolah.png" class="responsive-img" style="margin-bottom: 20px"><br><br>
              <span class="white-text">NPSN      : <b><?=$d->npsn?></b></span>
              <br><br>
              <span class="white-text">Akreditasi: <b><?=$d->akreditasi?></b></span>
              <br><br>
              <span class="white-text">Kurikulum : <b><?=$d->kurikulum?></b></span>
              <br><br>
              <span class="white-text">Kepsek : <b><?=$kepsek[0]->kepala_sekolah?></b></span>
              <br><br>
              <span class="white-text">Wakasek : <b><?=$wakasek[0]->wakil_kepala?></b></span>
          </div>
        </div>
        
        <div class="col s9">
          <div class="card teal">
              <!-- tab start -->
              <div class="card-tabs">
                <ul class="tabs tabs-fixed-width tabs-transparent">
                  <li class="tab"><a class="active" href="#profil"><i class="material-icons">account_balance</i>Profil</a></li>
                  <li class="tab"><a href="#rekapitulasi"><i class="material-icons">dns</i>Rekapitulasi</a></li>
                  <li class="tab"><a href="#kontak"><i class="material-icons">mail_outline</i>Kontak</a></li>
                </ul>
              </div>
              <!-- tab end -->
              
              <!-- card content start -->
              <div class="card-content white lighten-5">
                <!-- tAB Profile Sekolah Start -->
                <div id="profil">
                  <div class="row">
                    <!-- identitas Sekolah Start -->
                    <div class="col s6">
                      <div class="card blue">
                        <div class="card-content white-text">
                          <p>Identitas Sekolah</p>
                        </div>
                          <div class="card-content white lighten-5">
                            <div><b>Akreditasi:</b> <?=$d->akreditasi?></div>
                            <div><b>NPSN:</b> <?=$d->npsn?></div>
                            <div><b>Nama Sekolah:</b> <?=$d->nama_sekolah?></div>
                            <div><b>Jenjang:</b> <?=$d->jenjang?></div>
                            <div><b>SK Pendirian Sekolah:</b> <?=$d->sk_pendirian?></div>
                            <div><b>Tanggal SK Pendirian:</b> <?=$d->tgl_pendirian?></div>
                            <div><b>SK Akreditasi:</b> <?=$d->sk_akreditasi?></div>
                          </div>
                      </div>
                    </div>
                    <!-- identitas sekolah end -->
                    <div class="col s6">
                      <!-- data pelengkap start -->
                      <div class="card blue">
                        <div class="card-content white-text">
                          <p>Data Pelengkap</p>
                        </div>
                          <div class="card-content white lighten-5">
                            <div><b>Jumlah Bangunan:</b> <?=$jml_bangunan?></div>
                            <div><b>Total Luas Bangunan:</b> <?=$luas_bangunan?> m<sup>2</sup></div>
                            <div><b>Luas Tanah:</b> <?= $luas_tanah?> m<sup>2</sup></div>
                            <div><b>Kepemilikan: </b><?=$kepemilikan?></div>
                            <div><b>Status:</b> <?=$status_tanah?></div>
                          </div>
                      </div>
                      <!--  data pelengkap end -->
                      <!-- data rinci start -->
                      <div class="card blue">
                        <div class="card-content white-text">
                          <p>Data Rinci</p>
                        </div>
                          <div class="card-content white lighten-5">
                            <div><b>Status BOS:</b> Bersedia Menerima</div>
                            <div><b>Sumber Listrik:</b> PLN</div>
                            <div><b>Daya Listrik:</b> <?=$d->listrik?></div>
                            <div><b>Kecepatan Internet:</b> <?=$d->akses_internet?></div>
                          </div>
                      </div>
                      <!-- data rinci end -->
                    </div>
                  </div>
                </div>
                <!-- tAB Profile Sekolah End -->
                
                <!-- Tab Rekapitulasi Start -->
                <div id="rekapitulasi">
                  <!-- Data PTK Start -->
                  <div class="card blue">
                    <div class="card-content white-text">
                      <p>Data Pengajar</p>
                    </div>
                      <div class="card-content white lighten-5">
                        <div class="table-responsive">
                          <table class="highlight"">
                            <thead>
                              <tr>
                                <th class="text-left col-md-8">Uraian</th>
                                <th class="text-right col-md-1">Guru</th>
                                <th class="text-right col-md-1">Tendik</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Laki-laki</td>
                                <td class="text-right"><?= $jml_guru_l ?></td>
                                <td class="text-right"><?= $jml_tkp_l ?></td>
                              </tr>
                              <tr>
                                <td>Perempuan</td>
                                <td class="text-right"><?= $jml_guru_p ?></td>
                                <td class="text-right"><?= $jml_tkp_p ?></td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr style="border-bottom: 1px solid #DDDDDD;">
                                <th>Total</th>
                                <th class="text-right"><?= $jml_guru_p+$jml_guru_l ?></th>
                                <th class="text-right"><?= $jml_tkp_l+$jml_tkp_p ?></th>
                              </tr>
                            </tfoot>
                          </table>
                          <br>
                        </div>
                      </div>
                  </div>
                  <!-- Data PTK End -->

                  <!-- Data sarpras start -->
                  <div class="card blue">
                    <div class="card-content white-text">
                      <p>Data Sarpras</p>
                    </div>
                    <div class="card-content white lighten-5">
                      <div class="table-responsive">
                        <table class="highlight">
                          <thead>
                            <tr>
                              <th class="text-left">Nama</th>
                              <th class="text-right">Jumlah</th>
                              <th class="text-right">Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr style="border-bottom: 1px solid #DDDDDD;">
                               <td><?= $sarpras[0]->nama_prasarana ?></td>
                               <td class="text-right"><?= $sarpras[0]->jumlah ?></td>
                               <td class="text-right"><?= $sarpras[0]->status_kepemilikan ?></td>
                            </tr>
                          </tbody>
                        </table>
                        <br>                      
                      </div>
                    </div>
                  </div>
                  <!-- Data sarpras end -->
                  
                  <!-- data rombel start -->
                  <div class="card blue">
                    <div class="card-content white-text">
                      <p>Data Prestasi</p>
                    </div>
                    <div class="card-content white lighten-5">
                      <div class="table-responsive">
                        <table class="highlight">
                          <thead>
                            <tr>
                              <th class="text-left">Prestasi</th>
                              <th class="text-center">Level</th>
                              <th class="text-center">Hasil</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php 
                                $prestasi = $this->my_lib->get_data('prestasi', array('npsn'=>$d->npsn));
                                if ($prestasi) {
                                  # code...
                                  foreach ($prestasi as $key) {
                                    # code...
                                    ?>
                                    <tr>
                                      <td><?= $key->jns_prestasi ?></td>
                                      <td class="text-center"><?= $key->level ?></td>
                                      <td class="text-center"><?= $key->hasil ?></td>  
                                    </tr>
                                    <?php
                                  }
                                }
                                else{
                                  ?>
                                    <tr><td colspan="3">Tidak Ada Prestasi</td></tr>
                                  <?php  
                                } ?>
                          </tbody>
                        </table>
                        <br>
                      </div>
                    </div>
                  </div>
                  <!-- data rombel end -->
                </div>
                <!-- Tab rekapitulasi start -->

                <!-- Tab kontak start -->
                <div id="kontak">
                  <div class="row">

                    <!-- data kontak utama start -->
                    <div class="col s6">
                      <div class="card blue">
                        <div class="card-content white-text">
                          <p>Kontak Utama</p>
                        </div>
                        <div class="card-content white lighten-5">
                          <div><b>Alamat:</b> <?=$d->alamat?></div>
                          <div><b>Desa/Kelurahan:</b> <?=$d->kel?></div>
                          <div><b>Kecamatan:</b> <?= $kec[0]->nama_kec ?></div>
                          <div><b>Kabupaten:</b> <?=$kab[0]->kabupaten?></div>
                          <div><b>Provinsi:</b> Daerah Istimewa Yogyakarta</div>
                          <div><b>Lintang:</b> <?=$d->koordinat_long?></div>
                          <div><b>Bujur:</b> <?=$d->koordinat_lat?></div>
                        </div>
                      </div>
                    </div>
                    <!-- data kontak utama end -->

                    <!-- data kontak yg dpt dihubungi start -->
                    <div class="col s6">
                      <div class="card blue">
                        <div class="card-content white-text">
                        <p>Kontak yang Bisa Dihubungi</p>
                        </div>
                        <div class="card-content white lighten-5">
                          <div><b>Telepon:</b> <?=$d->telepon?></div>
                          <div><b>Email:</b> <?=$d->email?></div>
                          <div><b>Web:</b> <?=$d->web?></div>
                        </div>
                      </div>
                    </div>
                    <!-- data kontak yg dpt dihubungi end -->

                    <!-- peta lokasi -->
                    <div class="col s12">
                      <div class="card blue">
                        <div class="card-content white-text">
                          <p>Peta Lokasi</p>
                        </div>
                        <div class="card-content white lighten-5">
                          <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBg00Vj8Jn0_YKohFS822CmTnpYUJXhuQY&q=<?=$d->koordinat_lat?>,<?=$d->koordinat_long?>"></iframe>
                        </div>
                      </div>
                    </div>
                    <!-- peta lokasi end -->
                  </div>
                </div>
                <!-- tab kontak end -->
                <!-- bagikan start -->
                <p><strong>Bagikan Sekolah ini</strong></p>
                <div class="shareini" data-ayoshare="#"></div><br>
                <!-- bagikan end -->
              </div>
              <!-- card content end -->
            </div>
         </div>
    </div>
    <!-- row end -->
  </div>
  <!-- container end -->    
</div>
