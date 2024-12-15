<?php
include ('koneksi.php');

if( isset($_POST["login"]) ){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'" )or die(myqli_connect_error);
    

    if(mysqli_num_rows($result)){
            header("Location: berandaAdmin.php");
            exit;
        }else{
            echo '<script>
            alert("Username Atau Password Salah !!")
            </script>';
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
    <link rel="stylesheet" href="css/login.css">
    <title>Form Login</title>
</head>
<body>
    <form action="" method="post">
    
      <div class="login">
      <h1>ADMIN</h1>
            <div class="input">
                <label for="username">Username :</label>
                <input type="text" name="username" id="username" placeholder="Silahkan Masukan Username Anda">
            
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" placeholder="Silahkan Masukan Password Anda">
            
                <button type="submit" name="login" class="btn">Login</button><br><br><br><br>
            </div>
    </div>
    </form>
</body>
</html>