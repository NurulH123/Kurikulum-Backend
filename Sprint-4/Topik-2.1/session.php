<?php
session_start();
if(isset($_SESSION['nama'])) {
    header('location:T-suhu.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
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
if(isset($_POST['submit']) && $_POST['nama'] !=null && $_POST['password'] !=null) {
    $nama =$_POST['nama'];
    $password =$_POST['password'];

    $_SESSION['nama']=$nama ;
    $_SESSION['password']=$password;

    header('location:T-suhu.php');
}

?>