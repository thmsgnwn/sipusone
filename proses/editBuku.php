<?php

include_once '../function/koneksi.php';

$id    = $_POST['id'];
$judul = $_POST['judul'];
$kategori  = $_POST['kategori'];
$pengarang = $_POST['pengarang'];
$penerbit  = $_POST['penerbit'];
$statusbuku    = $_POST['status_pinjam'];

$query = "UPDATE buku SET judul = '$judul', kategori = '$kategori', pengarang = '$pengarang', penerbit = '$penerbit', status_pinjam = '$statusbuku' WHERE id='$id'";

mysqli_query($koneksi, $query);

header('Location: ../admin.php?p=buku');