<?php
require 'PDO.php';
if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];

    echo "\n";
    $tambah->insert($merk);
}

$tambah =new Penjualan();
$show = $tambah->lihatData() ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
    <style>
        span{
            color:blue;
            font-weight: bold;
            font-style: italic;
        }
        table{
            border-color: lightblue;
        }
    </style>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="10">
    <?php $i=1; ?>
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Merk Barang</th>
        <th>Harga</th>
        <th colspan ="2">Edit</th>        
    </tr>
<?php foreach($show as $value) { ?>
    <tr>
        <td><?= $i ?></td>
        <td><?= $value['nama'];?></td>
        <td><?= $value['merk'];?></td>
        <td><?= $value['harga'];?></td>
        <td>
            <button type="submit" name="ubah">Ubah</button>
        </td>
        <td>
            <button type="submit" name="ubah">Hapus</button>
        </td>
    </tr>
    <?php $i++; ?>
<?php } ?>
</table>
<p style="font-size:20px;">Produk <span><?= $_POST['nama'];?></span> , dengan merk <span><?= $_POST['merk'];?></span>  dan harga <span><?= $_POST['harga'];?></span> telah <span style="color:red;">BERHASIL</span>  ditambahkan.</p>
<br>
<a href="inputBarang.php">Kembali</a>
</body>
</html>