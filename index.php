<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Latihan Bootstrap 23 Oktober 2025</title>
  <link rel="icon" href="logo.webp" type="image/webp" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">Latihan Bootstrap</a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">

        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
          <li class="nav-item">
            <a class="nav-link" href="#article">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php" target="_blank">Login</a>
          </li>
          <div class="d-flex align-items-center ms-3">

            <button id="tombolHitam" class="btn btn-dark me-2">
              <i class="bi bi-moon-fill"></i>
            </button>
            <button id="tombolMerah" class="btn btn-light border">
              <i class="bi bi-sun-fill"></i>
            </button>
          </div>

        </ul>
      </div>
    </div>
  </nav>

  <section id="home" class="text-center text-sm-start p-5 bg-light bg-opacity-75 rounded-4 shadow">
    <div class="container">
      <div class="d-sm-flex flex-sm-row-reverse align-items-center">
        <img src="tni.jpeg" width="500" class="img-fluid mb-3 mb-sm-0 rounded" alt="Banner" />
        <div>
          <h1 class="fw-bold display-5 text-danger">
            Latihan CSS Dasar Menggunakan Bootstrap
          </h1>
          <h4 class="lead-bold text-auto">
            Sejarah TNI berawal dari Badan Keamanan Rakyat (BKR)
            yang dibentuk pada tanggal 22 Agustus 1945.
          </h4>
          <h6>
            <span id="tanggal"></span>
            <span id="jam"></span>
          </h6>
        </div>
      </div>
    </div>
  </section>

  <!-- article begin -->
  <section id="article" class="text-center p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">Article</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <?php
        $sql = "SELECT * FROM article ORDER BY tanggal DESC";
        $hasil = $conn->query($sql);

        while ($row = $hasil->fetch_assoc()) {
          ?>
          <div class="col">
            <div class="card h-100">
              <img src="<?= $row["gambar"] ?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title"><?= $row["judul"] ?></h5>
                <p class="card-text">
                  <?= $row["isi"] ?>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">
                  <?= $row["tanggal"] ?>
                </small>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </section>

  <!-- article end -->
  <section id="gallery" class="text-center p-5 bg-success-subtle">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3 border-bottom border-dark">
        Gallery
      </h1>
      <div id="carouselExample" class="carousel slide mt-4">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="tniprima.jpg" class="d-block w-100" alt="Gambar 1" />
          </div>
          <div class="carousel-item">
            <img src="tniprima1.jpg" class="d-block w-100" alt="Gambar 2" />
          </div>
          <div class="carousel-item">
            <img src="tniprima2.jpg" class="d-block w-100" alt="Gambar 3" />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
  </section>

  <section id="schedule" class="p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3 text-center border-bottom border-dark">
        Jadwal Kuliah & Kegiatan Mahasiswa
      </h1>

      <div class="row row-cols-1 row-cols-md-4 g-4 mt-3">

        <div class="col">
          <div class="card h-100 schedule-card shadow-sm">
            <div class="card-header fw-bold text-white bg-primary">Senin</div>
            <div class="card-body">
              <p class="card-text">
                <strong>08:00 - 10:30</strong><br />
                Basis Data<br />
                <small class="text-muted">Ruang H.5.6</small>
              </p>
              <p class="card-text">
                <strong>13:00 - 15:00</strong><br />
                Dasar Pemrograman<br />
                <small class="text-muted">Ruang H.5.7</small>
              </p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100 schedule-card shadow-sm">
            <div class="card-header fw-bold text-white bg-success">Selasa</div>
            <div class="card-body">
              <p class="card-text">
                <strong>08:00 - 09:30</strong><br />
                Pemrograman Berbasis Web<br />
                <small class="text-muted">Ruang D.2.K</small>
              </p>
              <p class="card-text">
                <strong>14:00 - 16:00</strong><br />
                Basis Data<br />
                <small class="text-muted">Ruang D.3.M</small>
              </p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100 schedule-card shadow-sm">
            <div class="card-header fw-bold text-white bg-danger">Rabu</div>
            <div class="card-body">
              <p class="card-text">
                <strong>10:00 - 12:00</strong><br />
                Pemrograman Berbasis Client<br />
                <small class="text-muted">Ruang D.1.A</small>
              </p>
              <p class="card-text">
                <strong>13:30 - 15:00</strong><br />
                Pemrograman Sisi Server<br />
                <small class="text-muted">Ruang D.2.A</small>
              </p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100 schedule-card shadow-sm">
            <div class="card-header fw-bold text-white bg-warning text-dark">Kamis</div>
            <div class="card-body">
              <p class="card-text">
                <strong>08:00 - 10:00</strong><br />
                Pengantar Teknologi Informasi<br />
                <small class="text-muted">Ruang D.3.N</small>
              </p>
              <p class="card-text">
                <strong>11:00 - 13:00</strong><br />
                Rapat Koordinasi DOSCOM<br />
                <small class="text-muted">Ruang D.2.J</small>
              </p>

            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100 schedule-card shadow-sm">
            <div class="card-header fw-bold text-white bg-info text-dark">Jumat</div>
            <div class="card-body">
              <p class="card-text">
                <strong>09:30 - 11:30</strong><br />
                Logika Informatika<br />
                <small class="text-muted">Ruang D.3.N</small>
              </p>
              <p class="card-text">
                <strong>08:00 - 11:00</strong><br />
                Kewarganegaraan<br />
                <small class="text-muted">Ruang E.3</small>
              </p>

            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 schedule-card shadow-sm">
            <div class="card-header fw-bold text-white bg-secondary text-dark">Sabtu</div>
            <div class="card-body">
              <p class="card-text">
                <strong>08:00 - 12:00</strong><br />
                Rapat Organisasi<br />
                <small class="text-muted">Offline-Online</small>
              </p>
              <p class="card-text">
                <strong>12:00 - 18:00</strong><br />
                Bimbel Online<br />
                <small class="text-muted">Online</small>
              </p>

            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100 schedule-card shadow-sm">
            <div class="card-header fw-bold text-white bg-black text-dark">minggu</div>
            <div class="card-body">
              <p class="card-text text-center">
                </strong>Libur Musim hujan<br />
              </p>

            </div>
          </div>
        </div>
  </section>

  <section id="profile" class="p-5 bg-light bg-opacity-75 rounded-4 shadow">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3 text-center border-bottom border-dark">
        Profil Mahasiswa
      </h1>

      <div class="row align-items-center mt-4">

        <div class="col-md-4 text-center">
          <img src="nanang.JPG" class="rounded-circle img-fluid shadow-sm" alt="Foto Profil"
            style="width: 250px; height: 250px; object-fit: cover;">
        </div>

        <div class="col-md-8">
          <h3 class="text-center text-md-start mt-3 mt-md-0">
            NANANG ADIANTO
          </h3>

          <table class="table table-borderless table-hover mt-3">
            <tbody>
              <tr>
                <td class="fw-bold">NIM</td>
                <td>: A11.2024.16074</td>
              </tr>
              <tr>
                <td class="fw-bold">Program Studi</td>
                <td>: Teknik Informatika</td>
              </tr>
              <tr>
                <td class="fw-bold">Email</td>
                <td>: 111202416074@mhs.dinus.ac.id</td>
              </tr>
              <tr>
                <td class="fw-bold">Telepon</td>
                <td>: +62 812 3856 5302</td>
              </tr>
              <tr>
                <td class="fw-bold">Alamat</td>
                <td>: Jl. Imam Bonjol No. 123, Semarang</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <footer class="text-center py-4 mt-5 border-top">
    <p class="mb-0 fw-semibold">NANANG ADIANTO A11.2024.16074</p>
    <div>
      <a href="https://www.instagram.com/udinusofficial"><i class="bi bi-instagram h3 p-1 text-dark"></i></a>
      <a href="https://twitter.com/udinusofficial"><i class="bi bi-twitter-x h3 p-1 text-dark"></i></a>
      <a href="https://wa.me/+6282238565302 target=" _blank"><i class="bi bi-whatsapp h3 p-1 text-dark"></i></a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
  </script>
</body>

</html>