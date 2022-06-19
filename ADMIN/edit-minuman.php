<?php 
session_start();
if(!isset($_SESSION["admin"])){
  header("location:../index.php");
}
include "header.php";
include "koneksi.php";
// edit 
$id = $_GET['ID'];
$ambil = mysqli_query($koneksi, "SELECT * FROM tbl_minuman WHERE ID = $id");
$pecah = mysqli_fetch_assoc($ambil);

if(isset($_POST['edit'])){
  $NAMA = $_POST['NAMA'];
  $DESKRIPSI = $_POST['DESKRIPSI'];
  $ALAMAT = $_POST['ALAMAT'];
  $CONTACT = $_POST['CONTACT'];

  $namafoto = $_FILES['foto']['name'];
  $lokasifoto = $_FILES['foto']['tmp_name'];

  if(!empty($lokasifoto)){
    move_uploaded_file($lokasifoto, "../foto-minuman/$namafoto");

    mysqli_query($koneksi, "UPDATE tbl_minuman SET NAMA ='$NAMA', DESKRIPSI='$DESKRIPSI', ALAMAT ='$ALAMAT', CONTACT ='$CONTACT', FOTO ='$namafoto' WHERE ID ='$id'");
  }else{

    mysqli_query($koneksi, "UPDATE tbl_minuman SET NAMA ='$NAMA', DESKRIPSI='$DESKRIPSI', ALAMAT ='$ALAMAT', CONTACT ='$CONTACT'  WHERE ID ='$id'" );
  }
  echo "<script>alert ('Produk Berhasil Diedit');</script>";

  echo "<script>location='produk-minuman.php';</script>";

}

?>
<br>
<form action="" method="post" enctype="multipart/form-data">
  <div class="mb-3 mx-3 my-3">
    <label for="NAMA" class="form-label">NAMA</label>
    <input type="text"  class="form-control" name="NAMA" value="<?php echo $pecah['NAMA'];?>" >
   
  </div>
  <div class="mb-3 mx-3 my-3">
    <label for="DESKRIPSI" class="form-label">DESKRIPSI</label>
    <input type="text"  class="form-control" name="DESKRIPSI" value="<?php echo $pecah['DESKRIPSI'];?>" >
  </div>
  <div class="mb-3 mx-3 my-3">
    <label for="ALAMAT" class="form-label">ALAMAT</label>
    <input type="text"  class="form-control" name="ALAMAT" value="<?php echo $pecah['ALAMAT'];?>" >
   
  </div>
  <div class="mb-3 mx-3 my-3">
    <label for="CONTACT" class="form-label">CONTACT</label>
    <input type="text"  class="form-control" name="CONTACT" value="<?php echo $pecah['CONTACT'];?>" >
  </div>
 
  <div class="mb-3 mx-3 my-3">
    <img src="../foto-minuman/?php echo $pecah['FOTO'];?>" width="100">

   
  </div>

  <div class="mb-3 mx-3 my-3">
    <label for="FOTO" class="form-label"> GANTI-FOTO</label>
    <input type="file"  class="form-control" name="foto" >
   
  </div>
 

  <button type="submit" name="edit" class="btn btn-primary  mx-3 my-3">EDIT</button>
</form>








<?php 
  include "footer.php";
  ?>