<?php
include_once("../../dbconfig.php");
?>
<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Siswa.xls");
?>
<br>
<br>
<table>
<thead>
                <tr>
                  <th>NO</th>
                  <th>NPSN</th>
                  <th>Tahun Ajaran</th>
                  <th>Rombel</th>
                  <th>Putra</th>
                  <th>Putri</th>
                  <th>KMS</th>
                  <th>NON KMS</th>
                  <th>Jumlah</th>
                </tr>
                </thead>
<tbody>
                 <?php
                    $no = 1;
                    $stmt = $DB_con->prepare('SELECT * FROM siswa');
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
                  <td><?php echo $tahun_ajaran; ?></td>
                  <td><?php echo $rombel; ?></td>
                  <td><?php echo $jumlah_putra; ?></td>
                  <td><?php echo $jumlah_putri; ?></td>
                  <td><?php echo $kms; ?></td>
                  <td><?php echo $non_kms; ?></td>
                  <td><?php echo $jumlah_siswa; ?></td>
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