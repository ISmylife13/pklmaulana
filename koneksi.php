<?php
// koneksi ke xampp

$host = "localhost";
$user = "root";
$password = "";
$db = "e-commerce";

$koneksi = mysqli_connect($host, $user, $password, $db);


// function query

function query($query) {
  global $koneksi;
  $result = mysqli_query($koneksi, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result))
  {
    $rows[] = $row;
  }
  return $rows;  


}



if ($koneksi) {
  
  //cek koneksi
    
}else{
  echo "tidak konek";
  
}



?>