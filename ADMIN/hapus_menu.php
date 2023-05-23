<?php 
// session_start();
// if(!isset($_SESSION["admin"])){
//   header("location:../index.php");
// }

include "../koneksi.php";
$id_menu = $_GET['id_menu'];

// hapus
$ambil = mysqli_query($koneksi, "SELECT * FROM menu WHERE id_menu ='$id_menu'");
$pecah = mysqli_fetch_assoc($ambil);
$id=$pecah['menu_id_toko'];
// $kategori_toko = $pecah['kategori_toko'];
// $fotoproduk = $pecah['foto_toko'];

// if(file_exists("../file/$fotoproduk")){
//   unlink("../file/$fotoproduk");

// }

mysqli_query($koneksi, "DELETE FROM menu WHERE id_menu ='$id_menu'");
echo "<script>
alert('Toko Berhasil Dihapus');
document.location.href = 'detail_toko.php?id_toko=$id';
</script>";

?>