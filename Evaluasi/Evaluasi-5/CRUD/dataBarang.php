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
            padding-left:30px;
        }
        .cheader a{
            margin-left:50px;

        }
        .kotak{
            width:800px;
            min-height:300px;
            border:1px solid black;
            text-align: center;
            margin:10% 20%;
            margin-top:-25%;
            justify-content: center;
            display:grid;
            place-items: center;
        }
        .dua{
            color:darkblue;
            font-weight: bold;
            text-align:center;
            display:inline-block;
            width:75px;
            height:21px;
        }
        .cheader a:hover .dua{
            color:darkblue;
            font-weight: bold;
            text-align:center;
            background-color:#ddd;
            display:inline-block;
            width:75px;
            height:21px;
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
            width:255px;
            height:300px;
        }
        .satu{
            font-size:18px;
            margin:10px;
            padding-left:10px;
            border-radius:3px;
            /* background-color:#ddd; */
            width:80%;
            height:20px;
        }
        .navigasi ul li a:hover .satu{
            font-size:18px;
            margin:10px;
            padding-left:10px;
            border-radius:3px;
            background-color:#ddd;
            width:85%;
            height:35%;
        }

    </style>
</head>
<body>
<div class="header">
    <div class="subH">
        <ul>
            <li><img src="2.jpg" alt=""></li>
        </ul>
        <p style="margin-top:-12px;font-weight:bold;">Selamat Datang Nurul</p>
    </div>
</div>

<div class="cheader" >
        <a href=""><div class="dua">Home</div></a>
        <a href=""><div class="dua">Profil</div></a>
        <a href=""><div class="dua">Informasi</div></a>
        <a href=""><div class="dua">Bantuan</div></a>
</div>

<div class="navigasi">
    <h3 style="margin:15px 5px;color:blue;font-size:28px;">Pilih aktifitas</h3>
        <ul type="circle">
           
            <li><a href=""><div class="satu">Dashbord</div></a></li>
            <hr>
            <li><a href=""><div class="satu">Cek Penjualan</div></a></li>
            <hr>
            <li><a href=""><div class="satu">Cek Pengiriman</div></a></li>
            <hr>
            <li><a href=""><div class="satu">Grafik Penjualan</div></a></li>
            <hr>
            
        </ul>
</div>
<a style="margin-top:20px;" href="inputBarang.php">Kembali keinput</a>

<div class="kotak">
<h2>Data Barang</h2>
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
<p style="font-size:25px; margin-top:50px;">Produk <span><?= $_POST['nama'];?></span> , dengan merk <span><?= $_POST['merk'];?></span>  dan harga <span><?= $_POST['harga'];?></span> telah <span style="color:red;">BERHASIL</span>  ditambahkan.</p>
</div>
<br>

</body>
</html>