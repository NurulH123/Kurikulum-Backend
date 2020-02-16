<?php
//use (nama namespacenya) \ <nama class>
require_once __DIR__ .'/vendor/autoload.php';

use Lingkaran\Lingkaran;
use Persegi\Persegi;
use Segitiga\Segitiga;

$r =$_POST['jari'];
$sisi =$_POST['sisi'];
$alas =$_POST['alas'];
$tinggi =$_POST['tinggi'];
$miring =$_POST['miring'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Latihan Composer</title>
    <style>
        
    </style>
</head>
<body>
<h1>MATHEMATIC</h1>

<div class="kotak">
<!-- Kotak Lingkaran -->
    <div class="kotakL">
        <a class="lingkarA" href="#lingkaran">Lingkaran</a>

    <!-- Backgroun item overlay -->
        <div class="overlay" id="lingkaran">
            <a href="#">
                <img src="img/icondelete.png" alt="">
            </a>
            <div class="subL">
                <h2>Lingkaran</h2>
                <form action="" method="POST">
                    <input class="ipLingkaran" type="number" name="jari" placeholder="Jari-jari Lingkaran">
                    <?php 
                    echo "<br>";
                    $lingkaran = new Lingkaran($r);
                    ?>                       
                    <button type="submit" name="hitung"><span>Hitung</span></button>
                </form>
            </div>
        </div>

    </div>

<!-- Kotak Persegi -->
    <div class="kotakP">
        <a class="persegiA" href="#persegi">Persegi</a>

    <!-- Backgroun item overlay -->
        <div class="overlay" id="persegi">
            <a href="#">
                <img src="img/icondelete.png" alt="">
            </a>
            <div class="subP">
                <h2>Persegi</h2>
                <form action="" method="POST">
                    <input class="ipLingkaran" type="number" name="sisi" placeholder="Sisi Persegi">
                    <?php 
                    echo "<br>";
                    $persegi =new Persegi($sisi);
                    ?>                       
                    <button type="submit" name="hitung"><span>Hitung</span></button>
                </form>
            </div>
        </div>

    </div>

<!-- Kotak Segitiga -->
    <div class="kotakS">
        <a class="segitigaA" href="#segitiga">Segitiga</a>
    
    <!-- Backgroun item overlay -->
        <div class="overlay" id="segitiga">
            <a href="#">
                <img src="img/icondelete.png" alt="">
            </a>
            <div class="subS S">
                <h2>Segitiga</h2>
                <form action="" method="POST">
                    <input class="ipLingkaran" type="number" name="alas" placeholder="Alas Segitiga">
                    <br>
                    <input class="ipLingkaran" type="number" name="tinggi" placeholder="Tinggi Segitiga">
                    <br>
                    <input class="ipLingkaran" type="number" name="miring" placeholder="Miring Segitiga">
                    <?php 
                    // echo "<br>";
                    $segitiga =new Segitiga($alas,$tinggi,$miring);
                    ?>                       
                    <button class="bSegitiga" type="submit" name="hitung"><span>Hitung</span></button>
                </form>
            </div>
        </div>

    </div>
    </div>
</div>

</body>
</html>
