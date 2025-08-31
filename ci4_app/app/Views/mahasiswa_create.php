<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h2>Tambah Mahasiswa</h2>
    <form method="post" action="<?= base_url('mahasiswa/store'); ?>">
        NIM: <input type="text" name="nim" required><br>
        Nama: <input type="text" name="nama" required><br>
        Umur: <input type="number" name="umur" required><br>
        <button type="submit">Simpan</button>
    </form>
    <a href="<?= base_url('mahasiswa'); ?>">Kembali</a>
</body>
</html>