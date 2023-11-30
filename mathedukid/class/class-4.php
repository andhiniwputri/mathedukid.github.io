<?php require_once "../../loginlearningmath/controllerUserData.php"; ?>
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

  <title>Grade 4</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/learningLogo.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <img src="../assets/img/learningLogo.png" width="40" height="40" class="d-inline-block align-top me-3" alt="Logo" loading="lazy">
      <h1 class="logo me-auto"><a href="../index.php">IMath</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../about.php">About</a></li>
          <!-- <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../about.php">About</a></li>
              <li><a href="../team.php">Team</a></li>
              <li><a href="../testimonials.php">Testimonials</a></li>
            </ul>
          </li> -->
          <li><a href="../course.php">Course</a></li>
          <li><a href="../worksheet.php">Worksheets</a></li>
          <li><a href="../pricing.php">Pricing</a></li>
          

          <li><a href="../contact.php">Contact</a></li>
          <li class="dropdown"><a href="#"><span span class="iconify" data-icon="bx:bxs-user" data-width="30"></span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Profile</a></li>
                  <li><a href="../../loginlearningmath/logout-user.php">Logout</a></li>
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
          <h2>Course</h2>
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../course.php">Course</a></li>
            <li>Kelas 4</li>
          </ol>
        </div>

      </div>      
    </section><!-- End Breadcrumbs -->


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>Matematika</h2>
          <p>Kelas 4</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Kelipatan dan Faktor Bilangan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Operasi Hitung Bilangan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pengukuran</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Segitiga dan Jajargenjang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Bilangan Bulat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Pecahan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-8">Bilangan Romawi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-9">Bangun Ruang dan Bangun Datar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-10">Latihan</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Overview</h3>

                    <p>Video pembelajaran ini mencakup teori, soal, dan pembahasan Matematika Kelas 4 SD dengan menggunakan video. Video pembelajaran IMath untuk Matematika kelas 4 mencakup operasi hitung bilangan, kelipatan dan faktor bilangan, pengukuran, segitiga dan jajar genjang, bilangan bulat, bilangan pecahan, bilangan romawi, bangun ruang dan bangun datar.</p>
                  </div>
                  <!-- <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/img/features-1.png" alt="" class="img-fluid">
                  </div> -->
                </div>
              </div>

              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Kelipatan dan Faktor Bilangan</h3>
                    
                    <iframe id="player" type="text/html" width="640" height="390" 
                      src="https://www.youtube.com/embed/vf6DjMpILLk?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"
                    frameborder="0"></iframe> 

                  </div>
                  <!-- <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/img/features-2.png" alt="" class="img-fluid">
                  </div> -->
                </div>
              </div>

              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Operasi Hitung Bilangan</h3>
                    
                    <iframe id="player" type="text/html" width="640" height="390" 
                      src="https://www.youtube.com/embed/2nOVMNRSGRQ?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"
                    frameborder="0"></iframe> 

                  </div>
                  <!-- <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/img/features-2.png" alt="" class="img-fluid">
                  </div> -->
                </div>
              </div>

              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Pengukuran</h3>
                    
                    <iframe id="player" type="text/html" width="640" height="390" 
                      src="https://www.youtube.com/embed/TKfOTe0o6Bc?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"
                    frameborder="0"></iframe> 

                  </div>
                  <!-- <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/img/features-2.png" alt="" class="img-fluid">
                  </div> -->
                </div>
              </div>

              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Segitiga dan Jajargenjang</h3>
                    
                    <iframe id="player" type="text/html" width="640" height="390" 
                      src="https://www.youtube.com/embed/S2q5Ombw5r8?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"
                    frameborder="0"></iframe> 

                  </div>
                  <!-- <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/img/features-2.png" alt="" class="img-fluid">
                  </div> -->
                </div>
              </div>

              <div class="tab-pane" id="tab-6">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Bilangan Bulat</h3>
                    
                    <iframe id="player" type="text/html" width="640" height="390" 
                      src="https://www.youtube.com/embed/3iThBSOwyLo?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"
                    frameborder="0"></iframe> 

                  </div>
                  <!-- <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/img/features-2.png" alt="" class="img-fluid">
                  </div> -->
                </div>
              </div>

              <div class="tab-pane" id="tab-7">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Pecahan</h3>
                    
                    <iframe id="player" type="text/html" width="640" height="390" 
                      src="https://www.youtube.com/embed/CuZkrtdplNg?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"
                    frameborder="0"></iframe> 

                  </div>
                  <!-- <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/img/features-2.png" alt="" class="img-fluid">
                  </div> -->
                </div>
              </div>

              <div class="tab-pane" id="tab-8">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Bilangan Romawi</h3>
                    
                    <iframe id="player" type="text/html" width="640" height="390" 
                      src="https://www.youtube.com/embed/wkP9LislsQ0?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"
                    frameborder="0"></iframe> 

                  </div>
                  <!-- <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/img/features-2.png" alt="" class="img-fluid">
                  </div> -->
                </div>
              </div>

              <div class="tab-pane" id="tab-9">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Bangun Ruang dan Bangun Datar</h3>
                    
                    <iframe id="player" type="text/html" width="640" height="390" 
                      src="https://www.youtube.com/embed/3PdB_ty00bI?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"
                    frameborder="0"></iframe> 

                    <iframe id="player" type="text/html" width="640" height="390" 
                      src="https://www.youtube.com/embed/jKZHrgbGmMQ?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"
                    frameborder="0"></iframe> 

                  </div>
                  <!-- <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/img/features-2.png" alt="" class="img-fluid">
                  </div> -->
                </div>
              </div>

              <div class="tab-pane" id="tab-10">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Latihan</h3>
                    
                    <p>1. Diketahui Kubus ABCD.EFGH mempunyai panjang rusuk 8 cm. Hitunglah berapa volumenya?</p>
                    <p>2. Diketahui sebuah kubus memiliki luas 23 cm, maka berapa volume kubus tersebut?</p>
                    <p>3. Angka 24 jika ditulis dalam bilangan romawi menjadi </p>
                    <p>4. Angka romawi C jika di depannya diberi angka romawi X maka bernilai</p>
                  </div>
                  <!-- <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../assets/img/features-2.png" alt="" class="img-fluid">
                  </div> -->
                </div>
              </div>


            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->
    </main>

    <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>IMath</h3>
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
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>


</body>
</html>