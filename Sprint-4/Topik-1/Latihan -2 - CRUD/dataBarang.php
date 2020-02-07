<?php
require 'PDO.php';
//Data Login

if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];

    echo "\n";
    $tambah->insert($nama,$merk,$harga);
}


$show = $tambah->lihatData() ;

//Menghapus data

if(isset($_GET['hapus'])) {
    $id = $_GET['id'];

    $tambah->delete($id);
}
    

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
        a{
            
            text-decoration: none;
            
        }
    </style>
</head>
<body>
<div class="kotak">
<table border="1" cellspacing="0" cellpadding="10">
    <?php $i=1; ?>
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Kode</th>
        <th>Merk Barang</th>
        <th>Harga</th>
        <th colspan ="2">Aksi</th>        
    </tr>
<?php foreach($show as $value) { ?>
    
    <tr>
        <td><?= $i ?></td>
        <td><?= $value['nama'];?></td>
        <td><?=$value['id'];?></td>
        <td><?= $value['merk'];?></td>
        <td><?= $value['harga'];?></td>
    <form action="hapus.php" method="post">
            <td>
                <button style="background-color: lightblue;" type="submit" name="ubah" ><a href="ubah.php?id=<?=$value['id'];?>">Ubah</a></button>
            </td>
        
            <td>
                <button style="background-color: red;" type="submit" name="hapus"><a  href="hapus.php?id=<?=$value['id'];?>">Hapus</a></button>
            </td>
    </form>
    </tr>
    <?php $i++; ?>
<?php } ?>
</table>
<p style="font-size:20px;">Produk <span><?= $_POST['nama'];?></span> , dengan merk <span><?= $_POST['merk'];?></span>  dan harga <span><?= $_POST['harga'];?></span> telah <span style="color:red;">BERHASIL</span>  ditambahkan.</p>
<br>
<br>
<table>
    <?php require 'ubah.php';
    ?>
    <tr>
        <td>Barang</td>
        <td>:   <?= $nama =$_GET['nama'];?></td>
    </tr>

    <tr>
        <td>Merk</td>
        <td>:   <?=$nama =$_GET['merk'];?></td>
    </tr>

    <tr>
        <td>Harga</td>
        <td>:   <?= $nama =$_GET['harga'];?></td>
    </tr>
</table>
<p style="font-size:20px;">Data <span><?= $_GET['nama'];?></span> , merk <span><?= $_GET['merk'];?></span>  dan harga <span><?= $_GET['harga'];?></span> telah <span style="color:red;">BERHASIL</span>  diubah.</p>
</div>
<a href="inputBarang.php">Kembali</a>


</body>
</html>