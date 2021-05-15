<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start() ?>
    <p>Selamat datang <?php echo $_SESSION['username']; ?>, anda telah login</p>
    <br>
    <a href="logout.php"><button>LOGOUT</button></a>
</body>
</html>