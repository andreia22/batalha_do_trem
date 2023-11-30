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
  <link href="assets/img/favicon2.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Black+And+White+Picture&family=Permanent+Marker&display=swap">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="inclusao.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
        <i class="bi bi-train-front"></i>
        <h1>BatalhaDoTrem</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
            <li><a href="gallery-single.php">Home</a></li>
          <li><a href="gallery.php">Galria 1</a></li>
          <li><a href="gallery_2.php">Galria 2</a></li>
          <li><a href="inclusao.php">Iclusão</a></li>
          <li><a href="inclusao3.php">Iclusão 3</a></li>
          <li><a href="contact.html">Contato</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Inclusão</h2>
            <p>
           
            </p>

            
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-6">
            <img src="./img/img_texto2.png" class="img-fluid"  alt="">

            <p class="py-3">
            “Somos o primeiro coletivo de rap LGBTQIA+ do Brasil, e talvez do mundo”, afirmam em uníssono na entrevista à Vogue. Com essa credencial, os
             cinco – a DJ Apuke saiu do coletivo mês passado – unem a performance às músicas. No lugar de calças oversized, corrente no pescoço e
              tênis demarcas esportivas típicos dos rappers heterossexuais, o quinteto investe na montação, com referências de moda, o que também
               pode ser visto em letras como “ABC do QQ”, parte do novo disco: “Fala mal de mim, sou ref de fã encubada/trajando kit Gucci do brechó 
               da quebrada”. O grupo, que começou criando as próprias produções nos “brechós das quebradas”, como cantam, tiveram recentemente o styling
                de looks assinados pela dupla Membrana, que já vestiu Linn da Quebrada e Ludmilla.
               
                Com 10 faixas compostas pelos seis então integrantes (incluindo Apuke) e produzidas por  Apuke, Comboio Records, Skye e NxName, 
                o disco permeia ritmos brasileiros como o funk e o pagodão baiano, sem deixar o rap, oR&B e o trap de lado. “Este single tem elementos 
                futuristas, mas dialoga com o funk carioca dos anos 2000. E, dentro disso, demos o start no que seria o Holoforte”, conta Guigo, cantor 
                do coletivo, sobre a música “ABC do QQ”, carro-chefe do álbum.
            </p>
          </div>
          
          <div class="col-lg-6 content">
            <h2>Conheça o Quebrada Queer, coletivo de rap LGBTQIA+, que lança primeiro disco ‘Holoforte’
            O coletivo busca pavimentar o caminho para que mais artistas LGBTQIA+ ocupem a</h2>
            <p class="fst-italic py-3">
            Há três anos, cinco jovens de cantos diferentes da periferia de São Paulo se encontraram no mundo real e virtual.
             Entre likes recíprocos nas redes sociais e backstages de shows, os artistas de hip-hop Harlley, Murillo, Guigo, Boombeat
              e Tchelo decidiram unir rimas. Rappers gays e queers, formaram o coletivo Quebrada Queer, um fenômeno musical e cultural
               pioneiro e muito, muito potente.

               A primeira música, com o mesmo nome do grupo, foi feita no formato chamado “cypher”, marca registrada do Quebrada, em que cada rapper entra
                com seus versos. São rimas que denunciam o racismo, a homofobia e outros ataques a minorias. No Spotify, o single contabiliza quase 2,5 milhões
                 de reproduções. Agora, o coletivo se prepara para realizar a turnê do primeiro álbum de estúdio chamado Holoforte, com lançamento previsto para o 
                 dia 28 deste mês.
            </p>

           
            <p class="m-0">
            Depois de quase dois anos de pandemia sem poder fazer shows, o Quebrada pretende, com o novo projeto, retomar o ritmo que viveu em 2019,
             quando também tocou no Rock in Rio e na Parada do Orgulho LGBT de São Paulo. “Este momento marca o que estamos colhendo de tudo o que a
              gente plantou. É o fruto do nosso amadurecimento”, diz a cantora Boombeat. “Nos shows, as pessoas vão conseguir nos perceber como grupo. 
              Vai ser uma experiência muito diferente”, completa o rapper Murillo.

            Em números, hoje o Quebrada acumula mais de 5 milhões de reproduções nas plataformas digitais de música. Uma vitrine e tanto para 
            quebrar paradigmas e abrir caminhos para que a indústria do rap, que é tradicionalmente machista e homofóbica, vire uma cena para 
            nomes LGBTQIA+ . “Sempre existiram artistas LGBTQIA+ fazendo rap, mas essa imagem não chegava às massas. O Quebrada é um recorte de um 
            futuro no presente”, espera Guigo.
            </p>
            
          </div>
         
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
      
    </section><!-- End Testimonials Section -->

       
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
      </div>
      <div class="credits">

       <p>Versão Beta</p>
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
  <script src="assets/js/index.js"></script>

</body>

</html>