<?php

include_once '../function/koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM anggota WHERE id ='$id'";
$qcard = mysqli_query($koneksi, $query);

$rowcard = mysqli_fetch_array($qcard);

?>

<div id="label-page">
    <h5>___________________________________________________</h5>
    <h3><b>Kartu Anggota</b></h3>
</div>


<div id="content">
    <table id="table-input">
        <tr>
            <td class="label-formulir"><input type="hidden">----------------</td>
            <td class="isian-formulir"><img src="" alt=""></td>
        </tr>
        <tr>
            <td class="label-formulir">ID Anggota</td>
            <td class="isian-formulir"><b> : <?= $rowcard['id']; ?></b></td>
        </tr>
        <tr>
            <td class="label-formulir">Nama</td>
            <td class="isian-formulir"><b> : <?= $rowcard['nama']; ?></b></td>
        </tr>
        <tr>
            <td class="label-formulir">Jenis Kelamin</td>
            <td class="isian-formulir"><b> : <?= $rowcard['jeniskelamin']; ?></b></td>
        </tr>
        <tr>
            <td class="label-formulir">Alamat</td>
            <td class="isian-formulir"><b> : <?= $rowcard['alamat']; ?></b></td>
        </tr>
        <tr>
            <td class="label-formulir">Status Peminjaman</td>
            <td class="isian-formulir"><b> : <?= $rowcard['status_pinjam']; ?></b></td>
        </tr>
    </table>
    <h5>___________________________________________________</h5>
</div>

<script>
    window.print();
</script>