<?php require_once "../loginlearningmath/controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
//$level = $_SESSION['level'];

if($email != false && $password != false ){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>mathedukid</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/learningLogo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <img src="assets/img/learningLogo.png" width="40" height="40" class="d-inline-block align-top me-3" alt="Logo" loading="lazy">
      <h4 class="logo me-auto"><a href="index.php">mathedukid</a></h4>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Beranda</a></li>
          <li><a href="about.php">Tentang</a></li>
          <!-- <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.php">About</a></li>
              <li><a href="team.php">Team</a></li>
              <li><a href="testimonials.php">Testimonials</a></li>
            </ul>
          </li> -->
          <li><a href="course.php">Modul Pembelajaran</a></li>
          <li><a href="worksheet.php">Latihan Soal</a></li>
          <li><a href="contact.php">Contact</a></li>

          <li class="dropdown"><a href="#"><span span class="iconify" data-icon="bx:bxs-user" data-width="30"></span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Profile</a></li>
                  <li><a href="../loginlearningmath/logout-user.php">Logout</a></li>
                </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate_animated animate_fadeInDown">Welcome to <span>mathedukid</span></h2>
              <p class="animate_animated animate_fadeInUp">Anak menjadi gemar belajar saat yang dipelajari berhubungan dengan dunia mereka. Materi kami kemas dalam cerita empat sekawan yang memiliki talenta masing-masing, sehingga ilmu menjadi hidup, aplikatif, dan relevan</p>
              <a href="#about" class="btn-get-started animate_animated animate_fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate_animated animate_fadeInDown">Pikiran adalah api yang harus dinyalakan, bukan bejana yang harus diisi</h2>
              <p class="animate_animated animate_fadeInUp">Aktif dalam belajar, jangan hanya menunggu untuk menciptakan sesuatu yang berarti. Biasakan diri menjadi seorang pionner, bukan hanya sekedar followers. </p>
              <a href="#about" class="btn-get-started animate_animated animate_fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate_animated animate_fadeInDown">Apa pun dirimu, jadilah yang <span>baik</span></h2>
              <p class="animate_animated animate_fadeInUp">Fokus dengan segala impian, harapan, cita-citamu dan jadilah yang terbaik di bidang yang kamu geluti.</p>
              <a href="#about" class="btn-get-started animate_animated animate_fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Tidak ada anak yang tidak suka belajar !</h2>
            <h3>Buktikan dengan kami !</h3>
            <p>Kami percaya setiap anak berhak untuk mendapatkan pendidikan yang berkualitas tinggi. Hal ini dapat dicapai dengan memanfaatkan teknologi dan proses belajar yang sesuai dengan karakter alami anak.</p>
            <p>
              Setiap anak telah memiliki talenta dan bekal berupa keingintahuan tinggi untuk dapat mencapai versi terbaik dirinya. Tetapi benih dan bekal ini perlu dipupuk agar dapat mencapai sukses dan kebahagiaan.
            </p><br>

            <h3 class="text-center fw-bold text-danger">VISI</h3>
            <p>Untuk menjadi pengembang e-learning paling ahli dalam bidang Pendidikan sekolah dasar.</p><br>
            
            <h3 class="text-center fw-bold text-danger">MISI</h3>
            <ul>
              <li><i class="ri-check-double-line"></i> Mengembangkan konten e-learning terbaik yang berorientasi pada siswa</li>
              <li><i class="ri-check-double-line"></i> Memberikan fasilitas belajar yang menyenangkan menggunakan teknologi yang dapat digunakan sesuai dengan kebutuhan individu anak</li>
              <li><i class="ri-check-double-line"></i> Terus mengembangkan kualitas konten, proses belajar, dan pendistribusian, sesuai dengan riset dan keadaan terkini</li>
            </ul>
          </div>

          <div class="col-lg-6 mt-2 pt-lg-0">
            <img class="img-fluid" src="assets/img/about.jpg" alt="">
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
       
        <div class="section-title" style="text-align: justify;">
          <h2>Partners</h2>
          <p>Check Our Partners</p>
        </div>

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/bbb.png" class="img-fluid" alt="" style="width: 55px;">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/google-meet.png" class="img-fluid" alt="" style="width: 55px;">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/Ruangguru_logo.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/Quipper_Logo.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/merdeka-belajar.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/Kahoot.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>mathedukid</h3>
              <p>
                Gedung Kuliah Poltek, Jl. Veteran No.8, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Course</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Worksheets</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Blog</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>About</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">e-Learning</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Testimonials</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Dapatkan tulisan, kegiatan, publikasi, dan materi multimedia terbaru yang terbit setiap minggu.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>