<?php
include_once "../koneksi.php";
$username = $_POST['username'];
$pass = md5($_POST['password']);
$sql = "SELECT * FROM karyawan WHERE username='$username' AND password='$pass'";
$login = mysqli_query($koneksi, $sql);
$ketemu = mysqli_num_rows($login);
$b = mysqli_fetch_array($login);

if ($ketemu > 0) {
    session_start();

    $_SESSION['id_karyawan'] = $b['id_karyawan'];
    $_SESSION['username'] = $b['username'];
    $_SESSION['nama'] = $b['nama'];
    $_SESSION['tmp_tgl_lahir'] = $b['tmp_tgl_lahir'];
    $_SESSION['jenkel'] = $b['jenkel'];
    $_SESSION['agama'] = $b['agama'];
    $_SESSION['alamat'] = $b['alamat'];
    $_SESSION['no_tel'] = $b['no_tel'];

    header("location: karyawan.php?m=awal");
} else {
    echo '<script language="javascript">';
    echo 'alert ("Username/Password ada yang salah, atau akun anda belum Aktif")';
    echo '</script>';
    header("location: login_karyawan.php");
}
?>