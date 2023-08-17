<?php

include_once('core/init.php');

$id=$_GET['id'];

$update = "SELECT * FROM anggota WHERE id = '$id'";
$query = mysqli_query($koneksi, $update);
$row = mysqli_fetch_array($query);

?>

<h1>Form Edit Data Anggota</h1>
        <form method="POST" action="proses/editAnggota.php?id=<?= $id; ?>">
 
            
            <div class="mb-2">
                <label class="form-label"><b>tidak boleh diubah </b>ID Anggota</label>
                <input type="text" class="form-control" name="id" value="<?= $row['id'] ?>">
            </div>

            <div class="mb-2">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?= $row['nama'] ?>">
            </div>

            <label class="form-label">Jenis Kelamin</label> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jeniskelamin" value="Pria" checked>
                    <label class="form-check-label">Laki-laki</label>
                </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jeniskelamin" value="Wanita">
                    <label class="form-check-label">Perempuan</label>
                </div>

            <div class="mb-2">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?= $row['alamat'] ?>">
            </div>

            <div class="mb-2">
                <label class="form-label">Status Anggota</label>
                <input type="text" class="form-control" name="status_pinjam" value="<?= $row['status_pinjam'] ?>" placeholder="Tersedia/Dipinjam">
            </div>
            
            
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        