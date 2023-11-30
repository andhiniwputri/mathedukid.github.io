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

  <title>Worksheets</title>
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
          <li><a href="course.php">Modul Pembelajaran</a></li>
          <li><a href="worksheet.php" class="active">Latihan Soal</a></li>
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
          <h2>Latihan Soal</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Latihan Soal</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".kelas-1">Kelas 1</li>
              <li data-filter=".kelas-2">Kelas 2</li>
              <li data-filter=".kelas-3">Kelas 3</li>
              <li data-filter=".kelas-4">Kelas 4</li>
              <li data-filter=".kelas-5">Kelas 5</li>
              <li data-filter=".kelas-6">Kelas 6</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
        
        <!-- KELAS SATU -->
        <div class="col-lg-4 col-md-6 portfolio-item kelas-1">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 1/grade-1-comparing-numbers-d2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 1</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 1/grade-1-comparing-numbers-d2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-1">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 1/grade-1-geometry-draw-2-d-shapes.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 1</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 1/grade-1-geometry-draw-2-d-shapes.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-1">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 1/grade-1-geometry-match-shapes-to-names.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 1</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 1/grade-1-geometry-match-shapes-to-names.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-1">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 1/grade-1-order-numbers-up-to-30-a.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 1</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 1/grade-1-order-numbers-up-to-30-a.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- KELAS SATU -->

          <!-- KELAS DUA -->

          <div class="col-lg-4 col-md-6 portfolio-item kelas-2">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 2/grade-2-multiplication-meaning-a.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 2</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 2/grade-2-multiplication-meaning-a.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-2">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 2/grade-2-number-chart-skip-counting-by-10-from-1-100-a.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 2</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 2/grade-2-number-chart-skip-counting-by-10-from-1-100-a.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-2">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 2/grade-2-number-chart-skip-counting-by-10-from-10-a.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 2</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 2/grade-2-number-chart-skip-counting-by-10-from-10-a.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-2">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 2/grade-2-subtracting-1-digit-from-2-digit-with-regrouping-a.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 2</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 2/grade-2-subtracting-1-digit-from-2-digit-with-regrouping-a.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- KELAS DUA -->

          <!-- KELAS TIGA -->

          <div class="col-lg-4 col-md-6 portfolio-item kelas-3">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 3/grade-3-elapsed-time-15-minute-increments-a.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 3</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 3/grade-3-elapsed-time-15-minute-increments-a.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-3">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 3/grade-3-elapsed-time-15-minute-increments-f.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 3</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 3/grade-3-elapsed-time-15-minute-increments-f.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-3">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 3/grade-3-metric-units-length-cm-mm-a.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 3</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 3/grade-3-metric-units-length-cm-mm-a.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-3">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 3/grade-3-metric-units-length-cm-mm-f.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 3</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 3/grade-3-metric-units-length-cm-mm-f.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- KELAS TIGA -->

          <!-- KELAS EMPAT -->

          <div class="col-lg-4 col-md-6 portfolio-item kelas-4">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 4/grade-4-add-subtract-multiply-parenthesis-five-numbers-a.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 4</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 3/grade-4-add-subtract-multiply-parenthesis-five-numbers-a.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-4">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 4/grade-4-add-subtract-multiply-parenthesis-five-numbers-e.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 4</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 3/grade-4-add-subtract-multiply-parenthesis-five-numbers-e.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-4">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 4/grade-4-roman-numerals-read-1-399-a.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 4</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 3/grade-4-roman-numerals-read-1-399-a.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-4">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 4/grade-4-roman-numerals-read-1-399-f.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 4</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 3/grade-4-roman-numerals-read-1-399-f.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-4">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 4/grade-4-subtracting-fractions-like-denominators-a.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 4</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 3/grade-4-subtracting-fractions-like-denominators-a.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-4">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 4/grade-4-subtracting-fractions-like-denominators-e.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 4</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 3/grade-4-subtracting-fractions-like-denominators-e.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- KELAS EMPAT -->

          <!-- KELAS LIMA -->

          <div class="col-lg-4 col-md-6 portfolio-item kelas-5">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 5/grade-5-decimals-to-fractions-no-simplify-a.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 5</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 5/grade-5-decimals-to-fractions-no-simplify-a.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-5">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 5/grade-5-decimals-to-fractions-no-simplify-e.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 5</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 5/grade-5-decimals-to-fractions-no-simplify-e.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-5">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 5/grade-5-geometry-rectangular-prism-volume-surface-area-a.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 5</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 5/grade-5-geometry-rectangular-prism-volume-surface-area-a.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-5">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 5/grade-5-geometry-rectangular-prism-volume-surface-area-e.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 5</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 5/grade-5-geometry-rectangular-prism-volume-surface-area-e.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-5">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 5/grade-5-multiplying-decimals-by-10-100-1000-a.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 5</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 5/grade-5-multiplying-decimals-by-10-100-1000-a.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-5">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 5/grade-5-multiplying-decimals-by-10-100-1000-e.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 5</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 5/grade-5-multiplying-decimals-by-10-100-1000-e.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-5">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 5/grade-5-reading-exponents-a.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 5</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 5/grade-5-reading-exponents-a.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- KELAS LIMA -->

          <div class="col-lg-4 col-md-6 portfolio-item kelas-6">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 6/grade-6-circumference-of-circles-b.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 6</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 6/grade-6-circumference-of-circles-b.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-6">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 6/grade-6-exponents-whole-number-base-negative-and-zero-exponents-a.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 6</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 6/grade-6-exponents-whole-number-base-negative-and-zero-exponents-a.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-6">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 6/grade-6-geometry-classify-measure-angles-a.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 6</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 6/grade-6-geometry-classify-measure-angles-a.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item kelas-6">
            <div class="portfolio-wrap">
              <img src="assets/img/worksheets/Gambar PBK/Grade 6/grade-6-integer-subtraction-minus-10-to-plus-10-a.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelas 6</h4>
                <p>Worksheets</p>
                <div class="portfolio-links">
                  <a href="assets/img/worksheets/Gambar PBK/Grade 6/grade-6-integer-subtraction-minus-10-to-plus-10-a.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="IMath"><i class="bx bx-plus"></i></a>
                  <a href="worksheet-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- KELAS ENAM -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

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