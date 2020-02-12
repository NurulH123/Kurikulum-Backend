<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat Login</title>
    <style>
        body{
            background-image:url(img/city1.jpeg);
            background-repeat:no-repeat;
            background-size:cover;
        }
        .satu{
            margin-top:-15px;
            padding-left:30px;
            justify-content:center;
            place-items:center;
        }
        .kotak{
            width:45%;
            height:540px;
            margin:80px auto;
            border:1px solid royalblue;
            padding:10px;
            border-radius:10px;
            opacity:.7;
            box-shadow:0 0 7px 5px royalblue;
            text-align:center;
            background-color:#08192B;
            display:grid;
        }
        input{
            width:390px;
            height:20px;
            margin:auto;
            border-radius:5px;
            padding:10px;
            font-size:20px;
        }
        button{
            background-color:#0088CC;
            width:15%;
            height:30px;
            margin-top:30px;
            border-radius:5px;
            font-weight:bold;
            margin-left:58%;
        }
        label{
            color:#fff;
            font-weight:bold;
        }
        h3{
            margin-top:-10px;
            color:#ddd;
            font-size:30px;
        }
        .dua{
            margin-top:30px;
            margin-bottom:-45px;
        }
        img{
            width:15%;
            height:41%;
            border-radius:50%;
            margin:20px auto;
        }
        p{
            color:red;
            top:-94px;
            font-size:20px;
            font-style: italic;
            position:relative;
        }
        a{
            color:royalblue;
            margin-left:5%;
            margin-top:1%;
            font-weight:bold;
            display:inline-block;
            text-align:center;
            width:10%;
        }
        .link{
            display:inline-block;
            text-align:right;
            padding-top:2%;
            padding-right:4%;
        }
        .link b:hover a{
            color:#08192B;
            margin-left:5%;
            margin-top:1%;
            font-weight:bold;
            display:inline-block;
            text-align:center;
            background-color:skyblue;
            width:10%;
        }
        em{
            color:royalblue;
            margin-left:-30%;
            font-size:18px;
        }
    </style>
</head>
<body>
    <div class="kotak">
        <div class="link">
           <b><a style="text-decoration:none;" href="registrasi.php">Daftar</a></b>     
           <b><a style="text-decoration:none;" href="registrasi.php">Hapus</a></b> 
        </div>
        
        <div class="dua">
            <img src="img/user.png" alt="">
            <h3>Login</h3>
        </div>
        <table>
            <div class="satu">
                <form action="" method="post">
                    <tr>
                        <td><label for="nama">Masukan Nama</label></td>
                    </tr>

                    <tr>
                        <td><input type="text" name="nama" id="nama" placeholder="Masukan Nama"></td>
                    </tr>

                    <tr>
                        <td><label for="password">Password</label></td>
                    </tr>

                    <tr>
                        <td><input type="password" name="password" id="password" placeholder="password"></td>
                    </tr>

                    <tr>
                        <td><input style="margin-left:-72%;margin-top:2%;" type="checkbox" name="centang"><em>Sudah punya akun?</em></td>
                    </tr>

                    <tr>
                        <td><button type="submit" name="login"> Masuk</button></td>
                    </tr>
                </form>
            </div>
        </table>
<?php
session_start();
require 'dbUser.php';

if(isset($_SESSION['nama'])) {
    header('Location:beranda.php');
    exit;
}

if(isset($_POST['login'])) {
$nama = $_POST['nama'];
$password =$_POST['password'];

$lihat=$data->masuk($nama);

if($lihat !== null) {
    if($password === $lihat['password']) {
            $_SESSION['nama'] = $_POST['nama'];
            $_SESSION['pasword'] =$_POST['password'];
            header('Location:beranda.php');
            exit;
        }else{
            echo "<p>Nama / password yang anda masukkan salah!!</p>";
        }
    }
}

?>
    </div>
</body>
</html>