<h1>Entri Data Buku</h1>
        <form method="POST" action="proses/entriBuku.php">

            <div class="mb-2">
                <label class="form-label">Judul Buku</label>
                <input type="text" class="form-control" name="judul">
            </div>

            <div class="mb-2">
                <label class="form-label">Kategori</label>
                <select class="form-select" name="kategori" aria-label="Default select example">
                    <option selected>-- Pilih Kategori --</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Ilmu Komputer">Ilmu Komputer</option>
                    <option value="Buku Lainnya">Buku Lainnya</option>
                </select>
            </div>

            <div class="mb-2">
                <label class="form-label">Pengarang Buku</label>
                <input type="text" class="form-control" name="pengarang">
            </div>

            <div class="mb-2">
                <label class="form-label">Penerbit Buku</label>
                <input type="text" class="form-control" name="penerbit">
            </div>

            <div class="mb-2">
                <label class="form-label">Status Buku</label>
                <input type="text" class="form-control" name="status_pinjam" placeholder="Tersedia/Dipinjam">
            </div>
            
            
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        