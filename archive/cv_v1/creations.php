<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Créations</title>
    <meta name="title" content="Portfolio"/>
    <?php
    include "./assets/partials/head.php"
     ?>

    <link rel="stylesheet" href="./assets/stylesheets/creations.css">
  </head>
  <body>

    <?php
    include "./assets/partials/header.php"
     ?>
     <section id="title_page">
     <h2>Créations</h2>
   </section>

     <section id="global_container">
       <?php
       include "./assets/partials/global_left.php"
        ?>
        <section id="right">
          <div id="portfolio">
            <div class="global_right_container">
              <p class="title_list">Le Max De Culture</p>
              <p>J’apprécie le fait de partager et recevoir des connaissances. C’est en ce sens que j’ai créé « Le Max De Culture », qui est un ensemble de plateformes (site, chaîne YouTube, Serveur Discord) favorisant le partage de savoir. Sur le serveur Discord, nous sommes plus de 900 à échanger nos connaissances. Nous organisons régulièrement des conférences et des exposés pour permettre à tout un chacun de partager son savoir.</p>
              <p>Découvrir le projet :</p>
              <ul>
                <li><a href="https://le-max-de-culture.fr" target="_blank">Le site web</a></li>
                <li><a href="https://discord.com/invite/4VhPeBZ" target="_blank">Le Discord</a></li>
                <li><a href="https://www.youtube.com/channel/UCcUIG4QC68iMr6iEEXVd8MQ" target="_blank">La chaîne YouTube</a></li>
                <li><a href="https://twitter.com/LeMaxDeCulture" target="_blank">Le compte Twitter</a></li>
                <li><a href="https://www.instagram.com/le.max.de.culture/" target="_blank">Le compte Instagram</a></li>
                <li><a href="https://www.facebook.com/Le-Max-De-Culture-112009136970590/?modal=admin_todo_tour" target="_blank">La page Facebook</a></li>
              </ul>
            </div>

            <div class="global_right_container">
          <p class="title_list">Programmation</p>
          <p>Création de Sites & Blogs</p>
          <ul>
            <li><a href="https://le-max-de-culture.fr" target="_blank">Le Max De Culture</a> (mon site Web principal)</li>
            <li><a href="https://parlons-maths.fr/" target="_blank">Site Web de Parlons Maths</a></li>
            <li><a href="https://corentin-luce.com/" target="_blank">CV de Corentin Luce</a></li>
            <li><a href="<?= $path ?>old_projects/" target="_blank">The Last Of Us France [Plus hebergé]</a></li>
            <li>AyBot2 [Plus hebergé]</li>
            <li><a href="<?= $path ?>old_projects/les_petits_princes/index.php" target="_blank">Les Petits Princes (lycée) [Plus utilisé]</a></li>
            <li><a href="<?= $path ?>old_projects/monofolie/index.php" target="_blank">Monofolie (lycée) [Plus utilisé]</a></li>
            <li><a href="<?= $path ?>old_projects/si_notre_dame/index.php" target="_blank">SI (lycée) [Plus utilisé]</a></li>
            <li><a href="<?= $path ?>old_projects/" target="_blank">Classe d'Allemand (lycée) [Plus utilisé]</a></li>
          </ul>

          <p>Programmation d'outils</p>
          <ul>
            <li><a href="https://le-max-de-culture.fr/fr/sieve_eratosthene/" target="_blank">Le Crible d'Ératosthène</a></li>
            <li><a href="https://le-max-de-culture.fr/fr/sequences/" target="_blank">Suites</a></li>
            <li><a href="https://le-max-de-culture.fr/fr/pythagore/" target="_blank">Exercices sur le théorème de Pythagore</a></li>
            <li><a href="https://le-max-de-culture.fr/fr/reciprocal_pythagore/" target="_blank">Exercices sur la réciproque du théorème de Pythagore</a></li>
            <!--<li><a href="" target="_blank"></a></li>!-->
          </ul>
        </div>
        </div>
        <!--
        <div class="container_portfolio">
          <a href="https://www.le-max-de-culture.fr/" target="_blank"><img src="./assets/media/site7.JPG" alt=""></a>
          <a href=""><img src="./assets/media/site1.JPG" alt=""></a>
          <a href=""><img src="./assets/media/site2.JPG" alt=""></a>
        </div>

        <div class="container_portfolio">
          <a href=""><img src="./assets/media/site3.JPG" alt=""></a>
          <a href=""><img src="./assets/media/site5.JPG" alt=""></a>
          <a href=""><img src="./assets/media/site6.JPG" alt=""></a>
        </div>

        <div class="container_portfolio">
          <a href=""><img src="./assets/media/site4.JPG" alt=""></a>
        </div>
        !-->
        </section>
     </section>
<?php
include "./assets/partials/footer.php"
 ?>
      <?php
      include "./assets/partials/foot.php"
       ?>
  </body>
</html>
