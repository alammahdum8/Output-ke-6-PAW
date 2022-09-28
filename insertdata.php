<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-3">
        <h2>Tambah Data Mahasiswa</h2>
        <form method="POST" action="action.php">
        <div class="form-floating mb-3 mt-3">
            <input type="number" class="form-control input-color" id="id_mhs" placeholder="Masukkan id_mhs" name="id_mhs" required>
            <label for="id_mhs">ID_Mhs</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="number" class="form-control input-color" id="id_prodi" placeholder="Masukkan Id_Prodi" name="id_prodi" required>
            <label for="id_prodi">id_Prodi</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="nama_mhs" placeholder="Masukkan nama_mhs" name="nama_mhs" required>
            <label for="nama_mhs">Nama</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="alamat_mhs" placeholder="Masukkan alamat_mhs" name="alamat_mhs" required>
            <label for="alamat_mhs">Alamat</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
