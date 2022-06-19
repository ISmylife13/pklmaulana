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


?>