<?php 
require 'evaluasi5.php';

if(isset($_GET['submit'])) {
    $nama =$_GET['nama'];
    $div =$_GET['divisi'];
    $alamat =$_GET['alamat'];
    
    $tambah->insert($nama,$div,$alam);
}
$tambah =new Admin();


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
<table border="2" cellspacing="0">
    
        <form action="" method="get">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Divisi</th>
                <th>Alamat</th>
            </tr>
        <?php $i=1; ?>
        <?php foreach($santri as $value) { ?>
            <tr>
                <td><?=$i;?></td>
                <td><?=$value['nama'];?></td>
                <td><?=$value['divisi'];?></td>
                <td><?=$value['alamat'];?></td>
            </tr>

            
            </form>
            <?php $i++?>
        <?php } ?>
            
    </table>
    <tr>
        <td><button type="submit" name="save">Save</button></td>
    </tr>
    <a href="login.php">Kembali</a>

</body>
</html>