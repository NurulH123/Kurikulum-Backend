<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama Pengirim</th>
            <th>Asal Barang</th>
            <th>Kurir</th>
            <th>Tujuan</th>
        </tr>

        <tr>
            <td>1</td>
            <td><?= $_GET['nPengirim'];?></td>
            <td><?= $_GET['asal'];?></td>
            <td><?= $_GET['kurir'];?></td>
            <td><?= $_GET['tujuan'];?></td>
        </tr>
    </table>
<br>
<a href="Get & Post.php">Kembali</a>
</body>
</html>