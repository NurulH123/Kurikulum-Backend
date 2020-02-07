<?php
require 'PDO.php';
//Ubah data

$tambah1 = $tambah->edit($_GET['id']);


if(isset($_POST['submit'])) {
    $nama =$_POST['nama'];
    $kode =$_POST['kode'];
    $merk =$_POST['merk'];
    $harga =$_POST['harga'];

    $tambah->update($nama,$merk,$harga,$kode);
    header('Location:dataBarang.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                
                <td>
                    <label for="barang">Nama Barang </label>
                </td>
                <td>
                    :   <input type="text" id="barang" name="nama" placeholder="Nama Barang" value="<?=$tambah1->nama?>">
                </td>
            </tr>

            <tr>
                
                <td>
                    <label for="barang">Kode </label>
                </td>
                <td>
                    :   <input type="text" id="barang" name="kode" placeholder="Kode" value="<?=$tambah1->id?>">
                </td>
            </tr>

            <tr>
                
                <td>
                    <label for="barang">Merk Barang </label>
                    </td>
                <td>
                    :   <input type="text" id="barang" name="merk" placeholder="Merk Barang" value="<?=$tambah1->merk?>">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="harga"></label>Harga </label>
                    </td>
                <td>
                    :   <input type="text" id= "harga" name="harga" placeholder="Harga" value="<?=$tambah1->harga?>">
                </td>
            </tr>
            
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    
    </form>
    <a href="dataBarang.php">kembali</a>
</body>
</html>