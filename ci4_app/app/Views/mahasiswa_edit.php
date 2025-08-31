<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>Edit Mahasiswa</h2>
    <form method="post" action="<?= base_url('mahasiswa/update/'.$mahasiswa['id']) ?>">
        NIM: <input type="text" name="nim" value="<?= $mahasiswa['nim'] ?>" required><br>
        Nama: <input type="text" name="nama" value="<?= $mahasiswa['nama'] ?>" required><br>
        Umur: <input type="number" name="umur" value="<?= $mahasiswa['umur'] ?>" required><br>
        <button type="submit">Update</button>
    </form>
    <a href="<?= base_url('mahasiswa') ?>">Kembali</a>
</body>
</html>
