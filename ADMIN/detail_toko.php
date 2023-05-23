<?php
include '../koneksi.php';
include 'header.php';

$id_toko = $_GET['id_toko']; 
$toko = query("SELECT * FROM toko WHERE id_toko = $id_toko");
?>

<br><br><br>
<?php foreach($toko as $tk){
?>
<h1>Selamat Datang Di <?php echo $tk['nama_toko']; ?></h1>
<a href="produk.php?id_kategori=<?php echo $tk['kategori_toko']; ?>" class="btn btn-success">Back</a>
<a href="tambah_menu.php?id_toko=<?php echo $tk['id_toko']; ?>" class="btn btn-warning">Tambah Menu</a>
<a href="hapus_toko.php?id_toko=<?php echo $tk['id_toko']; ?>" class="btn btn-danger">Hapus Toko</a>
<a href="edit_toko.php?id_toko=<?php echo $tk['id_toko']; ?>" class="btn btn-warning">Edit toko</a>

<div class="card text-center">
  <img src="../file/<?php echo $tk['foto_toko']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-dark"><?php echo $tk['nama_toko']; ?></h5>
    <a href="detail_toko.php" class="btn btn-primary">Order</a>
  </div>
</div>
<?php }?>


<?php 
$menu = query("SELECT * FROM menu WHERE menu_id_toko = $id_toko");
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Menu</th>
      <th scope="col">Harga</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php $no = 1; foreach($menu as $mn) {
      ?>
      <th scope="row"><?php echo $no++ ;?></th>
      <td><?php echo $mn['menu']; ?></td>
      <td><?php echo 'Rp.'.number_format ($mn['harga']); ?></td>
      <td>
        <a href="edit_menu.php?id_menu=<?php echo $mn['id_menu']; ?>" class="btn btn-warning">Edit</a>
        <a href="hapus_menu.php?id_menu=<?php echo $mn['id_menu']; ?>" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>

<?php include 'footer.php'; ?>