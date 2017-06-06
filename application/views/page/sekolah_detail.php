<!-- container start -->
<div class="container">
<br>
<?php foreach ($detail as $d) {
 	} ?>
  <!-- breadcumb start -->
  <nav>
    <div class="container">
      <div class="nav-wrapper">
        <div class="col s12">
          <a href="#" class="breadcrumb"><i class="material-icons">home</i> Beranda</a>
          <a href="#" class="breadcrumb">Data Sekolah</a>
          <a href="#" class="breadcrumb">Nama Kabupaten</a>
          <a href="#" class="breadcrumb">Nama Kecamatan</a>
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
            <img src="http://dapo.dikdasmen.kemdikbud.go.id/assets/img/iconsekolah.png" class="responsive-img"><br>
            <center><a class="waves-effect waves-light btn">Data Sekolah Kita</a><br><br>
            <a class="waves-effect waves-light btn">Data Rapor</a><br></center><br><br><br>
            <span class="white-text">Kepsek: <b>-</b></span><br><br>
            <span class="white-text">Operator: <b>-</b></span><br><br>
            <span class="white-text">Akreditasi: <b><?=$d->akreditasi?></b></span><br><br>
            <span class="white-text">Kurikulum: <b><?=$d->kurikulum?></b></span>
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
                          <div><b>Status:</b> Tidak Diketahui</div>
                          <div><b>Bentuk Pendidikan:</b> Tidak Diketahui</div>
                          <div><b>Status Kepemilikan:</b> Tidak Diketahui</div>
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
                          <div><b>Kebutuhan Khusus Dilayani:</b> Tidak Ada</div>
                          <div><b>Nama Bank:</b> Tidak Ada</div>
                          <div><b>Cabang KCP/Unit:</b> Tidak ada</div>
                          <div><b>Rekening Atas Nama :</b> Tidak ada</div>
                          <div><b>Luas Tanah Milik:</b> Tidak Diketahui</div>
                          <div><b>Luas Tanah Bukan Milik:</b> Tidak Diketahui</div>
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
                          <div><b>Waktu Penyelenggaraan:</b> Pagi</div>
                          <div><b>Sertifikasi ISO:</b> Belum</div>
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
                    <p>Data PTK dan PD</p>
                  </div>
                    <div class="card-content white lighten-5">
                      <div class="table-responsive">
                        <table class="highlight"">
                          <thead>
                            <tr>
                              <th class="text-left col-md-8">Uraian</th>
                              <th class="text-right col-md-1">Guru</th>
                              <th class="text-right col-md-1">Tendik</th>
                              <th class="text-right col-md-1">PTK</th>
                              <th class="text-right col-md-1">PD</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Laki-laki</td>
                              <td class="text-right"><a href="http://data.dikdasmen.kemdikbud.go.id/usr/in/ops" class="ptk_laki"></a></td>
                              <td class="text-right"><a href="http://data.dikdasmen.kemdikbud.go.id/usr/in/ops" class="pegawai_laki"></a></td>
                              <td class="text-right"><a href="http://data.dikdasmen.kemdikbud.go.id/usr/in/ops" class="ptk-laki"></a></td>
                              <td class="text-right"><a href="http://data.dikdasmen.kemdikbud.go.id/usr/in/ops" class="pd_laki"></a></td>
                            </tr>
                            <tr>
                              <td>Perempuan</td>
                              <td class="text-right"><a href="http://data.dikdasmen.kemdikbud.go.id/usr/in/ops" class="ptk_perempuan"></a></td>
                              <td class="text-right"><a href="http://data.dikdasmen.kemdikbud.go.id/usr/in/ops" class="pegawai_perempuan"></a></td>
                              <td class="text-right"><a href="http://data.dikdasmen.kemdikbud.go.id/usr/in/ops" class="ptk-perempuan"></a></td>
                              <td class="text-right"><a href="http://data.dikdasmen.kemdikbud.go.id/usr/in/ops" class="pd_perempuan"></a></td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr style="border-bottom: 1px solid #DDDDDD;">
                              <th>Total</th>
                              <th class="text-right"><a href="http://data.dikdasmen.kemdikbud.go.id/usr/in/ops" class="ptk"></a></th>
                              <th class="text-right"><a href="http://data.dikdasmen.kemdikbud.go.id/usr/in/ops" class="pegawai"></a></th>
                              <th class="text-right"><a href="http://data.dikdasmen.kemdikbud.go.id/usr/in/ops" class="ptk-total"></a></th>
                              <th class="text-right"><a href="http://data.dikdasmen.kemdikbud.go.id/usr/in/ops" class="pd"></a></th>
                            </tr>
                          </tfoot>
                        </table>
                        <br>
                        <p>Keterangan :
                          <ul>
                            <li>Data Rekap Per Tanggal</li>
                            <li>Penghitungan PTK adalah yang sudah mendapat penugasan, berstatus aktif dan terdaftar di sekolah induk.</li>
                            <li>Singkatan :
                              <ol>
                                <li>PTK = Guru ditambah Tendik</li>
                                <li>PD = Peserta Didik</li>
                              </ol>
                            </li>
                          </ul>
                        </p>
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
                            <th class="text-left">Uraian</th>
                            <th class="text-right">Ruang Kelas</th>
                            <th class="text-right">Ruang Lab</th>
                            <th class="text-right">Ruang Perpus</th>
                            <th class="text-right">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr style="border-bottom: 1px solid #DDDDDD;">
                             <td>Jumlah</td>
                             <td class="text-right"><a href="http://data.dikdasmen.kemdikbud.go.id/usr/in/ops" class="jml_rk"></a></td>
                             <td class="text-right"><a href="http://data.dikdasmen.kemdikbud.go.id/usr/in/ops" class="jml_lab"></a></td>
                             <td class="text-right"><a href="http://data.dikdasmen.kemdikbud.go.id/usr/in/ops" class="jml_perpus"></a></td>
                             <td class="text-right"><a href="http://data.dikdasmen.kemdikbud.go.id/usr/in/ops" class="sarpras-total"></a></td>
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
                    <p>Data Rombel</p>
                  </div>
                  <div class="card-content white lighten-5">
                    <div class="table-responsive">
                      <table class="highlight">
                        <thead>
                          <tr>
                            <th class="text-left">Uraian</th>
                            <th class="text-right">Ruang Kelas</th>
                            <th class="text-right">Ruang Lab</th>
                            <th class="text-right">Ruang Perpus</th>
                            <th class="text-right">Total</th>
                          </tr>
                        </thead>
                        <tbody>
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
                        <div><b>RT/RW:</b> 0/0</div>
                        <div><b>Dusun:</b> -</div>
                        <div><b>Desa/Kelurahan:</b> <?=$d->kel?></div>
                        <div><b>Kecamatan:</b> <?=$d->kec?></div>
                        <div><b>Kabupaten:</b> <?=$d->kab?></div>
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