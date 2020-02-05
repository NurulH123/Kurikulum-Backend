<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas Menggunakan Cookie</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nama" placeholder="Masukan Nama">
        <input type="text" name="password" placeholder="password">
        <input type="submit" name="submit" value="Kirim">
        <br>
        <input type="submit" name="logout" value="Loguot">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])) {
    $nama =$_POST['nama'];
    $password =$_POST['password'];


    setcookie('nama',$nama,time() + 3600, "/");
    setcookie('password',$password,time() + 3600, "/");
    echo $_COOKIE['nama'] . "\n";
}

if(isset($_POST['logout'])) {
    setcookie('nama',$nama,'',time() - 3600, "/");
    setcookie('password','',$password,time() - 3600, "/");
    echo "cookie is delete!!";
}
?>