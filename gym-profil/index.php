<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KuySports</title>
  <link rel="stylesheet" href="../assets/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="../assets/js/jquery.js"></script>
  <!--  -->
  <style>
    .navbar {
      background-color: #18212b;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1;
    }
  </style>
</head>

<body style="background-color:#18212b ;">
  <div class="container-fluid" style="height: 65px;background-color: #18212b;">

  </div>
  <!-- section nav -->
  <div class="container-flex">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <!-- letakkan image hary gym -->
        <a class="navbar-brand" href="#">
        <img src="../assets/img/kuy_logo.png" style="height: 40px; width:40px;border-radius: 50px;" class="brand-image " >
        <span><b> KuySports</b></span>
      </a>
        <!-- end img -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <form class="d-flex">
            <a href="../login.php" class="btn btn-primary active">Login</a>
          </form>
            <li class="nav-item">
              <a class="nav-link" href="registrasi-member.php">Daftar Member</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- end nav -->
  <!-- section carousel -->
  <section class="container-fluid" style="background-color:#18212b;">
    <div class="row">
      <div class="col-lg-8 py-1" style="margin: auto;">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../assets/img/mentor.jpg" class="d-block w-100" style="height: 510px; border-radius:20px;" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Mentor Yang Kompeten</h5>
                <p>Adanya Mentor yang tepat serta berkompeten dibidangnya akan membuat latihan anda menjadi mudah. Mentor telah mendapatkan sertifikat sesuai bidangnya.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../assets/img/kunsultasi.jpg" class="d-block w-100" style="height: 510px; border-radius:20px;" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Konsultasi Gratis</h5>
                <p>Segala hambatan yang anda hadapi semasa latihan dapat anda konsultasikan dengan mentor, hal ini perlu agar anda mendapatkan hasil latihan yang maksimal.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../assets/img/flesibel.jpg" class="d-block w-100" style="height: 510px; border-radius:20px;" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Waktu Fleksibel</h5>
                <p>Olahraga yang anda terapkan bersama mentor fleksibel, dengan mengatur waktunya terlebih dahulu, hal ini untuk kenyamanan dan kepuasan anda.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <div class="col-lg-10 py-2" style="margin: auto;">

        <p style="color: white;text-align: center;"><b>KuySports</b></p> 
        <p style="color: white; text-align: justify;">Memberikan solusi yang tepat bagi mereka yang kesulitan untuk memulai, 
        menjalani dan mempertahankan rutinitas olahraga. Kami yakin dengan hadirnya KuySports bisa membantu setiap individu 
        meraih kebugaran dan kesehatan serta memiliki motivasi yang besar untuk tetap berolahraga secara aktif. 
      Sesuaikan paket yang kami miliki dibawah ini dengan tujuan anda.</p>
      </div>

    </div>
  </section>
  <!-- end carousel -->


  <!-- Start Paket -->
  <section style="background-color: whitesmoke;">
    <div class="container">
      <div class="row mb-3 py-2">
        <div class="col-md-12" style="margin: auto;">
          <h2 style="text-align: center; color: black;">Daftar Paket</h2>
          <hr>
          <div class="row">
            <!--  -->
            <?php
            // ambil koneksi
            require '../conn.php';
            // ambil isi/check data dari tb paket
            $query = "SELECT * FROM tb_paket";
            $sql = mysqli_query($koneksi, $query);
            // perulangan untuk memunculkan banyak paket
            while ($data = mysqli_fetch_object($sql)) {
            ?>
              <!-- munculkan perulangan dengan card -->

              <div class="col-md-3" style="margin-bottom: 20px;">


                <div class="card" style="width: 18rem; height: 24rem; border-radius: 10px;">
                  <h5 class="card-header" style="background-color: #18212b; color: whitesmoke;text-align: center;">Rp <?= $data->harga_paket; ?></h5>
                  <img src="../assets/img/<?= $data->gambar; ?>" class="card-img-top" style="height: 140px;">

                  <div class="card-body">
                    <h5 class="card-title"><?= substr($data->nama_paket, 0, 20) ?>...</h5>
                    <p class="card-text"><?= substr($data->ket_paket, 0, 70) ?>...</p>
                  </div>
                  <div class="card-footer text-muted">
                    <div class="row">
                      <div class="col">
                        <p>ID : <?= $data->id_paket; ?></p>
                      </div>
                      <div class="col">
                        <td></td>
                        <a type="button" class="btn btn-primary" href="detail-paket.php?url-id=<?= $data->id_paket; ?>">Detail</a>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            <?php
            }
            ?>
            <!--  -->

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact person -->


  <section class="container" style="color: whitesmoke;">
<div class="row">
         <section id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Mitra</h3>
          <p><a href="https://www.dicoding.com/about" target="_blank"><img src="../assets/img/dicoding.jpg" style="border-radius: 50px; height: 30px; width: 30px;"></a>&ensp;PT. Presentologics</p>
          <p><a href="https://unissula.ac.id/" target="_blank"><img src="../assets/img/logo unissula.png" style="border-radius: 50px; height: 30px; width: 30px;"></a>&ensp;Universitas Islam Sultan Agung</p>
          <p><a href="https://fti.unissula.ac.id/" target="_blank"><img src="../assets/img/logo fti.jpg" style="border-radius: 50px; height: 30px; width: 30px;"></a>&ensp;Fakultas Teknologi Industri</p>
          </div>
        <div class="col-md-3">
          <h3>Keuntungan</h3>
          <p><i class="fa fa-certificate" style="font-size:19px"></i>&ensp;Mentor Yang Kompeten</p>
          <p><i class="fa fa-handshake-o"></i> Konsultasi Gratis</p>
          <p> <i class="fa fa-clock-o" style="font-size:20px"></i>&ensp;Waktu Fleksibel</p>
          </div>
        <div class="col-md-3">
          <h3>Kontak</h3>
          <p><i class="fa fa-phone"></i>&ensp;+6285730006570</p>
          <p><i class="fa fa-envelope"></i>&ensp;kuysports@gmail.com</p>
          <p><i class="fa fa-home"style="font-size:19px"></i>&ensp;Semarang, Jawa Tengah</p> 
        </div>

        <div class="col-md-2">
          <h3>Ikuti Kami</h3>
          <p><i class="fa fa-instagram"style="font-size:20px"></i>&ensp;<a href="https://www.instagram.com/yundo_47/"target="_blank">Instagram</a></p>
          <p><i class="fa fa-facebook-f" style="font-size:24px"></i>&ensp; <a href="https://www.facebook.com/fajrulfalah.peta"target="_blank">Facebook</a></p>
          <p><i class="fa fa-youtube-play"style="font-size:20px"></i>&ensp;<a href="https://www.youtube.com/channel/UCh1SXQYNK-p3yRVj57Vu9sQ"target="_blank">Youtube</a></p>         
        </div>
      </div> 
      <hr>
      <footer align="center">
        <center> <p class="copyright">&#169; 2024 <b>KuySports</b></p></center>
      </footer>
    </div>
  <!-- bundel min js -->
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>