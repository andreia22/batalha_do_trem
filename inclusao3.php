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
            <img src="./img/img_texto3.png" class="img-fluid"  alt="">
            <p></p>
             <h>Sons pelo Interior</h3>   
            <p class="py-3">
            Participante das oficinas Elas no Beat, a DJ e moradora do município de João Neiva, Lara Pinheiro Nunes, representa o recém-formado
             coletivo Gim, contemplado no Edital 004/2018 - Coletivo Artístico Juvenis, da Secult.  De acordo com Lara, o coletivo está reunindo
              cada vez mais os jovens da cidade em torno do movimento.

        “O nosso Coletivo GIM organiza junto com o apoio da prefeitura e do Edital da Secult uma batalha de MC’s que acontece nos fins de semana, 
        às vezes na pista de skate do centro ou no Museu ferroviário. Lá acontecem duelos de rimas e a apresentação de Break Dance. Eu levo muita 
        coisa que aprendo no curso e acho que preciso dar continuidade. O que me falta agora é um notebook para me aprofundar ainda mais”, ressalta Lara.

        Além da Batalha de MCs, o coletivo também está oferecendo duas oficinas: a de Break dance, que começou no mês de fevereiro e continua 
        até abril, e a de rima, que acontece de março até julho. Os interessados em participar devem comparecer a sede da Secretaria Municipal
         de Cultura de João Neiva, que fica localizada na Avenida Pres. Vargas 157, Centro, próximo ao Banco Sicoob, das 07h às 11h e 12h30 às 
         16h30. 


        Já na Região Norte do Estado, o projeto Aldeia Hip Hop foi um exemplo de mobilização de artistas e de coletivos no ano de 2018 e que 
        hoje gera frutos. A iniciativa já conta com a participação de coletivos provenientes de 5 municípios capixabas: Pedro Canário; Conceição
         da Barra; Montanha, Pinheiros e São Mateus. As atividades contempladas no projeto são: Apresentação de rap, encontro com DJs, palestras,
          oficinas de desenho e pintura (foto), break dance, batalha de b.boys e exibição de documentários.

        Segundo o autor do projeto Arnaldo Cardoso, que é bacharel em Comunicação Social e especialista em Gestão Pública da Cultura, 
        o Edital de Valorização da Cultura Hip Hop da Secult foi fundamental como meio de estímulo para o projeto.  “Estamos em pleno vapor 
        na região Norte e com oficinas gratuitas à população, bem como preparando-se para participar de editais de cultura em 2019. Vamos retomar
         em abril as atividades com aulas de Break dance em Pedro Canário e logo em seguida, haverá as oficinas de capacitação para as crianças e
          adolescentes que vão circular pela região, passando por Montanha, Conceição da Barra, Pinheiros, São Mateus e depois retornando para 
          Pedro Canário”, destaca.
            </p>
          </div>
          
          <div class="col-lg-6 content">
            <h2>Projetos de Hip Hop levam conhecimento, beats e inclusão social</h2>
            <p class="fst-italic py-3">
            Produzir arte valorizando a representatividade social é um desafio cotidiano e as políticas públicas de cultura são ações que
             contribuem para o protagonismo destas expressões na prática. Para fortalecer o movimento da cultura Hip Hop no Espírito Santo,
              a Secretaria de Estado da Cultura (Secult), trabalha por meio de diversas iniciativas, como os Editais da Cultura, incluindo 
              um específico para a linguagem - nº 003/2018 - Valorização da Cultura Hip Hop - e os eventos realizados em seus espaços culturais,
               revelando assim inúmeros projetos todos os anos.

        Para a gerente de Cidadania e Diversidade Cultural da Secult, Karen Valentim, o movimento cresce a cada dia por sua conexão com diversas 
        intervenções urbanas. “Há uma grande importância na valorização desses projetos que colaboram para os encontros entre os elementos que 
        compõe essa cultura. São eles, o DJ, MC, Break dance, Graffiti e como os próprios fazedores dessa cultura urbana dizem, o quinto elemento
         é o conhecimento que reúne todos eles. A partir do Hip Hop, as juventudes circulam pelas cidades, se conectam com outras linguagens e 
         expressões artísticas e culturais. O movimento do Hip Hop ampliaos olhares para suas comunidades e suas necessidades, com isso possibilita
          caminhos para as mudanças dos desafios do cotidiano” frisa Karen.

        Um exemplo de conexão de linguagem e representatividade social é o projeto Elas no Beat, ação contemplada no Edital nº 003/2018. Com o
         intuito de fortalecer a presença de mulheres e do público LGBT no universo da produção musical, foi realizado durante o mês de janeiro 
         no espaço cultural Casa da Barão, no Centro de Vitória, uma série de oficinas gratuitas de conhecimento básico de softwares e programas de edição sonora.

        Nas aulas oferecidas pelos músicos e produtores L.Brau e Leandro Bonfim, as alunas aprenderam a instalar e usar ferramentas digitais 
        para produzir as batidas rítmicas eletrônicas (beats) no rap, além de outros gêneros como reggae e o dub. Segundo Leandro Bonfim, 
        que também é integrante da banda Soltos & Prensados e produtor do selo Fusion Dub Records, a procura foi tanta que foram criadas mais dez
         vagas, além das 20 oferecidas na etapa inicial de inscrições.

        “Percebemos que não havia a presença de mulheres e o público LGBT na produção sonora, portanto, criamos o projeto para quem que não
         possui esse acesso. Como somos negros e sabemos como é difícil ter certos tipos de conhecimento, queríamos compartilhar nossas
          experiências de tantos anos de estudo e trabalho no segmento. E foi um sucesso! Foram mais pessoas do que o esperado, abrimos
           uma turma extra e houve até a procura de pessoas que não moram na Grande Vitória”, destaca Leandro.

    A artista plástica e DJ Thais Apolinário é outro exemplo de como as aulas do projeto puderam expandir tanto a sua experiência em
     apresentações ao vivo, como na pré-elaboração de suas bases eletrônicas nos estilos do dub e do reggae.

    “Foi um mergulho. Nas oficinas aprendi mais sobre programas como o Ableton Live e o Sound Forge, além de me aprofundar 
    no recortar de samplers e os recursos de mixagem. Eu que utilizo uma abordagem digital nas apresentações ao vivo e ao mesmo tempo
     tenho referência de artistas das décadas de 1960 e 1970, como Lee "Scratch" Perry e Mad Professor, comecei a pesquisar como as músicas
      podem se transformar totalmente em diferentes bases, sonoridades e estéticas”, enfatiza Thais.
            </p>

            <h4>Espaços Culturais</h4>
            <p class="m-0">
                
            Entretanto não é somente por meio de editais que existe o estímulo ao movimento Hip Hop. Os espaços culturais da Secult,também
             realizam diversos eventos e parcerias com o objetivo de divulgar a criação artística de jovens no segmento. A Biblioteca Pública
              Estadual (Bpes), por exemplo, já promoveu o Slam ES, campeonato Interescolar de poesia falada, com participação de estudantes de 
              todo o Estado. O Slam é uma prática que defende o direito as rimas por meio de batalhas poéticas e microfonadas.

        Outro evento importante realizado na Bpes foi o lançamento do livro "Rap: A Força da Fala", coletânea que reúne letras e rimas de 
        artista do gênero produzidas entre 1987 e 2010, e que foi organizada pelo artista Fredone Fone com colaboração de L.Brau. A programação
         trouxe para dentro da biblioteca, um sarau aberto, projeções mapeadas do coletivo Pixxfluxx e batalha de MC's do Projeto Boca a Boca.

        Contemplado no Edital nº 003/2018, o Projeto Boca a Boca realiza encontros pela Grande Vitória incluindo em sua programação, batalha de 
        MCS, Freestyle, poesia e apresentação de dança. De acordo com um dos seus coordenadores, Marcéu Rosário Nogueira, é preciso que os projetos 
        tenham mais visibilidade por meio da mídia para que os jovens artistas possam divulgar a arte da cultura urbana de uma maneira mais abrangente.

        “Se a poesia e o graffiti fossem mais divulgados pela mídia as coisas seriam diferentes ao invés de apenas mostrar a violência e o lado 
        ruim das periferias. É necessário que os bons projetos sociais possuam visibilidade e isso é um fator relevante para demonstrar o jovem 
        como protagonista de sua história”, enfatiza Nogueira.

        A Gestora do Edital da Cultura Hip Hop, Rita de Cássia Feitosa Rodrigues, destaca como o movimento hip hop no ES, nos últimos 10 anos,
         cresceu notoriamente com influência das batalhas de Mc's, tornando os jovens negros e de periferias como o centro da cena cultural e 
         gerando oportunidade para que esses se tornem protagonistas de sua própria linguagem.

        “O Hip Hop se torna integrante de lugares onde a classe média ocupava e passa por um momento de processo importante no cenário capixaba.
         Algumas figuras importantes da velha guarda como Sagaz, Pandora, Fredone, Jack da rua, etc, tiveram e continuam tendo, um papel importante 
         de referência para esses jovens. Sem contar os festivais de referência no país como o Origraffes (Original Graffiti Espírito Santo) idealizado
          por Starley Graffiti. O hip-hop toma para si o que sempre foi dele. Ruas, muros, fachadas de loja, outdoor. O lugar do hip-hop no Espírito 
          Santo é onde ele quiser”, destaca Rita.
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