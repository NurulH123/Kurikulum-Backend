<?php
session_start();
if(isset($_SESSION['nama'])) {
    header('Location:halaman2.php');
    exit;
}

if(isset($_POST['login'])) {
    if($_POST['nama'] == null || $_POST['password'] == null) {
        echo "Nama :".$_POST['nama'];
        header('location:session.php');
        exit;
    }else{
        $_SESSION['nama'] = $_POST['nama'];
        $_SESSION['login']=true;
        header('Location:halaman2.php');
        
        exit;
    } 
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <label for="nama">Masukan Nama :</label>
        <input type="text" name="nama" id="nama">
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>