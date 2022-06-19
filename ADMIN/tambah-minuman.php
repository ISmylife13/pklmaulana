<?php 
session_start();
if(!isset($_SESSION["admin"])){
  header("location:../index.php");
}
include "header.php";
include "koneksi.php";

if(isset($_POST['save'])){
  $NAMA = htmlspecialchars($_POST['NAMA']);
  $DESKRIPSI = htmlspecialchars($_POST['DESKRIPSI']);
  $ALAMAT = htmlspecialchars($_POST['ALAMAT']);
  $CONTACT = htmlspecialchars($_POST['CONTACT']);
  $foto= $_FILES['foto'];
  $filename = $_FILES['foto']['name'];
  $tmp_name = $_FILES['foto']['tmp_name'];

  $type1 = explode('.', $filename);
  $type2 = $type1[1];
  move_uploaded_file($tmp_name, '../foto-minuman/'.$filename);
  if($NAMA && $DESKRIPSI && $ALAMAT && $CONTACT && $foto ){


    $sqli = "INSERT INTO tbl_minuman (NAMA, DESKRIPSI, ALAMAT, CONTACT, FOTO) VALUES ('$NAMA', '$DESKRIPSI', '$ALAMAT', '$CONTACT', '$filename') ";
    $q1 = mysqli_query($koneksi, $sqli);
    if($q1){
      echo "<script> alert('Produk Berhasil Ditambahkan'); document.location.href = 'produk-minuman.php'</script>";
    }else{
      echo "<script>alert ('Produk Gagal Ditambahkan')</script>";
    }

  }


}

?>


<h3 style="margin-top: 70px;">Tambah Produk Minuman</h3>

<form action="" method="post" enctype="multipart/form-data">
  <div class="mb-3 mx-3 my-3">
    <label for="NAMA" class="form-label">NAMA</label>
    <input type="text"  class="form-control" name="NAMA"  required autocomplete="off">
   
  </div>
  <div class="mb-3 mx-3 my-3">
    <label for="DESKRIPSI" class="form-label">DESKRIPSI</label>
    <input type="text"  class="form-control" name="DESKRIPSI" required autocomplete="off" >
  </div>
  <div class="mb-3 mx-3 my-3">
    <label for="ALAMAT" class="form-label">ALAMAT</label>
    <input type="text"  class="form-control" name="ALAMAT" required autocomplete="off" >
   
  </div>
  <div class="mb-3 mx-3 my-3">
    <label for="CONTACT" class="form-label">CONTACT</label>
    <input type="text"  class="form-control" name="CONTACT" required autocomplete="off" >
  </div>

  
  <div class="mb-3 mx-3 my-3">
    <label for="FOTO" class="form-label">FOTO</label>
    <input type="file"  class="form-control" name="foto" required autocomplete="off" >
  </div>
 

  <button type="submit" name="save" class="btn btn-primary  mx-3 my-3">SAVE</button>
</form>

<?php 
  include "footer.php";
  ?>
