<?php 

session_start();
include('verificar_login.php');


if($_SESSION['cargo_usuario'] != 'Administrador' && $_SESSION['cargo_usuario'] != 'Gerente'){
	header('Location:index.php');
	exit();
}

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BatalhaDoTrem</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Black+And+White+Picture&family=Permanent+Marker&display=swap"
   rel="stylesheet"> 

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center ">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <i class="bi bi-train-front"></i>
        <h1>BatalhaDoTrem</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="gallery-single.php">Home</a></li>
          <li><a href="gallery.php">Galria 1</a></li>
          <li><a href="inclusao.php">Inclusão</a></li>
          <li><a href="contact.html">Contato</a></li>
        </ul>
      </nav><!-- .navbar -->

    <!---->  <div class="header-social-links">
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade" data-aos-delay="1500"> 


  <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Imagens Batalha do trem</h2>
          </div>
        </div>


  <section id="gallery" class="gallery">
      <div class="container-fluid">
        <div class="row gy-4 justify-content-center">

         
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__01.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__01.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__2.jpg" class="img-fluid" alt="Responsive image">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__2jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__3.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__3.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__4.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__4.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__5.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__5.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__6.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery__6jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__7.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__7.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__8.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__8.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__9.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__9.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__10.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__10.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__11.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__11.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__12.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__12.jpg" title="Gallery 14" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__13.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__13.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__14.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__14.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->


          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__15.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__15.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__16.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__16.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__17.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__17jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__18.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__18.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__19.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__19.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__20.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__20.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__21.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__21.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__22.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery__22.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__23.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__23.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__24.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__24.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__25.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__25.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__26.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__26.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__27.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__27.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeria__28.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeria__28.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/galeriaV_1.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/galeriaV_1.jpg" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->


        </div>

      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
       <!-- &copy; Copyright <strong><span>PhotoFolio</span></strong>. All Rights Reserved -->
      </div>
      <div class="credits">
       
       <h4>Versão: Beta</h4> 
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  

</body>

</php>