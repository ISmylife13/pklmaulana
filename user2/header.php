<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
  <link rel="stylesheet" href="css/style.css">

  <title>E-COMMERCE</title>
</head>
<br>
<br>
<br>

<body>

  <!-- navbar header -->
  <nav class="navbar navbar-expand-lg navbar-light  fixed-top" style="background-color: #06FF00;">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fa-solid fa-shop-lock"></i> E-COMMERCE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="produk-makanan.php">Produk Makanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="produk-minuman.php">Produk Minuman</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Produk Lainnya
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="produk-pakaian.php">Produk Pakaian</a></li>
              <li><a class="dropdown-item" href="produk-konter.php">Produk Konter</a></li>

            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../index.php"
              onclick="return confirm('Anda Yakin Ingin Keluar ?');">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-1 mb-3">