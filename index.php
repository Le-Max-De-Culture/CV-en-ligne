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
      <div>
        <ul>
          <li><a href="<?= $path ?>assets/media/cv.pdf" target="_blank">CV</a></li>
          <li><a href="<?= $path ?>animation.php">Animation</a></li>
          <li><a href="<?= $path ?>projets.php">Projets</a></li>
          <li><a href="<?= $path ?>blog.php">Blog</a></li>
        </ul>
      </div>
    </header>

    <header id="index_mobile">
      <h1><a href="./index.php">Maxime Luce</a></h1>
      <div class="menu-toggle">
        <nav>
        <ul>
          <li><a href="<?= $path ?>assets/media/cv.pdf" target="_blank">CV</a></li>
          <li><a href="<?= $path ?>animation.php">Animation</a></li>
          <li><a href="<?= $path ?>projets.php">Projets</a></li>
          <li><a href="<?= $path ?>blog.php">Blog</a></li>
        </ul>
      </nav>
        <span class="fas fa-bars" aria-hidden="true"></span>
      </div>
    </header>

<section id="home">
<div>
  <p><span>Maxime LUCE</span></p>
  <p id="presentation">Élève ingénieur à <a href="https://www.ec-lyon.fr/" target="_blank">Centrale Lyon</a>, président de <a href="https://le-max-de-culture.Fr" target="_blank">Le Max De Culture</a></p>
</div>

   </section>
   <section id="about">
     <p class="subtitle">à propos</p>
     <p class="title">Mon parcours en quelques mots</p>

     <div id="about_container">
       <img src="<?= $path ?>assets/media/profil.jpg" alt="">
       <p>
         Actuellement en première année du cursus Ingénieur Généraliste à Centrale Lyon, je suis curieux, passionné, créatif et dynamique.
</p><p>
Attaché à l'idée de partage et de vulgarisation, j'ai fondé <a href="https://le-max-de-culture.fr" target="_blank">Le Max De Culture</a>. Je m'occupe entre autres de la gestion associative, du serveur VPS, du montage vidéo, du planning, de la rédaction et de la communication. C'est une expérience plus qu'enrichissante !
</p>
<p>
Mon but est de pouvoir obtenir mon diplôme d'ingénieur pour exercer un métier qui me plait et pouvoir continuer à développer mes projets divers et variés !</p>
<p>Cette page est destinée à présenter certains de mes projets.</p>
<!--
<p>
texte
       </p>
       !-->
     </div>
</section>

<section id="path">
  <p class="title">Dernières publications</p>
  <div id="container_path">
    <div class="container_category_path">
      [A venir]
    </div>

    <div class="container_category_path">
      [A venir]
    </div>

    <div class="container_category_path">
      [A venir]
    </div>
  </div>
</section>

<?php
include "./assets/partials/footer.php"
 ?>
      <?php
      include "./assets/partials/foot.php"
       ?>

       <script src="./assets/javascript/index.js"></script>
  </body>
</html>
