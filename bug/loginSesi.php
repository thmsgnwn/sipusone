<?php

session_start();
$_SESSION['sesi'] = NULL;
include "function/koneksi.php";
if( isset($_POST['submit']) ) {
  $user = isset( $_POST['username'] ) ? $_POST['username'] : "";
  $pass = isset( $_POST['password'] ) ? $_POST['password'] : "";
  $pass = md5($pass);
  $hash = "SELECT * FROM admin WHERE username = '$user' AND password = '$pass'";
  $query = mysqli_query($koneksi, $hash);
  $sesi = mysqli_num_rows($query);
  if ( $sesi == 1 ) {
    $data_admin = mysqli_fetch_array($query);
    $_SESSION['id'] = $data_admin['id'];
    $_SESSION['sesi'] = $data_admin['nm_admin'];
    echo "<script>alert('Anda Berhasil Login');</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php?p=$sesi'>";
  } else {
    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
    echo "<script>alaert('Anda Gagal Login');</script>";
  }
} else {
  include "login.php";
}

?>
