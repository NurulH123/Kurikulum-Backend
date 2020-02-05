<?php 
session_start();

if(isset($_POST['logout'])) {
    $_SESSION['nama'] = null;
    session_unset();
    session_destroy();
    header('Location:session.php');
    exit;
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
<form action="" method="post">
    <h2>Hello <?= $_SESSION['nama'];?></h2>
    <br>
    
    <button tytpe="submit" name="logout">Logout</button>
</form>
    
    
</body>
</html>