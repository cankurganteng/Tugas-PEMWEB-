<?php

session_start();
require 'function.php';

// cek dulu cookie 
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($db, "SELECT username FROM lg_user WHERE id = $id ");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}



if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM lg_user WHERE username = '$username' ");
    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            //set session 
            $_SESSION["login"] = true;

            // cek remember me
            if (isset($_POST['remember'])) {
                // buat cookie dan acak cookie

                setcookie('id', $row['id'], time() + 60);

                // mengacak $row dengan algoritma 'sha256'
                setcookie('key', hash('sha256', $row['username']), time() + 60);
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar volly | UNBARA</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img/ubr.png" />
</head>
<style>   legend {
                color: white;
                padding: 10px;
                background: gold;
                border-radius: 10px;
            }
            fieldset {
                max-width: 350px;
                border-radius: 15px;
                border-color: #111111;
                background: #33456835;
            }
            label {
                padding: 10px;
                border-radius: 10px;
                background: #111111;
                float: left;
                color: white;
            }
            input {
            
                border-radius: 10px;
                border-color: #27991748;
                height: 30px;
            }
           
            button{
                background: yellow;
            }

             body{
                background-image: url("D.jpeg");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100%;
                }   
            
            .link{
                background: yellow;
                color:#111111;
                border:solid;
                padding:20px 10px px 10px;
                font-size: 12px;
                position: relative;
                left: 0px;
                width: 50px;
                height: 100px;
            }
</style>


<body>

<legend>LOGIN</legend>
    <?php if (isset($error)) : ?>
        <p style="color:red;">username / password salah</p>
    <?php endif ?>
    <form action="" method="POST">
        <fieldset>
        <ul>
            <li>
                <label for="username" style="margin-right :25px;">Username :</label>
                <input type="text name" name="username" id="username">
            </li>
            <br>
            <li>
                <label for="password" style="margin-right :25px;"> Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <br>
            <li>
                <label for="remember"  style="margin-right :25px;"> Remember me</label>
                <input type="checkbox" name="remember" id="remember">
            </li>
            <br>
            <li>
                <button type="submit" name="login"> Login</button>
            </li>
            <br>
            <li>
            <a class="link" href="registrasi.php">Registrasi</a>
            </li>
        </ul>
        </fieldset>
    </form>


</body>
</html>