<?php 
    require 'PDO.php';
    

        $id=$_GET['id'];
        $tambah->delete($id);
        header('Location:dataBarang.php');
        exit();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Logout</title>
</head>
<body>

<a href="dataBarang.php">Kembali</a>

</body>
</html>