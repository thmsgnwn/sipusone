<?php

include_once '../function/koneksi.php';

$id    = $_GET['id'];


$query = "DELETE FROM anggota WHERE id = '$id'";

mysqli_query($koneksi, $query);

header('Location: ../admin.php?p=anggota');


