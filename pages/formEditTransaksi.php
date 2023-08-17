<?php

include_once('core/init.php');

$id=$_GET['id'];

$update = "SELECT * FROM transaksi WHERE id = '$id'";
$query = mysqli_query($koneksi, $update);
$row = mysqli_fetch_array($query);

?>

<h1>Form Edit Data Anggota</h1>
        <form method="POST" action="proses/editTransaksi.php?id=<?= $id; ?>">
        
            <div class="mb-2">
                <label class="form-label"><b>tidak boleh diubah </b>ID Anggota</label>
                <input type="text" class="form-control" name="id" value="<?= $row['id'] ?>">
            </div>

            <div class="mb-2">
                <label class="form-label">Kode Transaksi</label>
                <input type="text" class="form-control" name="kode_t" value="<?= $row['kode_t'] ?>">
            </div>

            <div class="mb-2">
                <label class="form-label">Nama Anggota</label>
                <input type="text" class="form-control" name="nama_a" value="<?= $row['nama_a'] ?>">
            </div>

            <div class="mb-2">
                <label class="form-label">Nama Buku</label>
                <input type="text" class="form-control" name="nama_b" value="<?= $row['nama_b'] ?>">
            </div>

            <div class="mb-2">
                <label class="form-label">Tanggal Peminjaman</label>
                <input type="text" class="form-control" name="tglpinjam" value="<?= $row['tglpinjam'] ?>">
            </div>


            <div class="mb-2">
                <label class="form-label">Durasi Peminjaman</label>
                <input type="text" class="form-control" name="durasi" value="<?= $row['durasi'] ?>" placeholder="Tersedia/Dipinjam">
            </div>
            
            
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        