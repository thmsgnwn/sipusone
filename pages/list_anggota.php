
<h1 class="mt-2 mb-3 mx-2"> Data Anggota Pustaka</h1>

<div class="container">
    <div class="row">
        <div class="col">

        <a href="admin.php?p=entri_anggota"><input class="submit btn btn-primary mt-1 mb-3 p-1" name="submit" value="Tambah Data Anggota"></a>
        <a href="report/laporanAnggota.php"><input class="submit btn btn-secondary mt-1 mb-3 p-1" name="submit" value="Cetak Data"></a>

            <table border="1px" class="table table-bordered table-striped ">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Status Pinjam</th>
                    <th>Action</th>
                </tr>

                <?php

                include_once 'core/init.php';
                
                $query = "SELECT * FROM anggota";
                $ambil = mysqli_query($koneksi, $query);
                $no=1;
                while($row=mysqli_fetch_array($ambil)) { ?>
                    
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $row['nama'] ?></td>
                      <td><?= $row['jeniskelamin'] ?></td>
                      <td><?= $row['alamat'] ?></td>
                      <td><?= $row['status_pinjam'] ?></td>
                    <td>
                         <a href="report/cardAnggota.php?id=<?= $row['id'] ?>" class='btn btn-success badge'>cetak kartu</a> 
                         <a href="admin.php?p=edit_anggota&id=<?= $row['id'] ?>" class='btn btn-warning badge'>Edit</a> 
                         <a href="proses/hapusAnggota.php?id=<?= $row['id']?>" onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger badge">Hapus</a>
                      </td>
                    </tr>

                
            <?php
                $no++;

            }
            
            ?>

            </table>
        </div>
        
    </div>
</div>