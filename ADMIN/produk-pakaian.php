<?php 
session_start();
if(!isset($_SESSION["admin"])){
  header("location:../index.php");
}
 include "header.php";
 include "koneksi.php";

 $pakaian = query("SELECT * FROM tbl_pakaian");

//  tombol cari di klik
if(isset($_POST["cari"])){
  $pakaian = query("SELECT * FROM tbl_pakaian WHERE NAMA LIKE '%".$_POST['cari']."%' OR DESKRIPSI LIKE '%".$_POST['cari']."%' OR ALAMAT LIKE '%".$_POST['cari']."%'");

}


?>

<!-- btn tambah produk -->
<div>
  <a href="tambah-pakaian.php" class="btn btn-primary my-3 mx-2 ms-5" >Tambah Produk</a>
</div>
<br>
<!-- searching -->
<form action="" method="POST">

    <input type="text" name="cari" size="20" autofocus placeholder="seacrhing " autocomplete="off">
    <button type="submit" >SEARCH</button>
  

</form>
<br>



<!-- TABEL -->

<div class="table-responsive">

<table class="table table-bordered table-sm table-hover " style="margin-top :5px;">

<thead> 
  <tr>
    <th style="text-align: center;">NO</th>
    <th style="text-align: center;">NAMA</th>
    <th style="text-align: center;">DESKRIPSI</th>
    <th style="text-align: center;">ALAMAT</th>
    <th style="text-align: center;">CONTACT</th>
    <th style="text-align: center;">FOTO</th>
    <th style="text-align: center;">AKSI</th>
  </tr>
</thead>

<tbody>
  <?php $nomor = 1;?>
  <?php foreach($pakaian as $pecah):?>
  <tr>
    <td style="text-align: center;"><?php echo $nomor++;?> </td>
    <td><?php echo $pecah ['NAMA'];?> </td>
    <td><?php echo $pecah ['DESKRIPSI'];?> </td>
    <td>
          <a class="p-3" href="<?php echo $pecah ['ALAMAT'];?>"><img src="../file/maps.png" width="70px"></a>

        </td>
    <td >
      <a class="px-3 py-5" href="<?php echo $pecah ['CONTACT'];?>"><img src="../file/wa logo.png" width="70px" ></a>
     
    </td>
    <td>
    <img src="../foto-pakaian/<?php echo $pecah ['FOTO'];?>" width="200">
   </td>
 


   <td>
     <a href="hapus-pakaian.php?ID=<?php echo $pecah ['ID'];?>"
     class="btn-danger btn " onclick="return confirm('Anda Yakin Ingin Menghapus Data ?');">Hapus</a>
     <a href="edit-pakaian.php?ID=<?php echo $pecah ['ID'];?>"
     class=" btn btn-warning ">Edit</a>
     
   </td>


  </tr>

  <?php endforeach; ?>

</tbody>

</table>
</div>

<?php 
  include "footer.php";
  ?>