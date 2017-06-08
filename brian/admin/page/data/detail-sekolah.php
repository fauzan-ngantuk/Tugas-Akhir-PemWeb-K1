<?php

  error_reporting( ~E_NOTICE );
  
  require_once '../../dbconfig.php';
  
  if(isset($_GET['detail_id']) && !empty($_GET['detail_id']))
    {
        $id = $_GET['detail_id'];
        $stmt_edit = $DB_con->prepare('SELECT * FROM profil WHERE npsn =:uid');
        $stmt_edit->execute(array(':uid'=>$id));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
    }
    else
    {
        header("Location: sekolah");
    }    

  if(isset($_GET['delete_id']))
  {    
    // it will delete an actual record from db
    $stmt_delete = $DB_con->prepare('DELETE FROM profil WHERE npsn =:uid');
    $stmt_delete->bindParam(':uid',$_GET['delete_id']);
    $stmt_delete->execute();
    
    header("Location: sekolah");
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
        Detail Sekolah
        <small>it all starts here</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Detail Sekolah</h3>
        </div>
        <!-- /.box-header -->
        <table id="example1" class="table table-bordered table-striped">
          <tr>
           <td><b>NPSN</b></td>
           <td><?php echo $npsn; ?></td>
          </tr>
          <tr>
            <td><b>Nama Sekolah</b></td>
            <td><?php echo $nama_sekolah; ?></td>
          </tr>
          <tr>
            <td><b>Alamat Sekolah</b></td>
            <td><?php echo $alamat; ?></td>
          </tr>
        </table>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "../footer.php"; ?>