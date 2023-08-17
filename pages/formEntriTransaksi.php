<h1>Entri Data Transaski Pustaka</h1>
        <form method="POST" action="proses/entriTransaksi.php">
            <div class="mb-2">
                <label class="form-label">Kode Transaksi</label>
                <input type="text" class="form-control" name="kode_t">
            </div>

            <div class="mb-2">
                <label class="form-label">Nama Anggota</label>
                <input type="text" class="form-control" name="nama_a">
            </div>
            
            <div class="mb-2">
                <label class="form-label">Nama Buku</label>
                <input type="text" class="form-control" name="nama_b">
            </div>

            <div class="mb-2">
                <label class="form-label">Tanggal Peminjaman</label>
                <input type="text" class="form-control" name="tglpinjam" placeholder="tahun-bulan-tanggal">
            </div>
            
            <div class="mb-2">
                <label class="form-label">Durasi</label>
                <input type="text" class="form-control" name="durasi">
            </div>


            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

            <br><br>
        </form>
        