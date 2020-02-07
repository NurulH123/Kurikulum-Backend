<?php
if($_COOKIE['login'] == true) {
    header('Location:halaman2.php');
    exit;
}

if(isset($_POST['submit'])) {
    
    $nama =$_POST['nama'];
    $password =$_POST['password'];
    setcookie('nama',$nama,time() + 20);
    setcookie('password',$password,time() + 20);

    header('Location:halaman2.php');
    exit;
}

?>
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
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="submit" value="Kirim">
    </form>
</body>
</html>

