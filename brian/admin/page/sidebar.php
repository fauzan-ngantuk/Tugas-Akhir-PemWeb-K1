
<!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="http://localhost/sekolah/admin/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MASTER</li>
        <li class="treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="http://localhost/sekolah/admin/page/master/bangunan"><i class="fa fa-circle-o"></i> Aset Bangunan</a></li>
            <li><a href="http://localhost/sekolah/admin/page/master/tanah"><i class="fa fa-circle-o"></i> Aset Tanah</a></li>
            <li><a href="http://localhost/sekolah/admin/page/master/jurusan"><i class="fa fa-circle-o"></i> Jurusan</a></li>
            <li><a href="http://localhost/sekolah/admin/page/master/kab"><i class="fa fa-circle-o"></i> Data Kabupaten</a></li>
            <li><a href="http://localhost/sekolah/admin/page/master/kec"><i class="fa fa-circle-o"></i> Data Kecamatan</a></li>
          </ul>
        </li>

        <!-- ========================================================================== -->

        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="http://localhost/sekolah/admin/page/pencarin">
            <i class="fa fa-search"></i> <span>Pencarian</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="http://localhost/sekolah/admin/page/data/user">
            <i class="fa fa-user"></i> <span>User</span>
          </a>
        </li>

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="http://localhost/sekolah/admin/page/data/sekolah"><i class="fa fa-circle-o"></i> Data Sekolah
              <span class="pull-right-container">
                <small class="label pull-right bg-blue">
                <?php
                $sekolah=$DB_con->prepare("SELECT COUNT(*) FROM profil");
                $sekolah->execute();
                $datasekolah=$sekolah->fetch(PDO::FETCH_NUM);
                echo "".$datasekolah[0]."";
                ?>
                </small>
              </span>
            </a></li>
            <li><a href="http://localhost/sekolah/admin/page/data/siswa"><i class="fa fa-circle-o"></i> Data Siswa
              <span class="pull-right-container">
                <small class="label pull-right bg-blue">
                <?php
                $siswa=$DB_con->prepare("SELECT COUNT(*) FROM siswa");
                $siswa->execute();
                $datasiswa=$siswa->fetch(PDO::FETCH_NUM);
                echo "".$datasiswa[0]."";
                ?>
                </small>
              </span>
            </a>
            </li>
            <li><a href="http://localhost/sekolah/admin/page/data/guru"><i class="fa fa-circle-o"></i> Data Guru
              <span class="pull-right-container">
                <small class="label pull-right bg-blue">
                <?php
                $guru=$DB_con->prepare("SELECT COUNT(*) FROM data_guru");
                $guru->execute();
                $dataguru=$guru->fetch(PDO::FETCH_NUM);
                echo "".$dataguru[0]."";
                ?>
                </small>
              </span>
            </a>
            </li>
            <li><a href="http://localhost/sekolah/admin/page/data/kepsek"><i class="fa fa-circle-o"></i> Data Kepala Sekolah
              <span class="pull-right-container">
                <small class="label pull-right bg-blue">
                <?php
                $kepsek=$DB_con->prepare("SELECT COUNT(*) FROM kepsek");
                $kepsek->execute();
                $datakepsek=$kepsek->fetch(PDO::FETCH_NUM);
                echo "".$datakepsek[0]."";
                ?>
                </small>
              </span>
            </a>
            </li>
            <li><a href="http://localhost/sekolah/admin/page/data/sarpras"><i class="fa fa-circle-o"></i> Data Sarpras
              <span class="pull-right-container">
                <small class="label pull-right bg-blue">
                <?php
                $sarpras=$DB_con->prepare("SELECT COUNT(*) FROM sarpras");
                $sarpras->execute();
                $datasarpras=$sarpras->fetch(PDO::FETCH_NUM);
                echo "".$datasarpras[0]."";
                ?>
                </small>
              </span>
            </a></li>
            <li><a href="http://localhost/sekolah/admin/page/data/prestasi"><i class="fa fa-circle-o"></i> Data Prestasi
              <span class="pull-right-container">
                <small class="label pull-right bg-blue">
                <?php
                $prestasi=$DB_con->prepare("SELECT COUNT(*) FROM prestasi");
                $prestasi->execute();
                $dataprestasi=$prestasi->fetch(PDO::FETCH_NUM);
                echo "".$dataprestasi[0]."";
                ?>
                </small>
              </span>
            </a></li>
            <li><a href="http://localhost/sekolah/admin/page/data/pendidik"><i class="fa fa-circle-o"></i> Data Tenaga Pendidik
              <span class="pull-right-container">
                <small class="label pull-right bg-blue">
                <?php
                $tenkependik=$DB_con->prepare("SELECT COUNT(*) FROM tenkependik");
                $tenkependik->execute();
                $datatenkependik=$tenkependik->fetch(PDO::FETCH_NUM);
                echo "".$datatenkependik[0]."";
                ?>
                </small>
              </span>
            </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="http://localhost/sekolah/admin/page/berita">
            <i class="fa fa-newspaper-o"></i> <span>Berita</span>
          </a>
        </li>

        <li class="treeview">
          <a href="http://localhost/sekolah/admin/page/about.php">
            <i class="fa fa-info-circle"></i> <span>About</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

