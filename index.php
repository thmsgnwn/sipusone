<?php
session_start();
require_once "core/init.php";

// 
if( isset($_POST['submit']) ) {
  $user = $_POST['username'];
  $pass = $_POST['password'];

  // $_SESSION['submit'] = $_POST['submit'];

  $query = "SELECT * FROM user WHERE username = '$user'";
  $ambil = mysqli_query($koneksi, $query);

  if( mysqli_num_rows($ambil) === 1 ) {
    $data = mysqli_fetch_assoc($ambil);
    
    if (password_verify($pass, $data['password'])) {
      $_SESSION["submit"] = true;
      // $_SESSION['username'] = $data['username'];
      header('Location: admin.php');
      exit();
    } else {
      echo "<script>
      alert('Username dan Password salah');
      window.location = 'index.php';
      </script>";
    }
  } else {
    echo "<script>
    alert('Username dan Password salah');
    window.location = 'index.php';
    </script>";
  }
    
}



include_once "view/header.php";

?>


<form action="index.php" method="POST">

  <div class="oneform">
    <div class="form">
      <h1 class="title">Log In - SipusOne</h1>

        <div class="form__div">
          <input type="text" class="inp" name="username"/>
          <label for=""  class="lbl">Username</label>
        </div>

        <div class="form__div">
          <input type="password" class="inp" name="password" />
          <label for="" class="lbl">Password</label>
        </div>

        <input type="submit" class="form__button" name="submit" value="Log In" />

        <!-- <p>&copy; Thomas Gunawan SipusOne Project 2023 </p> -->

    </div>
  </div>

</form>

<!-- <form action="index.php" method="post">
        <label for="">Nama</label><br>
        <input type="text" name="username"><br><br>

        <label for="">Password</label><br>
        <input type="password" name="password"><br><br>

        <input type="submit" name="submit" value="Login" id="">
    </form> -->

<?php include_once "view/footer.php"; ?> 