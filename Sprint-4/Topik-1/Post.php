<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?=$_POST['barang'];?></td>
            <td><?=$_POST['harga'];?></td>
        </tr>
    </table>
</body>
</html>