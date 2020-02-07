<?php
session_start();








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
<form action="santri.php" method="get">
        <table>
            <tr>
                <td>Masukan Nama</td>
                <td>:   <input type="text" name="nama"></td>
            </tr>

            <tr>
                <td>Divisi</td>
                <td>:   <input type="text" name="divisi"></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>:   <input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Save</button></td>
            </tr>
        </table>
    </form>
<a href="login.php">Kembali</a>
</body>
</html>