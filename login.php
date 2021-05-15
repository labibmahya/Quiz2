<?php
session_start();


include 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];
 
$sql = mysqli_query($conn,"SELECT * FROM pengguna WHERE username='$username' and password='$password'");
$result = mysqli_num_rows($sql);
 
if($result > 0){
	$_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    setcookie($_SESSION['username'], $_SESSION['password'], time() + (86400 * 30), "/");

	echo "<script>alert('Anda berhasil Login'); document.location.href = 'lanjutLogin.php';</script>";
}else{
	header("location:index.php?pesan=gagal");
	// echo "<script>alert('Username atau Password Salah!'); document.location.href = 'index.php';</script>";
}

?>