<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Login</title>
</head>
<body>
<?php
    if(isset($_GET["pesan"])){
    	if($_GET["pesan"] == "logout"){
            echo "<script>alert('Anda Telah Logout');</script>";
        }else if($_GET["pesan"] == "gagal"){
            echo "Username atau Password anda salah";
        }
    }
?>
    <div class="container">
        <br>
        <form class="form" action='login.php' method='POST'>
            Username    <input class="kolom" type="text" name="username">
            Password    <input class="kolom" type="password" name="password">
            <br>
            <input class="button" type="submit" name="submit" value="Login">
        </form> 
    </div>
</body>
</html>