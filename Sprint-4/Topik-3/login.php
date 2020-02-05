<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat Login</title>
    <style>
        .kotak{
            width:600px;
            height:600px;
            margin:30px auto;
            border:3px solid royalblue;
            padding:10px;
            
        }
        input{
            width:400px;
            height:30px;
            margin:auto;
        }
    </style>
</head>
<body>
    <div class="kotak">
        <table>
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
                    <td><button type="submit" name="masuk">Masuk</button></td>
                </tr>
            </form>
        </table>
    </div>
</body>
</html>