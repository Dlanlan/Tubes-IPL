<?php
include_once "../koneksi.php";
$username = $_POST['username'];
$pass = md5($_POST['password']);
$sql = "SELECT * FROM manajer WHERE username='$username' AND password='$pass'";
$login = mysqli_query($koneksi, $sql);
$ketemu = mysqli_num_rows($login);
$b = mysqli_fetch_array($login);

if ($ketemu > 0) {
    session_start();

    $_SESSION['id_manajer'] = $b['id_manajer'];
    $_SESSION['username'] = $b['username'];

    header("location: manajer.php?m=awal");
} else {
    echo '<script language="javascript">';
    echo 'alert ("Username/Password ada yang salah, atau akun anda belum Aktif")';
    echo '</script>';
    header("location: login_manajer.php");
}
?>