<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
      />
    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.1/examples/album/"
      />
    <style>
      .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
      }
      @media (min-width: 768px) {
      .bd-placeholder-img-lg {
      font-size: 3.5rem;
      }
      }
      .z-index-2{
      z-index: 2;
      }
      .z-index-1{
      z-index: 1;
      }
      .card {
      display: flex;
      flex-direction: column;
      position: relative;
      overflow: hidden;
      transition: transform 0.3s;
      }
      .card:hover {
      transform: translateY(10px);
      height: auto; /* Atur tinggi kartu menjadi otomatis saat dihover */
      }
      .card:not(:hover) {
      height: 345px; /* Atur tinggi kartu kembali ke tinggi aslinya ketika tidak dihover */
      overflow: hidden; /* Tambahkan overflow: hidden untuk membatasi konten saat tidak dihover */
      }
      .btn-group {
      text-align: center;
      display: flex;
      flex-direction: column;
      transition: transform 0.3s;
      }
      .hover-text {
      text-align: center;
      opacity: 0;
      transition: opacity 0.3s;
      transition: transform 0.3s;
      display: none;
      margin-top: 10px; /* Berikan sedikit jarak atas untuk Hover Text */
      }
      .card:hover .hover-text, .hover-text:hover {
      display: block;
      opacity: 1;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="https://www.instagram.com/onlyone_novv/" class="text-white">Follow on Instagram</a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100031997303722" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-white">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white"><a href="login.php" class="btn btn-success">LOGIN ?</a></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-light bg-light shadow-sm">
        <div class="container">
          <a href="#" class="navbar-brand d-flex align-items-center">
          <img src="Assets/Logo_NFM svg.svg" alt="" width="80px">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>
    <main>
      <section class="py-5 text-center container">
        <div class="row py-lg-1">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-dark">Game Store NFM</h1>
            <p class="lead text-muted">Tempat Beli Game Terjamin Aman 100%</p>
          </div>
        </div>
      </section>
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
              include "connection.php";
              $data = mysqli_query($connection, "SELECT * FROM upload order by id DESC");
              while($row = mysqli_fetch_array($data)){
              ?>
            <div class="col">
              <div class="card shadow-sm" style="padding: 2px;">
                <img src="ResultUpload/thumbnailDesk/<?php echo $row['thumbnailGame'] ?>" alt="" height="200px" style="object-fit: cover;">
                <div class="card-body z-index-2">
                  <p class="card-text text-end" style="margin-top: 20px;"><?php echo $row['namaGame'] ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button class="btn btn-sm btn-outline-secondary" onclick="popOne(
                        '<?php echo $row['thumbnailGame'] ?>',
                        '<?php echo $row['deskGame'] ?>',
                        '<?php echo $row['namaGame'] ?>',
                        '<?php echo $row['harga'] ?>'
                        )">Order</button>
                      <div class="hover-text text-start"><?php echo $row['deskGame'] ?></div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </main>
    <footer class="text-muted py-5 bg-dark">
      <div class="container" style="display: flex; justify-content:center">
        <div class="row">
          <div class="offset-md-1 py-4">
            <h4 class="text-white">Profile Dev</h4>
            <ul class="list-unstyled">
              <li><a href="profileNova.php" class="text-white" style="padding-left: 10px;">Ade Nova W</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      function popOne(thumbnail, deskGame, namaGame, harga) {
          Swal.fire({
              title: namaGame,
              html: `<p style="text-align: left;">${deskGame}</p><p style="text-align: right;">Harga: ${harga}</p>`,
              imageUrl: `ResultUpload/thumbnailDesk/${thumbnail}`,
              imageWidth: 400,
              imageHeight: 200,
              showCancelButton: true,
              confirmButtonColor: "#3085d6",
              cancelButtonColor: "#d33",
              confirmButtonText: "BUY"
          }).then((result) => {
              if (result.isConfirmed) {
                  Swal.fire({
                      title: "Pembelian Berhasil!",
                      text: "Game telah ditambahkan ke keranjang.",
                      icon: "success"
                  });
              }
          });
      }
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
      ></script>
  </body>
</html>