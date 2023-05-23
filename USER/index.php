<?php
// session_start();
// if(!isset($_SESSION["admin"])){
//   header("location:../index.php");
// }

include "../koneksi.php";

?>

<?php 
  include "header.php";
  ?>


<br>
<section class="bgdepan" id="Home">
  <main class="content">
    <h6 style="text-align: center; color:chartreuse;  ">SELAMAT DATANG DAN SELAMAT BERBELANJA</h6>
    <h2 style="text-align:center; color:mediumblue;">Dengan Banyaknya Pilihan Menu Makanan Minuman Hingga Pakaian
      Semua Ada Disini
    </h2>


  </main>
</section>

<div class="container ">

  <div class="row ">
    <?php $kategori_toko = mysqli_query($koneksi,"SELECT * FROM kategori");
    while($tk = mysqli_fetch_array($kategori_toko)){ ?>

    <div class="col-md-3 py-3">

      <a href="produk.php?id_kategori=<?php echo $tk['id_kategori']; ?>">
        <div class="card bg-dark text-white">
          <img src="../file/<?php echo $tk['foto_kategori']; ?>" class="card-img" alt="" width="100px" height="200px">
          <div class="card-img-overlay d-flex align-items-center p-4">
            <h5 class="card-title text-center flex-fill p-2" style="background-color: rgba(0, 0, 0, 0.637);">
              <?php echo $tk['nama_kategori']; ?>
            </h5>
          </div>
        </div>
      </a>
    </div>
    <?php } ?>
  </div>
</div>


</div>


<!-- more info -->
<br><br>
<div class="card" style="background-color: black;">
</div>
<br>
<h4 style="text-align: center;">
  INFORMASI LEBIH LANJUT
</h4>
<br><br>

<div style="text-align: center; ">
  <a href="http://Wa.me/+62859126198895" class="p-3"><i class="fa-brands fa-whatsapp-square fs-1"></i></a>

  <a href="https://www.facebook.com/maulana.mahmudi.7" class="p-3"><i class="fa-brands fa-facebook-square fs-1"></i></a>

  <a href="https://www.instagram.com/maulana.mahmudi/" class="p-3"><i
      class="fa-brands fa-instagram-square fs-1"></i></a>

</div>

<br>
<br>

<?php 
  include "footer.php";
  ?>