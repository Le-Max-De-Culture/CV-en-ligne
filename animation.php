<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animation</title>
    <meta name="title" content="Animation"/>
    <?php
    include "./assets/partials/head.php"
     ?>

    <link rel="stylesheet" href="./assets/stylesheets/projets.css">
  </head>
  <body>

    <?php
    include "./assets/partials/header.php"
     ?>


     <div id="global_container">
       <section>
        <div class="projet">
          <h3><span>17/04/2021</span> - Pourquoi 1729 est-il appelé ”nombre de Hardy-Ramanujan ?”</h3>
          <div class="conteneur_flex">
            <div><img src="<?= $path ?>assets/media/affiche_florence.png" alt=""></div>
            <p>Réalisation d’un exposé et échange au lycée Victor Hugo Mlf de Florence dans le cadre de la Semaine des Mathématiques</p>
          </div>

        </div>

        <div class="projet">
          <h3><span>08/02/2021</span> - Le nombre de Ramanujan</h3>
          <div class="conteneur_flex">
            <div><iframe src="https://www.youtube.com/embed/zx_t-rIc-BQ?si=WJS53bCVI7S76gXG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
            <p>Participation à une vidéo de la chaîne YouTube Scienticfiz</p>
          </div>
        </div>

    </section>
  </div>
<?php
include "./assets/partials/footer.php"
 ?>
      <?php
      include "./assets/partials/foot.php"
       ?>
  </body>
</html>
