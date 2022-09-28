<?php

$koneksi=mysqli_connect("localhost","root","","alamm");

$id_mhs = $_POST['id_mhs'];
$id_prodi = $_POST['id_prodi'];
$nama_mhs = $_POST['nama_mhs'];
$alamat_mhs = $_POST['alamat_mhs'];

$sql = "INSERT INTO tbl_mhs VALUES('$id_mhs','$id_prodi','$nama_mhs','$alamat_mhs')";
$hasil =mysqli_query($koneksi, $sql);

if (!$hasil){
    echo "Data gagal ditambahkan!";
}
else {
    echo "Data berhasil ditambahkan <br>
    <a href='tabelmhs.php'>show data</a>
    ";
}

?>