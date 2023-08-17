<?php

include_once '../function/koneksi.php';

$id    = $_POST['id'];
$kode   = $_POST['kode_t'];
$anggota   = $_POST['nama_a'];
$buku   = $_POST['nama_b'];
$tgl = $_POST['tglpinjam'];
$durasi      = $_POST['durasi'];

$query = "UPDATE transaksi SET kode_t = '$kode', nama_a = '$anggota', nama_b = '$buku', tglpinjam = '$tgl', durasi = '$durasi' WHERE id='$id'";
mysqli_query($koneksi, $query);
header('Location: ../admin.php?p=transaksi');
