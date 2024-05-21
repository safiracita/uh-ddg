<?php 
//Memulai session
session_start();

//Koneksi ke database
$koneksi = new mysqli('localhost','root','','tugas'); // Ubah tugas menjadi nama database kamu yaa
if (!$koneksi) {
   echo 'Tidak bisa melakukan koneksi'; 
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$action = $_POST['action'];


if ($action === 'login') {
    $sql = "SELECT * FROM tb_pengguna WHERE `email` = '$email' && `password` = '$password'";
    $login = $koneksi->query($sql);
    if($login) {
        $_SESSION['data'] = $login->fetch_assoc();
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: login.php");
        exit();
    }
} elseif($action === 'register') {
    $sql = "INSERT INTO tb_pengguna(`username`,`email`,`password`) VALUES ('$username','$email','$password')";
    $login = $koneksi->query($sql);
    if($login) {
        header("Location: login.php");
        exit();
    } else {
        header("Location: register.php");
        exit();
    }
} elseif($action === 'logout') {
    session_destroy();
    header('Location: index.php');
    exit();
}
?>