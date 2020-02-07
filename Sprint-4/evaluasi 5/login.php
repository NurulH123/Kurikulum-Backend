<?php
session_start()


    
    


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
    <form action="beranda.php" method="post">
        <table>
            <tr>
                <td>Masukan Nama</td>
                <td>:   <input type="text" name="nama"></td>
            </tr>

            <tr>
                <td>Password</td>
                <td>:   <input type="password" name="password"></td>
            </tr>

            <tr>
                <td><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>