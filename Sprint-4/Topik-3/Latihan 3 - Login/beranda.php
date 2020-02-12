<?php
session_start();

if($_SESSION['nama'] == null) {
    header('Location:login.php');
    exit;
}

if(isset($_POST['logout'])) {
    $_SESSION['nama']=null;
    $_SESSION['password']=null;
    session_destroy();
    session_unset();

    header('Location:login.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        .satu{
            width:100%;
            height:100px;
            background-color:#0088CC;
        }
        .menu{
            width:40px;
            height:40px;
        }
        .kotak{
            width:300px;
            height:500px;
            border:1px solid #ddd;
            background-color:#eaeaea;
            position:relative;
            top:6%;
            border-radius:8px;
            box-shadow:0px 0px 6px 6px lightblue; 
        }
        .sampul{
            width:100%;
            height:560px;
            background-image:url(img/morocco.png);
            text-align: center;
            padding-left:40%;
        }
        .foto{
            width:85%;
            border-radius:30px;
            height:47%;
            background-color:lightblue;
            margin:7% auto;
        }
        img{
            width:87%;
            height:87%;
            margin:6% auto;
        }
        h4{
            border-radius:50%;
            font-size:40px;
            width:20%;
        }
        hr{
            margin-top:4%;
        }
        button{
            margin-top:10px;
            margin-left:60%;
            width:23%;
            height:22%;
            border-radius:3px;
            background-color:#bbb;
        }
        form:hover button{
            margin-top:10px;
            margin-left:60%;
            width:23%;
            height:22%;
            border-radius:3px;
            /* font-weight:bold; */
            background-color:#0088CC;
        }
    </style>
</head>
<body>
<div class="satu">
        
</div>
<div class="sampul">
        <div class="kotak">
            <div class="foto">
                <img src="img/man.png" alt="">
            </div>
            <h2 style="color:#0088CC;">Selamat Datang <?=$_SESSION['nama'];?></h2>
            <hr>
            <hr>
            <hr>
            <table style="text-align:left;font-size:13px;padding-left:6px;font-weight:bold;">
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: Nurul Hidayat</td>
                </tr>

                <tr>
                    <td>Tempat Tanggal Lahir</td>
                    <td>: Jogja, 10 Desember 2019</td>
                </tr>

                <tr>
                    <td>Jurusan</td>
                    <td>: Sistem Informasi</td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td>: Kalangan RT 04 RW 06 Kretek Bantul Yogyakarta</td>
                </tr>
            </table>
            <form action="" method="post">
                <button type="submit" name="logout">Logout</button>
            </form>
            <!-- <a href="login.php">Kembali</a> -->
        </div>
        </div>   
</body>
</html>