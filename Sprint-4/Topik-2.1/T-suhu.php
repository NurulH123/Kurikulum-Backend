<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menghitung suhu</title>
    <style>
        body{
            background-color:#ddd;
        }
        h1{
            display:inline-block;
        }
        .induk{
            margin:auto;
            width:600px;
            height:600px;
            background-color:#ffff;
            border-radius:10px;
            padding-left:25px;
            box-shadow:0 0 5px 1px black;
        }
        .ipt{
            height:100px;
            text-align:center;
            font-size:40px;
            font-weight:bold;
            border-radius:5px;
            box-shadow:inset 0 0 5px 1px salmon;
        }
        .submit{
            background-color:#006DBF;
            color:white;
            border-radius:5px;
            padding:5px;
            margin:0px 0px 0 470px;
        }
        form{
            width:30%;
            
        }
        .opt{
            margin:15px 5px 0 0px;
        }
        button{
            margin-right:10px;
            width:30px;
            height:25px;
        }
    </style>
</head>
<body>
<div class="induk">
     <form action="" method="post">
        <label for="ipt" ><h1>Penghitung suhu</h1></label>
        <input type="number" id="ipt" name="ipt" class="ipt">
        <div class="opt">
            <button name="satu">C</button>            
            <button name="satu">R</button>
            <button name="satu">F</button>
            <button name="satu">K</button>
        </div>
        <input type="submit" name="submit" value="Hitung" class="submit">
     </form>
</div>
</body>
</html>
<a href="session.php"></a>
<?php
$ipt =$_POST['ipt'];
$opt=$_POST['satu'];

if(isset($ipt)) {
        echo "<br>";
        echo "Hasilnya dalam celcius adalah:" . $ipt;
        echo "<br>";
        echo "Hasilnya dalam reamur adalah:" . 4/5*$ipt;
        echo "<br>";
        echo "Hasilnya dalam fahrenheit adalah:" . 9/5*$ipt += 32;
        echo "<br>";
        echo "Hasilnya dalam kelvin adalah:" . $ipt += 273;
}
?>

