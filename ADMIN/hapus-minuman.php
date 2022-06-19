<?php 
session_start();
if(!isset($_SESSION["admin"])){
  header("location:../index.php");
}
include "koneksi.php";



$ambil = mysqli_query($koneksi, "SELECT * FROM tbl_minuman WHERE ID='$_GET[ID]'");
$pecah = mysqli_fetch_assoc($ambil);
$fotoproduk = $pecah['FOTO'];

if(file_exists("../foto-minuman/$fotoproduk")){
  unlink("../foto-minuman/$fotoproduk");

}

mysqli_query($koneksi, "DELETE FROM tbl_minuman WHERE ID ='$_GET[ID]'");
echo "<script>
alert('Produk Berhasil Dihapus');
document.location.href = 'produk-minuman.php';
</script>";

?>