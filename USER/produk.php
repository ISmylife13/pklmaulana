<?php
include '../koneksi.php';
include 'header.php';
$id_kategori = $_GET['id_kategori'];
$toko = query("SELECT * FROM toko WHERE kategori_toko=$id_kategori");
$kategori_toko = mysqli_query($koneksi,"SELECT * FROM kategori WHERE id_kategori=$id_kategori");
while($tk = mysqli_fetch_array($kategori_toko)){
?>

<br><br><br>
<h1>Selamat Datang Di Produk <?php echo $tk['nama_kategori']; ?></h1>
<br>
<?php } ?>
<a href="index.php" class="btn btn-success">Back</a>

<div class="container text-center">
  <div class="row">
    <?php foreach($toko as $tk){
    ?>
    <div class="col-md-3 my-3 ">
      <div class="card">
        <img src="../file/<?php echo $tk['foto_toko'];?>" width="18rem" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-dark"><?php echo $tk['nama_toko']; ?></h5>
          <a href="detail_toko.php?id_toko=<?php echo $tk['id_toko']; ?>" class="btn btn-primary">kunjungi</a>
          <br>
          <br>
          <a class="px-2" href="<?php echo $tk ['alamat_toko'];?>"><img src="../file/maps.png" width="40px"></a>

          <a class="px-2" href="<?php echo $tk ['contact_toko'];?>"><img src="../file/wa logo.png" width="40px"></a>


        </div>
      </div>
    </div>
    <?php }?>
  </div>
</div>

<?php include 'footer.php'; ?>