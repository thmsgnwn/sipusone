<h1>Entri Data Masukan Data Anggota</h1>
        <form method="POST" action="./proses/entriAnggota.php">


            <div class="mb-2">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama">
            </div>

            
                <label class="form-label">Jenis Kelamin</label> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jeniskelamin" value="Pria" checked>
                    <label class="form-check-label">Pria</label>
                </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jeniskelamin" value="Wanita">
                    <label class="form-check-label">Wanita</label>
                </div>
            

            <div class="mb-2">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="3"></textarea>
            </div>

            <div class="mb-2">
                <label class="form-label">Status Buku</label>
                <input type="text" class="form-control" name="status_pinjam" placeholder="Sedang Meminjam/Tidak Meminjam">
            </div>
            
            
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        