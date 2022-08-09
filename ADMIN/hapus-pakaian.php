<?php 
session_start();
if(!isset($_SESSION["admin"])){
  header("location:../index.php");
}
include "koneksi.php";


// hapus
$ambil = mysqli_query($koneksi, "SELECT * FROM tbl_pakaian WHERE ID='$_GET[ID]'");
$pecah = mysqli_fetch_assoc($ambil);
$fotoproduk = $pecah['FOTO'];

if(file_exists("../foto-pakaian/$fotoproduk")){
  unlink("../foto-pakaian/$fotoproduk");

}

mysqli_query($koneksi, "DELETE FROM tbl_pakaian WHERE ID ='$_GET[ID]'");
echo "<script>
alert('Produk Berhasil Dihapus');
document.location.href = 'produk-pakaian.php';
</script>";

?>