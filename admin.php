<?php
session_start();
require_once "core/init.php";

if( !isset($_SESSION['submit']) ) {
    header('Location: index.php');
    exit;
} 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SipusOne | Last Project DTS Kominfo JWD</title>
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

  </head>
  <body>
    <!-- Navbar -->
    <div class="jumbotron text-center">
      <h1><b>SISTEM INFORMASI PUSTAKA IMAM SYAFI'I</b></h1>
      <h5>Proyek Akhir - Junior Web Developer</h5>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light fix-top">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="#"><b>DTS Kominfo</b> | JWD</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="index.php?p=home"
                >Menu Utama</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-white"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Data Perpus
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="admin.php?p=buku">Data Buku</a></li>
                <li><a class="dropdown-item" href="admin.php?p=anggota">Data anggota</a></li>
                <li><a class="dropdown-item" href="admin.php?p=transaksi">Transaksi Peminjaman</a></li>

              </ul>
            </li>
            <li class="nav-item">
              <a
                class="nav-link active text-white"
                aria-current="page"
                href="index.php?p=about"
                >Tentang</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active text-white"
                aria-current="page"
                href="#contact"
                >Kontak</a
              >
            </li>
          </ul>

          <!-- Form Seacrh -->
          <form class="d-flex" role="search">
            <input
              class="search form-control me-2"
              type="search"
              placeholder="Cari disini"
              aria-label="Search"
            />
            <button class="btn btn-outline-light me-2" type="button">
              Pencarian
            </button>
            <a href="logout.php"><button class="btn btn-outline-light" type="button">
              Logout 
            </button></a>
          </form>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- layout -->
    <!-- Grid Layout Pertama -->
    <div class="row g-0 text-center">
      <div class="col-6 col-md-3 layout pe-2">
        <ul class="list-group-flush">
          <a href="admin.php?p=home" class="list-group-item btn m-0.2 rounded-pill btnlist btn-outline-light">
            Menu Utama
          </a>
          <br>
          <a href="admin.php?p=buku" class="list-group-item btn rounded-pill btnlist btn-outline-light">
            Data Buku
          </a>
          <a href="admin.php?p=anggota" class="list-group-item btn rounded-pill btnlist btn-outline-light">
            Data Anggota
          </a>
          <a href="admin.php?p=transaksi" class="list-group-item btn rounded-pill btnlist btn-outline-light">
            Data Transaksi
          </a>
          <hr>
          <br>
          <!-- <li class="list-group-item">Laporan</li> -->
          <a href="report/laporanAnggota.php" class="list-group-item btn rounded-pill btnlist btn-outline-light">
            Laporan Data Anggota
          </a>
          <a href="report/laporanBuku.php" class="list-group-item btn rounded-pill btnlist btn-outline-light">
            Laporan Data Buku
          </a>

          <li class="list-group-item btn btnlist btn-outline-light"></li>
        </ul>
      </div>


      <!-- Main -->
      <!-- Grid Layout kedua -->
      <div class="col-sm-6 col-md-8 m-auto pt-3">
        <?php
          $page =isset($_GET['p']) ? $_GET['p'] : 'home';
          if ($page == 'home') include 'pages/home.php';
          if ($page == 'about') include 'pages/about.php';
          
          // Buku List
          if ($page == 'buku') include 'pages/list_buku.php';
          if ($page == 'entri') include 'pages/formEntriBuku.php';
          if ($page == 'edit') include 'pages/formEditBuku.php';
          if ($page == 'card') include 'report/cardAnggota.php';
          
          // Buku Anggota
          if ($page == 'anggota') include 'pages/list_anggota.php';
          if ($page == 'entri_anggota') include 'pages/formEntriAnggota.php';
          if ($page == 'edit_anggota') include 'pages/formEditAnggota.php';

          
          // Buku Transaksi
          if ($page == 'transaksi') include 'list_transaksi.php';
          if ($page == 'entri_transaksi') include 'pages/formEntriTransaksi.php';
          if ($page == 'edit_transaksi') include 'pages/formEditTransaksi.php';
          
        ?>
      </div>
    <!-- end layout -->
 


    <!-- footer -->
    <footer>
      <div class="container ">
        <div class="row text-center pt-2">
          <div class="col">
            <p>
              @2023 Made with
              <i
                class="bi bi-heart-fill"
                width="20"
                height="20"
                style="color: plum"
              ></i>
              by: Thomas Gunawan
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- akhir footer -->
    

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>

    <script src="js/script.js"></script>
  </body>
</html>

