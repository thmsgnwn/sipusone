<?php

include_once '../function/koneksi.php';

$id    = $_POST['id'];
$n = $_POST['nama'];
$j = $_POST['jeniskelamin'];
$a  = $_POST['alamat'];
$s    = $_POST['status_pinjam'];

$query = "UPDATE anggota SET nama = '$n', jeniskelamin = '$j', alamat = '$a', status_pinjam = '$s' WHERE id ='$id'";

mysqli_query($koneksi, $query);

header('Location: ../admin.php?p=anggota');