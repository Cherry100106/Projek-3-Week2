<!DOCTYPE html>
<html>
<body>
   <table border="1">
      <tr>
         <th>Nama</th>
         <th>NIM</th>
         <th>Umur</th>
      </tr>
      <?php foreach($mahasiswa as $m): ?>
      <tr>
         <td><?= $m['nama']; ?></td>
         <td><?= $m['nim']; ?></td>
         <td><?= $m['umur']; ?></td>
      </tr>
      <?php endforeach; ?>
   </table>
</body>
</html>
