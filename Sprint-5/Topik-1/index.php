<?php

require_once('Luas/require.php');






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Luas Bangun Datar</title>
    <style>
        body{
            background-image:url(img/mathB.jpg);
        }
        .kotak{
            margin:5% auto;
            width:63%;
            height:410px;
            border:1px solid black;
            padding:2%;
            border-radius:3%;
            position:relative;
            box-shadow:5px 3px 6px 7px yellow;
            background-color:#1177bb;
        }
        .lingkaran{
            border:1px solid black;
            box-shadow:2px 2px 6px 7px #ddd;
            width:30%;
            height:140px;
            text-align:center;
            padding-bottom:20%;
            margin-top:12%;
            position:relative;
            background-color:#ffcc00;
            border-radius:5px;
        }
        .persegi{
            border:1px solid black;
            width:30%;
            height:316px;
            text-align:center;
            position:relative;
            margin-left:34%;
            margin-top:-37%;
            background-color:#ffcc00;
            border-radius:5px;
            box-shadow:2px 2px 6px 7px #ddd;
        }
        .segitiga{
            border:1px solid black;
            width:30%;
            height:68%;
            text-align:center;
            position:absolute;
            margin-left:64%;
            margin-top:-35%;
            background-color:#ffcc00;
            box-shadow:2px 2px 6px 7px #ddd;
            border-radius:5px;
        }
        .ipLingkaran{
            margin-top:-3%;
            width:66%;
            height:13%;
            font-size:15px;
            padding:4%;
            border-radius:8px;
            background-color:lightblue;
        }
        .ipPersegi{
            margin-top:-3%;
            width:66%;
            height:7%;
            font-size:15px;
            padding:4%;
            border-radius:8px;
            background-color:lightblue;
        }
        .ipSegitiga1{
            margin-top:-6%;
            width:63%;
            height:7%;
            padding:3%;
            border-radius:8px;
            background-color:lightblue;
        }
        .ipSegitiga2{
            margin-top:4%;
            width:63%;
            height:7%;
            padding:3%;
            border-radius:8px;
            background-color:lightblue;
        }
        h1{
            text-align:center;
            font-size:45px;
            margin-top:-1%;
            text-shadow: 4px 3px 5px 2px #94151b;
            color:yellow;
        }
        h2{
            margin-top:7%;
            font-size:32px;
            text-shadow:3px 5px 3px 6px lightblue;
            color:royalblue;
        }
        button{
            background-color:#94151b;
            color:#ccc;
            border-radius:5px;
        }
        strong{
            color:red;
        }
    </style>
</head>
<body>
    <div class="kotak">
        <h1>Luas Bangun Datar</h1>
        <div style="margin-top:-7%;" class="subk">
            <form action="" method="get">
                <div class="lingkaran">
                    <h2>Lingkaran</h2>
                    <p style="margin-top:18%;color:red;">Masukkan Jari-jari Lingkaran</p>
                    <br>
                        <input class="ipLingkaran" type="number" name="radius" placeholder="Jari-jari Lingkaran">
                    <br>
                    <br>
                    <?php 
                        $radius =$_GET['radius']; 
                        $lingkaran =new Lingkaran($radius);
                    ?>
                    <button style="margin-left:54%;margin-top:10%;" type="submit" name="lingkaran">Jalankan</button>
                </div>
                
                <div class="persegi">
                    <h2>Persegi</h2>
                    <p style="margin-top:18%;color:red;">Masukkan Sisi Persegi</p>
                    <br>
                        <input class="ipPersegi" type="number" name="sisi" placeholder="Sisi Persegi">
                    <br>
                    <br>
                    <?php 
                    $sisi =$_GET['sisi'];
                    $persegi = new Persegi($sisi);
                    ?>
                    <button style="margin-left:54%;margin-top:10%;" type="submit" name="persegi">Jalankan</button>
                </div>

                <div class="segitiga">
                    <h2>Segitiga</h2>
                    <p style="margin-top:15%;color:red;">Masukkan Alas & Tinggi Segitiga</p>
                    <br>
                        <input class="ipSegitiga1" type="number" name="alas" placeholder="Alas Segitiga">
                    <br>
                        <input class="ipSegitiga2" type="number" name="tinggi" placeholder="Tinggi Segitiga">
                    <br>
                    <?php
                    $alas =$_GET['alas'];
                    $tinggi =$_GET['tinggi'];
                    $lingkaran = new Segitiga($alas,$tinggi);
                    ?>
                    <button style="margin-left:54%;margin-top:-8%;" type="submit" name="segitiga">Jalankan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
