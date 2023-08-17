<?php

include_once '../function/koneksi.php';

$nama   = $_POST['nama'];
$jk     = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$s      = $_POST['status_pinjam'];

$query = "INSERT INTO anggota SET nama = '$nama', jeniskelamin = '$jk', alamat = '$alamat', status_pinjam = '$s'";

mysqli_query($koneksi, $query);

header('Location: ../admin.php?p=anggota');
