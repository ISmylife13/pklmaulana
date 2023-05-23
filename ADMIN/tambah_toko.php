<?php 
// session_start();
// if(!isset($_SESSION["admin"])){
//   header("location:../index.php");
// }
include "header.php";
include "../koneksi.php";
$id_kategori = $_GET['id_kategori'];
// tambah
if(isset($_POST['save'])){
  $nama_toko = htmlspecialchars($_POST['nama_toko']);
  $alamat_toko = htmlspecialchars($_POST['alamat_toko']);
  $contact_toko = htmlspecialchars($_POST['contact_toko']);
  $foto_toko = $_FILES['foto_toko'];
  $kategori_toko = $_POST['kategori_toko'];
  $filename = $_FILES['foto_toko']['name'];
  $tmp_name = $_FILES['foto_toko']['tmp_name'];

  $type1 = explode('.', $filename);
  $type2 = $type1[1];
  move_uploaded_file($tmp_name, '../file/'.$filename);
  if($nama_toko && $alamat_toko && $contact_toko && $foto_toko && $kategori_toko ){


    $sqli = "INSERT INTO toko (nama_toko, alamat_toko, contact_toko, foto_toko, kategori_toko) VALUE ('$nama_toko', '$alamat_toko', '$contact_toko', '$filename', '$kategori_toko') ";
    $q1 = mysqli_query($koneksi, $sqli);


    if($q1){
      echo "<script> alert('Produk Berhasil Ditambahkan'); document.location.href = 'produk.php?id_kategori=$id_kategori'</script>";
    }else{
      echo "<script>alert ('Produk Gagal Ditambahkan')</script>";
    }

  }
}


$kategori_toko = mysqli_query($koneksi,"SELECT * FROM kategori WHERE id_kategori=$id_kategori");
while($k = mysqli_fetch_array($kategori_toko)){

?>

<h3 style="margin-top: 70px;">Tambah Toko <?php echo $k['nama_kategori']; ?></h3>
<?php } ?>
<form action="" method="post" enctype="multipart/form-data">
  <div class="mb-3 mx-3 my-3">
    <label for="nama_toko" class="form-label">Nama Toko</label>
    <textarea rows="4" cols="4" type="text" class="form-control" name="nama_toko" required
      autocomplete="off"> </textarea>
  </div>
  <div class="mb-3 mx-3 my-3">
    <label for="alamat_toko" class="form-label">Alamat Toko</label>
    <textarea rows="4" cols="4" type="text" class="form-control" name="alamat_toko" required
      autocomplete="off"> </textarea>
  </div>
  <div class="mb-3 mx-3 my-3">
    <label for="contact_toko" class="form-label">Contact Toko</label>
    <input type="text" class="form-control" name="contact_toko" required autocomplete="off">

  </div>
  <div class="mb-3 mx-3 my-3">
    <label for="foto_toko" class="form-label">Foto Toko</label>
    <input type="file" class="form-control" name="foto_toko" required autocomplete="off">
  </div>
  <div class="mb-3 mx-3 my-3 ">
    <label for="kategori_toko" class="form-label">Kategori Toko</label>
    <select name="kategori_toko" class="form-control" required id="kategori_toko">
      <option value="">- Pilih -</option>
      <?php $kategori_toko = mysqli_query($koneksi,"SELECT * FROM kategori");
while($k = mysqli_fetch_array($kategori_toko)){

?>
      <option value="<?php echo $k['id_kategori']; ?>"><?php echo $k['nama_kategori']; ?></option>
      <?php 
    }
    ?>
    </select>
  </div>

  <button type="submit" name="save" class="btn btn-primary  mx-3 my-3">SAVE</button>
</form>

<?php 
  include "footer.php";
  ?>