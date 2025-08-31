<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h2>Detail Mahasiswa</h2>
    <p><b>ID:</b> <?= $mahasiswa['id']; ?></p>
    <p><b>NIM:</b> <?= $mahasiswa['nim']; ?></p>
    <p><b>Nama:</b> <?= $mahasiswa['nama']; ?></p>
    <p><b>Umur:</b> <?= $mahasiswa['umur']; ?></p>

    <a href="<?= base_url('mahasiswa'); ?>">Kembali ke Daftar Mahasiswa</a>
</body>
</html>
