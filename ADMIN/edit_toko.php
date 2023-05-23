<?php 
// session_start();
// if(!isset($_SESSION["admin"])){
//   header("location:../index.php");
// }

include "header.php";
include "../koneksi.php";
$id_toko = $_GET['id_toko'];
// edit 

$ambil = query("SELECT * FROM toko WHERE id_toko = $id_toko")["0"];
// $pecah = mysqli_fetch_assoc($ambil);

if(isset($_POST['edit'])){
  $nama_toko = $_POST['nama_toko'];
  $alamat_toko = $_POST['alamat_toko'];
  $contact_toko = $_POST['contact_toko'];
  // $foto_toko = $_POST['foto_toko'];
  $kategori_toko = $_POST['kategori_toko'];
  $filename = $_FILES['foto_toko']['name'];
  $tmp_name = $_FILES['foto_toko']['tmp_name'];

  if($filename == ''){
    query("UPDATE toko SET
    nama_toko ='$nama_toko', alamat_toko='$alamat_toko', contact_toko ='$contact_toko', kategori_toko ='$kategori_toko'  WHERE id_toko ='$id_toko'
    ");
  }else{
    move_uploaded_file($tmp_name, "../file/$filename");
    mysqli_query($koneksi, "UPDATE toko SET nama_toko ='$nama_toko', alamat_toko='$alamat_toko', contact_toko ='$contact_toko', foto_toko ='$filename', kategori_toko ='$kategori_toko' WHERE id_toko ='$id_toko'");
  }

  // if(!empty($tmp_name)){
  //   move_uploaded_file($tmpname, "../file/$filename");
  //   mysqli_query($koneksi, "zUPDATE toko SET nama_toko ='$nama_toko', alamat_toko='$alamat_toko', contact_toko ='$contact_toko', foto_toko ='$filename', kategori_toko ='$kategori_toko' WHERE id_toko ='$id_toko'");
  // }else{
    
   
  //   mysqli_query($koneksi, "UPDATE toko SET nama_toko ='$nama_toko', alamat_toko='$alamat_toko', contact_toko ='$contact_toko', kategori_toko ='$kategori_toko'  WHERE id_toko ='$id_toko'" );
  // }
  echo "<script>alert ('Produk Berhasil Diedit');</script>";

  echo "<script>document.location.href='detail_toko.php?id_toko=$id_toko';</script>";

}

?>
<br>
<br>
<form action="" method="post" enctype="multipart/form-data">
  <div class="mb-3 mx-3 my-3">
    <label for="nama_toko" class="form-label">Nama Toko</label>
    <textarea rows="4" cols="4" type="text" class="form-control" name="nama_toko" required
      autocomplete="off"><?php echo $ambil['nama_toko'];?></textarea>
  </div>
  <div class="mb-3 mx-3 my-3">
    <label for="alamat_toko" class="form-label">Alamat Toko</label>
    <textarea rows="4" cols="4" type="text" class="form-control" name="alamat_toko" required
      autocomplete="off"><?php echo $ambil['alamat_toko'];?></textarea>
  </div>
  <div class="mb-3 mx-3 my-3">
    <label for="contact_toko" class="form-label">Contact Toko</label>
    <input type="text" value="<?php echo $ambil['contact_toko'];?>" class="form-control" name="contact_toko" required
      autocomplete="off">

  </div>
  <div class="mb-3 mx-3 my-3">
    <label for="foto_toko" class="form-label"> Ganti-Foto</label>
    <input type="file" class="form-control" name="foto_toko">
    <img src="../file/<?php echo $ambil['foto_toko'];?>" width="200px">
    <p>Apabila tidak dirubah kosongkan saja</p>

  </div>

  <div class="mb-3 mx-3 my-3 ">
    <label for="kategori_toko" class="form-label">Kategori Toko</label>
    <select name="kategori_toko" class="form-control" required id="kategori_toko">
      <option value="">- Pilih -</option>
      <?php $kategori_toko = mysqli_query($koneksi,"SELECT * FROM kategori");
while($k = mysqli_fetch_array($kategori_toko)){

?>
      <option <?php if ($ambil['kategori_toko'] == $k['id_kategori']) {
        echo "selected= 'selected'";
      }?>value="<?php echo $k['id_kategori']; ?>"><?php echo $k['nama_kategori']; ?></option>
      <?php 
    }
    ?>
    </select>
  </div>


  <button type="submit" name="edit" class="btn btn-warning">EDIT</button>
</form>


<?php 
  include "footer.php";
  ?>