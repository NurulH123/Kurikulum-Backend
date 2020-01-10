<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat kalkulator</title>
</head>
<body >
<form action="" method="post" >
    <label for="nama1" >Angka 1</label>
    <input type="nummber" name="angka1" id="nama1">
    <br>
    <select name="satu" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <label for="nama2">Angka 2</label>
    <input type="number" name="angka2" id="nama2">
    <input type="submit" name="sub" value="Hitung">
</form>


</body>
</html>

<?php 

$num1= $_POST['angka1'];
$num2= $_POST['angka2'];
$opt=$_POST['satu'];



if(isset($num1,$num2)) {
    if($opt == '+') {
        echo  "Hasilnya adalah" . $num1 += $num2 ;

    }
}


?>