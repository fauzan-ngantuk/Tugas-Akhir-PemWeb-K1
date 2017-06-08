<?php

  error_reporting( ~E_NOTICE );
  
  require_once '../dbconfig.php';
  
  if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
  {
    $id = $_GET['edit_id'];
    $stmt_edit = $DB_con->prepare('SELECT * FROM berita WHERE id =:uid');
    $stmt_edit->execute(array(':uid'=>$id));
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
  }
  else
  {
    header("Location: berita");
  }
  
  if(isset($_POST['btn_save_updates']))
  {
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];

    $imgFile = $_FILES['user_image']['name'];
    $tmp_dir = $_FILES['user_image']['tmp_name'];
    $imgSize = $_FILES['user_image']['size'];
          
    if($imgFile)
    {
      $upload_dir = 'cover-image/'; // upload directory 
      $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
      $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
      $userpic = rand(1000,1000000).".".$imgExt;
      if(in_array($imgExt, $valid_extensions))
      {     
        if($imgSize < 5000000)
        {
          unlink($upload_dir.$edit_row['userPic']);
          move_uploaded_file($tmp_dir,$upload_dir.$userpic);
        }
        else
        {
          $errMSG = "Ukuran maksimal 5 MB";
        }
      }
      else
      {
        $errMSG = "Ekstensi Gambar JPG, PNG, GIF";    
      } 
    }
    else
    {
      // if no image selected the old image remain as it is.
      $userpic = $edit_row['userPic']; // old image from database
    } 
    
    // if no error occured, continue ....
    if(!isset($errMSG))
    {
      $stmt = $DB_con->prepare('UPDATE berita 
                       SET judul=:judul,
                       konten=:konten,
                       userPic=:upic
                       WHERE id=:uid');
      $stmt->bindParam(':judul',$judul);
      $stmt->bindParam(':konten',$konten);
      $stmt->bindParam(':upic',$userpic);
      $stmt->bindParam(':uid',$id);
        
      if($stmt->execute()){
        ?>
        <script>
        alert('Berhasil Di Edit');
        window.location.href='berita';
        </script>
                <?php 
      }
      else{
        $errMSG = "Gagal!";
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Berita
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Berita</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label>Cover Image</label>
                <img src="cover-image/<?php echo $userPic; ?>" height="200" width="150" />
                <input class="form-control" type="file" name="user_image" accept="image/*">
            </div>
            <div class="form-group">
              <label>Judul</label>
                <input type="text" class="form-control" name="judul" value="<?php echo $judul; ?>">
            </div>
            <div class="form-group">
              <label>Konten</label>
              <textarea id="editor1" name="konten" rows="10" cols="80"><?php echo $konten; ?></textarea>
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

  <?php include "footer.php"; ?>