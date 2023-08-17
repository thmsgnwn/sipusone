
<h1 class="mt-2 mb-3 mx-2"> Data Transaksi Pustaka</h1>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <a href="admin.php?p=entri_transaksi"><input class="submit btn btn-primary mb-3 p-1" name="submit" value="Tambah Data Transaksi"></a>
                <a href="report/laporanTransaksi.php"><input class="submit btn btn-secondary mb-3 p-1 " name="submit" value="Cetak Data Transaksi"></a>
            </div>
            <table border="1px" class="table table-bordered table-striped ">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Anggota</th>
                    <th>Nama Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Durasi</th>
                    <th>Action</th>
                </tr>

                <?php

                include_once 'core/init.php';
                
                $query = "SELECT * FROM transaksi";
                $ambil = mysqli_query($koneksi, $query);
                $no=1;
                while($row=mysqli_fetch_array($ambil)) { ?>
                    
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $row['kode_t'] ?></td>
                      <td><?= $row['nama_a'] ?></td>
                      <td><?= $row['nama_b'] ?></td>
                      <td><?= $row['tglpinjam'] ?></td>
                      <td><?= $row['durasi'] ?></td>
                    <td>
                         <a href="admin.php?p=edit_transaksi&id=<?= $row['id'] ?>" class='btn btn-warning badge'>Edit</a> 
                         <a href="proses/hapusTransaksi.php?id=<?= $row['id']?>" onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger badge">Delete</a>
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