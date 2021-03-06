  <?php
  include "../../dbconfig.php"; 
  if(isset($_GET['delete_id']))
  {    
    // it will delete an actual record from db
    $stmt_delete = $DB_con->prepare('DELETE FROM user WHERE id =:uid');
    $stmt_delete->bindParam(':uid',$_GET['delete_id']);
    $stmt_delete->execute();
    
    header("Location: user");
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
        Data user
        <small>Data user</small>
      </h1>
      <!-- ============================================== -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data user</h3><br>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Nama</th>
                  <th>Level</th>
                  <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                 <?php
                    $no = 1;
                    $stmt = $DB_con->prepare('SELECT * FROM user');
                    $stmt->execute();
                    if($stmt->rowCount() > 0)
                    {
                      while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                    {
                      extract($row);
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $username; ?></td>
                  <td><?php echo $email; ?></td>
                  <td><?php echo $Nama; ?></td>
                  <td><?php echo $level; ?></td>
                  <td>
                    <a class="btn btn-info" href="edit-user?edit_id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-edit"></span></a>

                      <a class="btn btn-danger" href="?delete_id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-remove-circle"></span></a>
                      
                      <a class="btn btn-info" href="detail-sekolah?detail_id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
                  </td>
                </tr>
                <?php
                }
                }
            else
    {
        ?>
          <td colspan="9">No Data Found ...</td>
            
        <?php
    }
  ?>
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "../footer.php"; ?>