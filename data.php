<?php
include('koneksi.php');
include ('navbaradmin.php');

$data = query("SELECT * FROM pesanan");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="css/data.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>

<div class="title">
    <h1>Data Pesanan Masuk</h1>
</div>
<div class="garis">
</div>
    <div class="table">
    <table>

        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Minuman</th>
            <th>Snack</th>
            <th>Jumlah Pesanan</th>
            <th>Harga Minuman/Satuan</th>
            <th>Harga Snack/Satuan</th>
            <th>Total</th>
            <th class="aksi">Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($data as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['minuman']; ?></td>
            <td><?= $row['snack']; ?></td>
            <td><?= $row['jumlah_pesanan']; ?></td>
            <td><?= $row['harga_minuman']; ?></td>
            <td><?= $row['harga_snack']; ?></td>
            <td><?= $row['total']; ?></td>
            <td>
                <a class="edit" href="editform.php?id=<?= $row["id"]; ?>"onclick="return confirm('yakin?');"> <i data-feather="edit"></i></a>
                <script>
                    feather.replace()
                 </script>
                <a class="hapus" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');"><i data-feather="trash"></i></a>
                <script>
                    feather.replace()
                </script>
            </td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
    </div>
    <script>
      feather.replace()
    </script>
</body>
</html>