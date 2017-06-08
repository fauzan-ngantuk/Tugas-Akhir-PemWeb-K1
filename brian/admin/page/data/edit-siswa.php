<?php

  error_reporting( ~E_NOTICE );
  
  require_once '../../dbconfig.php';
  
  if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
  {
    $id = $_GET['edit_id'];
    $stmt_edit = $DB_con->prepare('SELECT * FROM siswa WHERE npsn =:uid');
    $stmt_edit->execute(array(':uid'=>$id));
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
  }
  else
  {
    header("Location: siswa.php");
  }
  
  if(isset($_POST['btn_save_updates']))
  {
    $npsn = $_POST['npsn'];
    $tahun_ajaran = $_POST['tahun_ajaran'];
    $rombel = $_POST['rombel'];
    
    // if no error occured, continue ....
    if(!isset($errMSG))
    {
      $stmt = $DB_con->prepare('UPDATE siswa 
                       SET npsn=:npsn,
                       tahun_ajaran=:tahun_ajaran,
                       rombel=:rombel
                       WHERE npsn=:uid');
      $stmt->bindParam(':npsn',$npsn);
      $stmt->bindParam(':tahun_ajaran',$tahun_ajaran);
      $stmt->bindParam(':rombel',$rombel);
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
        Edit Data Siswa
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
              <label>Tahun Ajaran</label>
              <input type="text" class="form-control" name="tahun_ajaran" value="<?php echo $tahun_ajaran; ?>">
            </div>
            <div class="form-group">
              <label>Rombel</label>
              <input type="text" class="form-control" name="rombel" value="<?php echo $rombel; ?>">
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