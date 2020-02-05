<?php
if(isset($_GET['kirim'])) {
        header('Location:Get.php');
        exit;
}

if(isset($_POST['kirim'])) {
    header('Location:Post.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas Get & Post</title>
</head>
<body>
    <form action="Post.php" method="post">
        <tr>
            <td><label for="barang">Nama Barang</label></td>
            <td>:   <input type="text" name="barang" id="barang"></td>
            <td><label for="harga">Harga</label></td>
            <td>:   <input type="number" id="harga" name="harga"></td>
            <td><button type="submit" name="kirim">Kirim</button></td>
        </tr>
    </form>
    
   
        <form action="Get.php" method="get">
        <table>
            <tr>
                <td>Nama Pengirim</td>
                <td>:   <input type="text" name="nPengirim" placeholder="Nama Pengirim"></td>
            </tr>

            <tr>
                <td>Asal Barang</td>
                <td>:   <input type="text" name="asal" placeholder="Asal Barang"></td>
            </tr>
                
            <tr>
                <td>Nama Kurir</td>
                <td>:   <input type="text" name="kurir" placeholder="Kurir"></td>
            </tr>

            <tr>
                <td>Tujuan</td>
                <td>:   <input type="text" name="tujuan" placeholder="Tujuan"></td>
            </tr>
            <tr><td><button type="submit" name="kirim">Kirim</button></td></tr>
        </table>
        </form>
    
</body>
</html>