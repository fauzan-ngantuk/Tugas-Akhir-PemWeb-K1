<?php
include_once("../../dbconfig.php");
?>
<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Sekolah.xls");
?>
<br>
<br>
<table>
<thead>
                <tr>
                  <th>NO</th>
                  <th>NPSN</th>
                  <th>NAMA SEKOLAH</th>
                  <th>ALAMAT</th>
                  <th>KELURAHAN</th>
                </tr>
                </thead>
<tbody>
                 <?php
                    $no = 1;
                    $stmt = $DB_con->prepare('SELECT * FROM profil');
                    $stmt->execute();
                    if($stmt->rowCount() > 0)
                    {
                      while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                    {
                      extract($row);
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $npsn; ?></td>
                  <td><?php echo $nama_sekolah; ?></td>
                  <td><?php echo $alamat; ?></td>
                  <td><?php echo $kel; ?></td>
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
                
                </tbody>

</table><br />