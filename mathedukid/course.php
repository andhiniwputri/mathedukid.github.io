<?php require_once "../loginlearningmath/controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
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

  <title>Course</title>
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
      <h1 class="logo me-auto"><a href="index.php">mathedukid</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Beranda</a></li>
          <li><a href="about.php">Tentang</a></li>
          <!-- <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.php">About</a></li>
              <li><a href="team.php">Team</a></li>
              <li><a href="testimonials.php">Testimonials</a></li>
            </ul>
          </li> -->
          <li><a href="course.php" class="active">Modul Pembelajaran</a></li>
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

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Modul</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Modul</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="class/class-1.php">Kelas Satu</a></h4>
              <p>Di sini kamu bisa tonton video yang membahas pelajaran Matematika untuk kelas 1 SD yang sudah disesuaikan dengan kurikulum sekolah kamu.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="class/class-2.php">Kelas Dua</a></h4>
              <p>Di sini kamu bisa tonton video yang membahas pelajaran Matematika untuk kelas 2 SD yang sudah disesuaikan dengan kurikulum sekolah kamu.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="class/class-3.php">Kelas Tiga</a></h4>
              <p>Di sini kamu bisa tonton video yang membahas pelajaran Matematika untuk kelas 3 SD yang sudah disesuaikan dengan kurikulum sekolah kamu.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a href="class/class-4.php">Kelas Empat</a></h4>
              <p>Di sini kamu bisa tonton video yang membahas pelajaran Matematika untuk kelas 4 SD yang sudah disesuaikan dengan kurikulum sekolah kamu.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="class/class-5.php">Kelas Lima</a></h4>
              <p>Di sini kamu bisa tonton video yang membahas pelajaran Matematika untuk kelas 5 SD yang sudah disesuaikan dengan kurikulum sekolah kamu.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="class/class-6.php">Kelas Enam</a></h4>
              <p>Di sini kamu bisa tonton video yang membahas pelajaran Matematika untuk kelas 6 SD yang sudah disesuaikan dengan kurikulum sekolah kamu.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

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
                Gedung Kuliah Filkom UB, Jl. Veteran No.8, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145<br><br>
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