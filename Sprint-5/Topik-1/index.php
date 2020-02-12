<?php

require_once('Luas/require.php');


// $sisi =$_GET['sisi'];
// $alas =$_GET['alas'];
// $tinggi =$_GET['tinggi'];

$lingkaran =new Lingkaran($radius);
// $persegi = new Persegi($sisi);
// $lingkaran = new Segitiga($alas,$tinggi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Luas Bangun Datar</title>
    <style>
        .kotak{
            margin:-7% auto;
            width:65%;
            height:58%;
            border:1px solid #ddd;
            padding:2%;
            position:relative;
        }
        .lingkaran{
            border:1px solid #ddd;
            width:30%;
            height:78%;
            text-align:center;
            margin-top:12%;
        }
        .persegi{
            border:1px solid #ddd;
            width:30%;
            height:78%;
            text-align:center;
            position:relative;
            margin-left:33%;
            margin-top:-34%;
        }
        .segitiga{
            border:1px solid #ddd;
            width:30%;
            height:68%;
            text-align:center;
            position:absolute;
            margin-left:63%;
            margin-top:-32%;
        }
        .ipLingkaran{
            margin-top:-3%;
            width:66%;
            height:13%;
            font-size:15px;
            padding:4%;
            border-radius:3px;
        }
        .ipPersegi{
            margin-top:-3%;
            width:66%;
            height:14%;
            font-size:15px;
            padding:4%;
            border-radius:3px;
        }
        .ipSegitiga1{
            margin-top:-5%;
            width:66%;
            height:12%;
            border-radius:3px;
        }
        .ipSegitiga2{
            margin-top:4%;
            width:66%;
            height:12%;
            border-radius:3px;
        }
    </style>
</head>
<body>
    <div class="kotak">
        <div style="margin-top:-5%;" class="subk">
            <form action="" method="get">
                <div class="lingkaran">
                    <p style="margin-top:33%;">Masukkan Jari-jari Lingkaran</p>
                    <br>
                        <input class="ipLingkaran" type="number" name="radius" placeholder="Jari-jari Lingkaran">
                    <br>
                    <?php 
                        $radius =$_GET['radius']; 
                    
                    ?>
                    <button style="margin-left:54%;margin-top:28%;" type="submit" name="lingkaran">Jalankan</button>
                </div>
                
                <div class="persegi">
                    <p style="margin-top:33%;">Masukkan Sisi Persegi</p>
                    <br>
                        <input class="ipPersegi" type="number" name="sisi" placeholder="Sisi Persegi">
                    <br>
                    <button style="margin-left:54%;margin-top:28%;" type="submit" name="persegi">Jalankan</button>
                </div>

                <div class="segitiga">
                    <p style="margin-top:30%">Masukkan Alas & Tinggi Segitiga</p>
                    <br>
                        <input class="ipSegitiga1" type="number" name="alas" placeholder="Alas Segitiga">
                    <br>
                        <input class="ipSegitiga2" type="number" name="tinggi" placeholder="Tinggi Segitiga">
                    <br>
                    <button style="margin-left:54%;margin-top:17%;" type="submit" name="segitiga">Jalankan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
