<?php
include 'header.php';
include '../koneksi.php';
$id_menu = $_GET['id_menu'];
// $menu = mysqli_query($koneksi,"SELECT * FROM menu WHERE id_menu = $id_menu");
$menu = query("SELECT * FROM menu WHERE id_menu = $id_menu")["0"];
// $pecah = mysqli_fetch_assoc($menu);
$id=$menu['menu_id_toko'];

if(isset($_POST['submit'])){
  $menu1 = $_POST['menu'];
  $harga = $_POST['harga'];
 
  $q1=query("UPDATE menu SET menu ='$menu1', harga='$harga' WHERE id_menu = '$id_menu'" );
  

  echo "<script>alert ('Produk Berhasil Diedit');</script>";
echo "<script>document.location.href='detail_toko.php?id_toko=$id';</script>";
 


}
?>
<br><br><br>
<form method="post" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Menu</label>
    <input value="<?php echo $menu['menu']?>" name="menu" type="text" autocomplete="off" class="form-control"
      id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Harga</label>
    <input value="<?php echo $menu['harga']?>" name="harga" type="number" class="form-control"
      id="exampleInputPassword1">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Edit</button>
</form>
<?php 
include 'footer.php'; ?>