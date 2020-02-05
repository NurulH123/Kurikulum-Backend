
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Barang</title>
    <style>
        .kotak{
            background-color:lightblue;
            width :90%;
            height :400px;
            border :2px solid #eaea;
            margin :30px auto;
            border-radius :10px;
            padding:10px;
            display:relative;
        }
        h2{
            float:right;
        }
        .table{
            padding :10px;
        }
    </style>
</head>
<body>
<div class="kotak">
    <h2>Input Barang</h2>
    <form action="dataBarang.php" method="post">
        <table class="table">
            <tr>
                
                <td>
                    <label for="barang">Nama Barang </label>
                </td>
                <td>
                    :   <input type="text" id="barang" name="nama" placeholder="Nama Barang">
                </td>
            </tr>

            <tr>
                
                <td>
                    <label for="barang">Merk Barang </label>
                    </td>
                <td>
                    :   <input type="text" id="barang" name="merk" placeholder="Merk Barang">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="harga"></label>Harga </label>
                    </td>
                <td>
                    :   <input type="text" id= "harga" name="harga" placeholder="Harga">
                </td>
            </tr>
            
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>