<?php
$koneksi = mysqli_connect("localhost","root","","alamm");
$sql="SELECT id_mhs, nama_mhs, nama_prodi, alamat_mhs FROM tbl_mhs m, tbl_prodi p WHERE m.id_prodi = p.id_prodi ORDER BY id_mhs";
$hasil=mysqli_query($koneksi,$sql);

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Data Mahasiswa Fakultas Teknik</h2>
  <form method="post" action="insertdata.php">
  <form method="post" action="insertdata.php">
    <button type="submit" class="btn btn-success">Tambah</button>
  </form> 
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>ID MHS</th>
        <th>Nama MHS</th>
        <th>Prodi MHS</th>
        <th>Alamat MHS</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($baris=mysqli_fetch_assoc($hasil)) {
      ?>
      <tr>
        <td><?php echo $baris['id_mhs'];?></td>
        <td><?php echo $baris['nama_mhs'];?></td>
        <td><?php echo $baris['nama_prodi'];?></td>
        <td><?php echo $baris['alamat_mhs'];?></td>
        <td>
          <button type="button" class="btn btn-warning">Edit</button>
          <button type="button" class="btn btn-sml btn-danger">Hapus</button>
        </td>
      </tr>
    <?php  }?>
    </tbody>
  </table>
  </div>
</div>

</body>
</html>
