<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>


    <form method="get" action="<?= base_url('mahasiswa'); ?>">
        <input type="text" name="keyword" placeholder="Cari NIM atau Nama">
        <button type="submit">Cari</button>
    </form><br>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>NO</th>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Detail</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($mahasiswa as $m): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $m['id']; ?></td>
            <td><?= $m['nim']; ?></td>
            <td><?= $m['nama']; ?></td>
            <td><?= $m['umur']; ?></td>
            <td><a href="<?= base_url('mahasiswa/detail/'.$m['id']); ?>" target="_blank">Lihat Detail</a></td>
            <td>
                <a href="<?= base_url('mahasiswa/edit/'.$m['id']); ?>">Edit</a> |
                <a href="<?= base_url('mahasiswa/delete/'.$m['id']); ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table><br>
    <button onclick="window.location='<?= base_url('mahasiswa/create'); ?>'">Tambah Mahasiswa</button>
</body>
</html>
