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
          <li><a href="gallery_2.php">Galria 2</a></li>
          <li><a href="inclusao.php">Inclusão</a></li>
          <li><a href="contact.html">Contato</a></li>
        </ul>
      </nav><!-- .navbar -->

    <!---->  <div class="header-social-links">
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->



 <main id="main" data-aos="fade" data-aos-delay="1500"> 

    <!-- ======= End Page Header -->
    
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>HIP-HOP NACIONAL</h2>
          </div>
        </div>
      
    <!--  End Page Header -->

    <!-- ======= Gallery Single Section ======= -->

    
    <section id="gallery-single" class="gallery-single">
      
      <div class="container">
        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">


              <div class="swiper-slide">
                <img src="assets/img/gallery/1.png" alt="">
                <div class="overlay">
                  <h1>r</h1>
                  <h1></h1>
              
                  <a class="cta-btn" id="button1"  href="contact.html">Conheça a História da Batalha </a>
              </div>
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gallery/2.png" alt="">
                <div class="overlay">
                  <h1></h1>
                  
                  <h1></h1>
          
                  <a class="cta-btn" id="button2" href="contact.html">Acesse o guia</a>
              </div>
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gallery/3.png" alt="">
                <div class="overlay">
                  <h1></h1>
                  <h1></h1>
          
                  <a class="cta-btn" id="button3" href="contact.html">Musica e clips dos MCS do trem</a>
              </div>
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gallery/4.png" alt="">
                <div class="overlay">
                  <h1></h1>
                  <h1></h1>
          
                  <a class="cta-btn" id="button4" href="contact.html">Conheça nossas politicas de inclusão</a>
              </div>
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gallery/5.png" alt="">
                <div class="overlay">
                  <h1></h1>
                  <h1></h1>
          
                  <a class="cta-btn" id="button5"  href="contact.html">Galeria de fotos</a>  
              </div>
              </div>

              <div class="swiper-slide">
                <img src="assets/img/gallery/6.png" alt="">
                <div class="overlay">
                  <h1></h1>
                  <h1></h1>
                  <a class="cta-btn" id="button6" href="contact.html">Acesse o dossiê</a>
              </div>
              </div>

             
            </div>            
           <!-- <div class="swiper-pagination"></div> -->
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <h1>Batalha do trem no interior</h1>
          <h1>Guia pratico de como fazer batalha de rap no sertão.</h1>
         
        </div>

      

    </section><!-- End Gallery Single Section -->

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

  <script>
  

</body>

</html>