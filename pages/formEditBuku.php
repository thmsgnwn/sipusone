<?php

include_once('core/init.php');

$id=$_GET['id'];

$update = "SELECT * FROM buku WHERE id = '$id'";
$query = mysqli_query($koneksi, $update);
$row = mysqli_fetch_array($query);

?>



<h1>Form Edit Data Buku</h1>
        <form method="POST" action="proses/editBuku.php?id=<?= $id; ?>">
 
            
            <div class="mb-2">
                <label class="form-label">ID Buku <b>tidak boleh diubah</b></label>
                <input type="text" class="form-control" name="id" value="<?= $row['id'] ?>">
            </div>

            <div class="mb-2">
                <label class="form-label">Judul Buku</label>
                <input type="text" class="form-control" name="judul" value="<?= $row['judul'] ?>">
            </div>

            <div class="mb-2">
                <label class="form-label"><b>Ubah</b> Kategori</label>
                <select class="form-select" name="kategori" aria-label="Default select example">
                    <option selected>-- Pilih Kategori --</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Ilmu Komputer">Ilmu Komputer</option>
                    <option value="Buku Lainnya">Buku Lainnya</option>
                </select>
            </div>

            <div class="mb-2">
                <label class="form-label">Pengarang Buku</label>
                <input type="text" class="form-control" name="pengarang" value="<?= $row['pengarang'] ?>">
            </div>

            <div class="mb-2">
                <label class="form-label">Penerbit Buku</label>
                <input type="text" class="form-control" name="penerbit" value="<?= $row['penerbit'] ?>">
            </div>

            <div class="mb-2">
                <label class="form-label">Status Buku</label>
                <input type="text" class="form-control" name="status_pinjam" value="<?= $row['status_pinjam'] ?>" placeholder="Tersedia/Dipinjam">
            </div>
            
            
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        