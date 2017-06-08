<?php

  error_reporting( ~E_NOTICE );
  
  require_once '../../dbconfig.php';
  
  if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
  {
    $id = $_GET['edit_id'];
    $stmt_edit = $DB_con->prepare('SELECT * FROM profil WHERE npsn =:uid');
    $stmt_edit->execute(array(':uid'=>$id));
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
  }
  else
  {
    header("Location: sekolah.php");
  }
  
  if(isset($_POST['btn_save_updates']))
  {
    $npsn = $_POST['npsn'];
    $nama_sekolah = $_POST['nama_sekolah'];
    $alamat = $_POST['alamat'];
    
    // if no error occured, continue ....
    if(!isset($errMSG))
    {
      $stmt = $DB_con->prepare('UPDATE profil 
                       SET npsn=:npsn,
                       nama_sekolah=:nama_sekolah,
                       alamat=:alamat
                       WHERE npsn=:uid');
      $stmt->bindParam(':npsn',$npsn);
      $stmt->bindParam(':nama_sekolah',$nama_sekolah);
      $stmt->bindParam(':alamat',$alamat);
      $stmt->bindParam(':uid',$id);
        
      if($stmt->execute()){
        ?>
        <script>
        alert('Berhasil Di Edit');
        window.location.href='detail-sekolah?detail_id=<?php echo $npsn; ?>';
        </script>
                <?php 
      }
      else{
        $errMSG = "Gagal!";
      }
    
    }
    
            
  }
  
?>
  <?php include "../header.php"; ?>
  <!-- =============================================== -->

  <?php include "../sidebar.php"; ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Data Sekolah
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST">
          <div class="box-body">
            <div class="form-group">
              <label>NPSN</label>
                <input type="text" class="form-control" name="npsn" value="<?php echo $npsn; ?>">
            </div>
            <div class="form-group">
              <label>Nama Sekolah</label>
              <input type="text" class="form-control" name="nama_sekolah" value="<?php echo $nama_sekolah; ?>">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>">
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary" type="submit" name="btn_save_updates">Save</button>
          </div>
            </form>
          </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "../footer.php"; ?>