<?php 

setcookie('login',true);
if(isset($_POST['logout'])) {
    setcookie('login',true,time() -20);
    setcookie('nama',$nama,time() -20);
    setcookie('password',$password,time() -20);
    header('Location:Cookie.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
<h3>Selamat Datang, <?= $_COOKIE['nama'];?></h3>

<form action="" method="post">
    <button type="submit" name="logout">Logout</button>
</form>
</body>
</html>
