<?php 
require_once __DIR__.'vendor\autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Penjual\Penjualan;

$jual = new Penjualan();
// $data=$jual->lihatData();
// print_r($jual);
// ?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Barang</title>
    <style>
        body{
            background-image:url(img/comp.jpg);
            background-repeat:no-repeat;
            background-size:1380px 670px;
            
        }
        .kotak{
            background-color:lightblue;
            width :65%;
            height :400px;
            border :2px solid #eaea;
            margin :30px auto;
            border-radius :10px;
            box-shadow: 5px -3px 5px #ddd;
            padding:0px;
            display:relative;
            opacity:.9;
        }
        h2{
            margin: auto 35%;
            padding:10px;
            font-size: 40px;
            text-shadow:4px -1px 1px #fff;
        }
        .table{
            padding :10px;
        }
        label{
            font-size: 27px;
        }
        input{
            width:390px;
            height:30px;
            border-radius:10px;
            padding:10px;
            font-size:18px
        }
        button{
            background-color:#269F42;
            border-radius:5px;
            width:45%;
            height:30%;
            box-shadow: 0 0 7px lightgreen;
            margin-left:2%;
            margin-top:30%;
            font-size:100%;
            font-weight:bold;
            color:#ccc;
        }
        form{
            margin-top:20px;
        }
    </style>
</head>
<body>
<div class="kotak">
    <h2>Input Barang</h2>
    <form action="" method="post">
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
                    <label for="harga">Harga</label>
                    </td>
                <td>
                    :   <input type="text" id= "harga" name="harga" placeholder="Harga">
                </td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Send</button></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html> -->