<?php 
// session_start();
// if(!isset($_SESSION["admin"])){
//   header("location:../index.php");
// }
include "../koneksi.php";


// hapus
$ambil = mysqli_query($koneksi, "SELECT * FROM toko WHERE id_toko ='$_GET[id_toko]'");
$pecah = mysqli_fetch_assoc($ambil);
$kategori_toko = $pecah['kategori_toko'];
$fotoproduk = $pecah['foto_toko'];

if(file_exists("../file/$fotoproduk")){
  unlink("../file/$fotoproduk");

}

mysqli_query($koneksi, "DELETE FROM toko WHERE id_toko ='$_GET[id_toko]'");
echo "<script>
alert('Toko Berhasil Dihapus');
document.location.href = 'produk.php?id_kategori=$kategori_toko';
</script>";

?>