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
    <title>Data Barang</title>
    <style>
        .header{
            width:100%;
            height:108px;
            background-color:salmon;
            padding:1px;
            padding-left:50px;
        }
        .cheader{
            width:100%;
            height:20px;
            padding:5px;
            background-color:lightskyblue;
            margin-top:10px;
            padding-left:50px;
        }
        .cheader a{
            margin-left:50px;
            
        }
        .kotak{
            margin:auto 30%;
            margin-top:-20%;
        }
        span{
            color:blue;
            font-weight: bold;
            font-style: italic;
        }
        a{
            text-decoration: none;
        }
        button{
            border-radius:4px;
            color:#fff;
        }
        .header li{
            width:70px;
            height:70px;
            background-color:lightpink;
            border-radius:50%;
            box-shadow: 0 0 1px 3px #eaeaea;  
            overflow:hidden;
            margin-top:-4px;
        }
        img{
            width:70px;
            height:70px;
        }
        .navigasi{
            margin-top:-10px;
            background-color:lightpink;
            width:250px;
            height:300px;
        }
        .navigasi li{
            font-size:18px;
            margin:10px;
            margin-top:10px;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="subH">
        <ul>
            <li><img src="2.jpg" alt=""></li>
        </ul>
        <p style="margin-top:-12px;">Selamat Datang Nurul</p>
    </div>
</div>

<div class="cheader" >
        <a href="">Home</a>
        <a href="">About</a>
        <a href="">List</a>
        <a href="">Hubungi</a>
</div>

<div class="navigasi">
    <h3 style="margin:15px 5px;color:blue;font-size:28px;">Pilih aktifitas</h3>
    <ul type="circle" class="option" >
        
        <li> <a href=""> Dashbord</a></li>
        <hr>
        <li><a href="">Cek Penjualan</a></li>
        <hr>
        <li><a href="">Cek Pengiriman</a></li>
        <hr>
        <li><a href="">Grafik Penjualan</a></li>
        <hr>
    </ul>
</div>
<div class="kotak">
<table border="1" cellspacing="0" cellpadding="10" style="border-color: lightblue;">
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
                <button style="background-color:#1DA1F2;" type="submit" name="ubah" ><a href="ubah.php?id=<?=$value['id'];?>">Ubah</a></button>
            </td>
        
            <td>
                <button style="background-color: red;" type="submit" name="hapus"><a  href="hapus.php?id=<?=$value['id'];?>">Hapus</a></button>
            </td>
    </form>
    </tr>
    <?php $i++; ?>
<?php } ?>
</table>
<p style="font-size:20px; margin-top:60px;">Produk <span><?= $_POST['nama'];?></span> , dengan merk <span><?= $_POST['merk'];?></span>  dan harga <span><?= $_POST['harga'];?></span> telah <span style="color:red;">BERHASIL</span>  ditambahkan.</p>
<br>

<a href="inputBarang.php">Kembali keinput</a>
</body>
</html>