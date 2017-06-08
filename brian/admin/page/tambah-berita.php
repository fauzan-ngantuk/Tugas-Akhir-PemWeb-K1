  <?php include "../dbconfig.php";
  if(isset($_POST['btnsave']))
  {
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];

    $imgFile = $_FILES['user_image']['name'];
    $tmp_dir = $_FILES['user_image']['tmp_name'];
    $imgSize = $_FILES['user_image']['size'];
    
    
    if(empty($judul)){
      $errMSG = "Judul Harus Diisi";
    }
    else if(empty($konten)){
      $errMSG = "konen Harus Diisi";
    }
    else
    {
      $upload_dir = 'cover-image/'; // upload directory
  
      $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
    
      // valid image extensions
      $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
    
      // rename uploading image
      $userpic = rand(1000,1000000).".".$imgExt;
        
      // allow valid image file formats
      if(in_array($imgExt, $valid_extensions)){     
        // Check file size '5MB'
        if($imgSize < 5000000)        {
          move_uploaded_file($tmp_dir,$upload_dir.$userpic);
        }
        else{
          $errMSG = "Maaf, ukuran picture maksimal 5MB.";
        }
      }
      else{
        $errMSG = "File yang diperbolehkan, JPG, dan PNG.";   
      }
    }
    
    
    // if no error occured, continue ....
    if(!isset($errMSG))
    {
      $stmt = $DB_con->prepare('INSERT INTO berita(judul,konten,userPic) VALUES(:judul, :konten, :upic)');
      $stmt->bindParam(':judul',$judul);
      $stmt->bindParam(':konten',$konten);
      $stmt->bindParam(':upic',$userpic);
      
      if($stmt->execute())
      {
        $successMSG = "Berita telah dipublish, Lihat <a href='berita'>Selengkapnya</a>.";
      }
      else
      {
        $errMSG = "Gagal menyimpan data.";
      }
    }
  }
  ?>
  <?php include "header.php"; ?>
  <!-- =============================================== -->

  <?php include "sidebar.php"; ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?php
  if(isset($errMSG)){
  ?>
    <div class="alert alert-danger">
      <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
    </div>
  <?php
  }
  else if(isset($successMSG)){
  ?>
    <div class="alert alert-success">
      <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
    </div>
  <?php
  }
  ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Berita
        <small>Tambah Berita</small>
      </h1>
      <!-- ============================================== -->
    </section>

     <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Tulis Berita
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form method="post" enctype="multipart/form-data">
                <tr>
                  <td><label class="control-label">Cover Image</label></td>
                  <td><input class="input-group" type="file" name="user_image" accept="image/*" />
                  Nb: (Ekstensi: JPG, PNG ; Maks: 5MB)
                  </td>
                </tr><br>
                <tr>
                  <td><label class="control-label">Judul</label></td>
                  <td><input class="form-control" type="text" name="judul" placeholder="Judul Berita" /></td>
                </tr>
                <tr>
                  <td><label class="control-label">Konten</label></td>
                  <td><textarea id="editor1" name="konten" rows="10" cols="80"></textarea></td>
                </tr><br>
                <button type="submit" name="btnsave" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> &nbsp; SIMPAN</button>
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->

    
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.php"; ?>