<h1 class="mt-2 mb-3 mx-2"> Data Buku Pustaka</h1>

<div class="container">
    <div class="row">
        <div class="col">

        <a href="admin.php?p=entri"><input class="submit btn btn-primary mb-3 p-1" name="submit" value="Tambah Data Buku"></a>
        <a href="report/laporanBuku.php"><input class="submit btn btn-secondary mb-3 p-1" name="submit" value="Cetak Data"></a>

            <table border="1px" class="table table-bordered table-striped ">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                <?php

                include_once 'core/init.php';
                
                $query = "SELECT * FROM buku";
                $ambil = mysqli_query($koneksi, $query);
                $no=1;
                while($row=mysqli_fetch_array($ambil)) { ?>
                    
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $row['judul'] ?></td>
                      <td><?= $row['kategori'] ?></td>
                      <td><?= $row['pengarang'] ?></td>
                      <td><?= $row['penerbit'] ?></td>
                      <td><?= $row['status_pinjam'] ?></td>
                    <td>
                         <a href="admin.php?p=edit&id=<?= $row['id'] ?>" class='btn btn-warning badge'>Edit</a> 
                         <a href="proses/hapusBuku.php?id=<?= $row['id']?>" onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger badge">Hapus</a>
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