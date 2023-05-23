<?php
include '../koneksi.php';
include 'header.php';
$id_toko = $_GET['id_toko']; 
$toko = query("SELECT * FROM toko WHERE id_toko = $id_toko");

if(isset($_POST['submit'])){
  $menu_id_toko = htmlspecialchars($_POST['menu_id_toko']);
  $menu = htmlspecialchars($_POST['menu']);
  $harga = htmlspecialchars($_POST['harga']);


    $sqli = "INSERT INTO menu (menu_id_toko, menu, harga) VALUE ('$menu_id_toko', '$menu', '$harga') ";
    $q1 = mysqli_query($koneksi, $sqli);


    if($q1){
      echo "<script> alert('Produk Berhasil Ditambahkan'); document.location.href = 'detail_toko.php?id_toko=$id_toko'
</script>";
}else{
echo "<script>
alert('Produk Gagal Ditambahkan')
</script>";
}

}



?>

<br><br><br>
<?php foreach($toko as $tk){
?>
<h1>Tambah Menu <?php echo $tk['nama_toko']; ?></h1>

<form method="post" action="">
  <input type="hidden" name="menu_id_toko" value="<?php echo $tk['id_toko']; ?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Menu</label>
    <input name="menu" type="text" autocomplete="off" class="form-control" id="exampleInputEmail1"
      aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Harga</label>
    <input name="harga" type="number" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
</form>
<?php } ?>
<?php include 'footer.php'; ?>