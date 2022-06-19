<?php 
require "ADMIN/koneksi.php";

function regitrasi($data){
  global $koneksi;
  
  $username =  strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($koneksi, $data["password"]);
  $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

  $result = mysqli_query($koneksi, "SELECT username FROM tbl_user WHERE username = '$username'");

  if(mysqli_fetch_assoc($result)){

    echo "<script> 
    alert('username sudah terdaftar');
      </script>";
    return false;
  }
  // cara konfirmasi password

  if($password !== $password2){

    echo "<script> alert('Konfirmasi belum sesuai');
    </script>";
    return false;
  }
  
  
  // konek ke database

  mysqli_query($koneksi, "INSERT INTO tbl_user VALUES('', '$username', '$password')");
  
  return mysqli_affected_rows($koneksi);

}


if( isset($_POST["register"]) ){

  if( regitrasi($_POST) > 0 ){
    echo "<script> alert('berhasil');
    </script>";
    header("location:index.php");
  }else{
    echo mysqli_error($koneksi);
  }
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>REGISTRASI</title>
  <style>
  label {
    display: block;
  }
  </style>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<body >
<div class="p-3 mb-2 bg-light text-dark">
  <br><br><br>
  <center>

    <div class="container">
      <div class="card p-3" style="max-width: 350px; border-radius:20px;">


        <div class="card-body" style="background-color: #06FF00; border-radius:15px;">


          <h1 class="card-title">YOU SHOP</h1><br>
          <div >
            <img src ="../YOU SHOP/file/register.jpg" width = "100px"  class="rounded-circle">
          </div>
          <h4 class="card-title">Registrasi</h4><br>
          <?php if(isset($error)) : ?>
          <p class="error">Username / Password Salah</p>
          <?php endif; ?>
          <!-- card text -->
          <div class="card-text">

            <form action="" method="post">

            <label for="username">Username </label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                <input type="text" aria-describedby="basic-addon1" class="form-control" name="username"
                  placeholder="username" autocomplete="off" aria-label="username" required>
              </div>

              <label for="password">Password</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock"></i></span>
                <input type="password" name="password" aria-describedby="basic-addon2" class="form-control" placeholder="password" autocomplete="off"
                  aria-label="password" required>
              </div>

              <label for="password">Password Confirm</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-user-lock"></i></span>
                <input type="password" name="password2" aria-describedby="basic-addon3" class="form-control" placeholder="password confirm" autocomplete="off"
                  aria-label="password" required>
              </div>


              <button class="btn btn-warning" type="submit" name="register">
                Register
              </button>
              <a href="index.php" class="btn btn-primary">Login</a>
            </form>
          </div>
        </div>
      </div>
  </center>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</div>
</body>

</html>