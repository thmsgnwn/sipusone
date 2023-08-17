<?php

require_once "core/init.php";


// valdation register
if( isset($_POST['submit']) ) {
    $nama = $_POST['username'];
    $pass = $_POST['password'];

    if(!empty(trim($nama)) && !empty(trim($pass))) {

       cek_data(); 

    } else {
        echo 'Nama atau Pass tidak boleh kosong';
    }
}


include_once "view/header.php";

?>

<form action="login.php" method="post">
        <label for="">Nama</label><br>
        <input type="text" name="username"><br><br>

        <label for="">Password</label><br>
        <input type="password" name="password"><br><br>

        <input type="submit" name="submit" value="Login" id="">
    </form>

<?php include_once "view/footer.php"; ?>