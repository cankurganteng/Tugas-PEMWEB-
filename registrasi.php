
<?php

require 'function.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo " <script>
            alert('user baru berhasil ditambahkan');
        </script> ";
    } else {
        echo mysqli_error($db);
    }
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

    <legend> Silahkan lakukan Registrasi</legend>

    <form action="" method="POST">
        <fieldset>
        <ul>
            <li>
                <label for="username" style="margin-right :30px;">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <br>
            <li>
                <label for="password" style="margin-right :30px;"> Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <br>
            <li>
                <label for="password2" style="margin-right: 25px;"  >konfirmasi :</label>
                <input type="password" name="password2" id="password2">
            </li>
            <br>
            <li>
                <button type="submit" name="register"> Register</button>
            </li>
            <br>
            <li>
            <a class="link" href="login.php">Login</a>
            </li>
        </ul>
        </fieldset>
    </form>

</body>

</html>


