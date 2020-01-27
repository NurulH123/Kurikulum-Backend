<?php

function salam($waktu,$nama) {
    echo "Selamat $waktu, $nama!";
}

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
    <h1><?= salam('siang','Nurul') ?></h1>
</body>
</html>