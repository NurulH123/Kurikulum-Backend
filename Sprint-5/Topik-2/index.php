<?php
//use (nama namespacenya) \ <nama class>
require_once __DIR__ .'/vendor/autoload.php';

// use Lingkaran\Lingkaran;
// use Persegi\Persegi;
// use Segitiga\Segitiga;

$r =7;
// $sisi =4;
// $alas =8;
// $tinggi =6;

// $lingkaran = new Lingkaran($r);
// $persegi =new Persegi($sisi);
// $segitiga =new Segitiga($alas,$tinggi);
// ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Composer</title>
    <style>
        body{
            background-image:url(math.jpg);
        }
        h1{
            text-shadow:2px 5px 3px 6px yellowgreen;
            font-size:100px;
            margin:3% auto;
            margin-left:25%;
            color:red;
        }
        .kotak{
            margin:14% auto;        
            width:45%;
            height:80px;
            /* border:1px solid black; */
            position:relative;
            text-align:center;
            justify-content:center;
            grid:center;
        }
        .kotakL{
            width:30%;
            height:50px;
            margin-top:3%;
            border:1px solid black;
            text-align:center;
            background-color:#89d185;
            border-radius:8px;
            box-shadow:inset -1px 2px 4px 7px #f0f0f0;
        }
        .kotakP{
            width:30%;
            height:50px;
            border:1px solid black;
            text-align:center;
            position:relative;
            margin-left:35%;
            margin-top:-8.6%;
            background-color:#89d185;
            border-radius:8px;
        }
        .kotakS{
            width:30%;
            height:50px;
            border:1px solid black;
            text-align:center;
            position:absolute;
            margin-left:70%;
            margin-top:-8.6%;
            background-color:#89d185;
            border-radius:8px;

        }
        a{
            text-decoration:none;
            font-size:35px;
        }
    </style>
</head>
<body>
<h1>MATHEMATIC</h1>

<div class="kotak">
    <div class="kotakL">
        <a href="">Lingkaran</a>
    </div>
    <div class="kotakP">
        <a href="">Persegi</a>
    </div>
    <div class="kotakS">
        <a href="">Segitiga</a>
    </div>
</div>

    <form action="" method="POST">
        <div class="lingkaran">
        
        </div>
    </form>
</body>
</html>
