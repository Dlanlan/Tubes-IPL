<?php
session_start();
require_once("../koneksi.php");
$username = $_POST['username'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$query = $koneksi->query($sql);
$hasil = $query->fetch_assoc();

if ($query->num_rows == 0) {
  echo "<div align='center'>username belum terdaftar! <a href='login_admin.php'>back</a></div>";
} else {
  if ($password <> $hasil['password']) {
    echo "<div align='center'>password salah! <a href='login_admin.php'>back</a></div>";
  } else {
    $_SESSION['username'] = $hasil['username'];
    header('location:admin.php');
  }
}
?>