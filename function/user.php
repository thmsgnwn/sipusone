<?php


function register_user($nama, $pass) {
    global $koneksi;

    // Escape SQL Injection
    $nama = mysqli_real_escape_string($koneksi, $nama);
    $pass = mysqli_real_escape_string($koneksi, $pass);

    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $query = "INSERT INTO user (username, password) VALUES ('$nama', '$pass')";

    if( mysqli_query($koneksi, $query) ) {
            return true;
    }else {
        return false; 
    }
}

// menguji nama kembar
function register_cek_nama($nama) {
    global $koneksi;

    $nama = mysqli_real_escape_string($koneksi, $nama);

    $query = "SELECT * FROM user WHERE username = '$nama'";

    if( $result = mysqli_query($koneksi, $query) ) {
        if( mysqli_num_rows($result) == 0 ) return true;
        else return false;
    }
}

// for login 

function cek_data($nama, $pass) {
    
     // Escape SQL Injection
     $nama = mysqli_real_escape_string($koneksi, $nama);
     $pass = mysqli_real_escape_string($koneksi, $pass);
 

}