<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Loisirs</title>
    <meta name="title" content="Loisirs"/>
    <?php
    include "./assets/partials/head.php"
     ?>

    <link rel="stylesheet" href="./assets/stylesheets/.css">
  </head>
  <body>

    <?php
    include "./assets/partials/header.php"
     ?>
     <section id="title_page">
     <h2>Loisirs</h2>
   </section>

     <section id="global_container">
       <?php
       include "./assets/partials/global_left.php"
        ?>
        <section id="right">
          <p class="title_list">Passions</p>
          <ul>
            <li>Faire de la mathématique</li>
            <li>Faire du tennis</li>
            <li>Développer de nouveaux projets</li>
          </ul>
          <p class="title_list">Loisirs</p>
          <p>Sciences & Autres</p>
          <ul>
            <li>Faire de la mathématique (eh oui, c'est possible !)</li>
            <li>Programmer (des sites Web principalement)</li>
            <li>Réaliser des constructions en bois</li>
            <li>Faire de l'électronique</li>
            <li>Faire de l'Origami</li>
            <li>Bricoler</li>
          </ul>

          <p>Sport</p>
          <ul>
            <li>Tennis</li>
            <li>Vélo</li>
            <li>Musculation</li>
            <li>Tennis de Table/Ping-Pong</li>
            <li>Badminton</li>
            <li>Cirque</li>
            <li>Judo</li>
          </ul>

          <p>Voyages</p>
          <ul>
            <li>Allemagne (2017 et 2019)</li>
            <li>Angleterre (2018)</li>
            <li>Italie (2016)</li>
          </ul>
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
