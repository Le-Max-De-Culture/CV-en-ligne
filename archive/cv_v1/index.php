<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <title>Maxime Luce</title>

    <meta name="title" content="Maxime Luce"/>

    <?php
    include "./assets/partials/head.php"
     ?>

    <link rel="stylesheet" media="all" href="./assets/stylesheets/index.css">

  </head>
  <body>

    <header id="index">
      <h1><a href="<?= $path ?>index">Maxime Luce</a></h1>
      <div>
        <ul>
          <li><a href="<?= $path ?>experiences">expériences</a></li>
          <li><a href="<?= $path ?>formation">formation</a></li>
          <li><a href="<?= $path ?>parcours">parcours</a></li>
          <li><a href="<?= $path ?>publications">Publications</a></li>
          <li><a href="<?= $path ?>creations">Créations</a></li>
          <!--<li><a href="<?= $path ?>loisirs">loisirs</a></li>!-->
        </ul>
      </div>
    </header>

    <header id="index_mobile">
      <h1><a href="<?= $path ?>index">Maxime Luce</a></h1>
      <div class="menu-toggle">
        <nav>
        <ul>
          <li><a href="<?= $path ?>experiences">expériences</a></li>
          <li><a href="<?= $path ?>formation">formation</a></li>
          <li><a href="<?= $path ?>parcours">parcours</a></li>
          <li><a href="<?= $path ?>publications">Publications</a></li>
          <li><a href="<?= $path ?>creations">Créations</a></li>
          <!--<li><a href="<?= $path ?>loisirs">loisirs</a></li>!-->
        </ul>
      </nav>
        <span class="fas fa-bars" aria-hidden="true"></span>
      </div>
    </header>

<section id="home">
<div>
  <p>Je suis</p>
  <p><span id="changingword">Passionné de Sciences</span></p>
  <p id="presentation">Bienvenue sur mon CV en ligne. Je m'appelle Maxime LUCE et je vous propose d'en savoir un peu plus sur moi...</p>

  <p id="container_link">
    <a href="index.php#about" id="link1">Qui suis-je ?</a>
    <a href="index.php#path" id="link2">Mon parcours</a>
  </p>
</div>

   </section>
   <section id="about">
     <p class="subtitle">à propos</p>
     <p class="title">Qui je suis !</p>

     <div id="about_container">
       <img src="<?= $path ?>assets/media/profil.png" alt="">
       <p>
         Actuellement en terminale au lycée général <a href="https://epsylonn.fr/le-lycee-epsylonn/" target="_blank">Epsylonn</a> où je suis les enseignements de spécialité suivants : Mathématiques et Physique (et Maths Expertes), je suis curieux, passionné, créatif et dynamique.
</p><p>
Attaché à l'idée de partage et de vulgarisation, j'ai fondé <a href="https://le-max-de-culture.fr" target="_blank">Le Max De Culture</a> sur lequel je réalise des cours, du montage, de la gestion, etc. C'est une expérience plus qu'enrichissante !
</p>
<p>
Par le biais de mes cours, mes concours et autres activités, j'essaye de me préparer au mieux pour de possibles études en classes préparatoires scientifiques. Mon rêve est en effet de pouvoir faire de la recherche en mathématique.
</p>
<!--
<p>
texte
       </p>
       !-->
     </div>
</section>

<section id="path">
  <p class="subtitle">En savoir plus sur</p>
  <p class="title">Mon parcours</p>
  <div id="container_path">
    <div class="container_category_path">
      <a href="<?= $path ?>experiences.php">
      <span><span class="fas fa-suitcase fa-3x"></span></span>
      <p class="title_category_path">expériences</p>
    </a>
    <p>Coupes Animath</p>
      <p>Correspondances de Jeunes Mathématicien·ne·s</p>
      <p>Programme Brigitte-Sauzay</p>
    </div>

    <div class="container_category_path">
      <a href="./formation.php">
      <span><span class="fas fa-graduation-cap fa-3x"></span></span>
      <p class="title_category_path">Formation</p>
    </a>
    <p>École d’été Maths-Sciences 2020</p>
    <p>Animath, Mathraining</p>
      <p>Formations via Openclassrooms</p>
    </div>

    <div class="container_category_path">
      <a href="./skills.php">
      <span><span class="fas fa-database fa-3x"></span></span>
      <p class="title_category_path">Compétences</p>
    </a>
    <p>Mathématique</p>
      <p>HTML, CSS, PHP, MySql, LaTex</p>
      <p>Sécurité Informatique</p>
    </div>
  </div>
</section>
<!--
<section id="portfolio">
  <p class="subtitle">quelques unes de mes</p>
  <p class="title">réalisations</p>

  <p id="presentation_portfolio">Découvrez dans mon <a href="./portfolio.php">Portfolio</a> les sites web que j'ai réalisés ainsi que mes autres projets.</p>

  <div class="container_portfolio">
    <a href="https://www.le-max-de-culture.fr/" target="_blank"><img src="./assets/media/site7.JPG" alt=""></a>
    <a href=""><img src="./assets/media/site1.JPG" alt=""></a>
    <a href=""><img src="./assets/media/site2.JPG" alt=""></a>
    <a href=""><img src="./assets/media/site3.JPG" alt=""></a>
  </div>

  <div class="container_portfolio">
    <a href=""><img src="./assets/media/site5.JPG" alt=""></a>
    <a href=""><img src="./assets/media/site6.JPG" alt=""></a>
    <a href=""><img src="./assets/media/site4.JPG" alt=""></a>

  </div>
</section>
!-->

<?php
include "./assets/partials/footer.php"
 ?>
      <?php
      include "./assets/partials/foot.php"
       ?>

       <script src="./assets/javascript/index.js"></script>
  </body>
</html>
