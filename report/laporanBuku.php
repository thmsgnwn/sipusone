<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="view/style.css">

    <body>
    <div class="mb-5 mx-2 text-center pt-3">
        <h1><b>Laporan Data Buku</b></h1>
        <h3><b>Pustaka Imam Syafi'i</b></h3>
    </div>

<div class="container">
    <div class="">
        <div class="">

            <table border="1px" class="table table-bordered table-striped ">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Status</th>
                </tr>

                <?php

                include_once '../function/koneksi.php';
                
                $ambil = mysqli_query($koneksi, "SELECT * FROM buku");
                $no=1;
                while($row=mysqli_fetch_array($ambil)) { ?>
                    
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $row['judul'] ?></td>
                      <td><?= $row['kategori'] ?></td>
                      <td><?= $row['pengarang'] ?></td>
                      <td><?= $row['penerbit'] ?></td>
                      <td><?= $row['status_pinjam'] ?></td>
                    </tr>

                
            <?php
                $no++;

            }
            
            ?>

            </table>
            <script>
                window.print();
            </script>
        </div>
        
    </div>
    <!-- <div>
      <a href="../admin.php?p=buku"><p>&laquo; Kembali Ke Halaman Buku</p></a>
  </div> -->
    
</div>
    </body>


<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>

    <script src="js/script.js"></script>
  </body>
</html>
