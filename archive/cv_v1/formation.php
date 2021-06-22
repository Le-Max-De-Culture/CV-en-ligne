<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formation</title>
    <meta name="title" content="Formation"/>
    <?php
    include "./assets/partials/head.php"
     ?>

    <link rel="stylesheet" href="<?= $path ?>assets/stylesheets/formation.css">
  </head>
  <body>

    <?php
    include "./assets/partials/header.php"
     ?>
     <section id="title_page">
     <h2>Formation</h2>
   </section>

     <section id="global_container">
       <?php
       include "./assets/partials/global_left.php"
        ?>
        <section id="right">
          <div id="diploma">
            <p>Diplômes :</p>
            <ul>
              <li> <a href="<?= $path ?>assets/cv/diplome_animath_2020_2.pdf" target="_blank">Diplôme Coupe Animath d'Automne 2020 - Accessit</a> </li>
              <li> <a href="<?= $path ?>assets/cv/AttestationLuce_ENS_2020.pdf" target="_blank">Attestation de présence à l’école d’été Maths-Sciences 2020</a> </li>
              <li> <a href="<?= $path ?>assets/cv/diplome_animath_2020.jpg" target="_blank">Diplôme Coupe Animath de Printemps 2020 - Mention très honorable</a> </li>
              <li><span>Certification allemand (2019) :</span> Expression Orale (B1) ; Expression Écrite (B1) ; Compéhension Ecrite (B1) ; Compréhension Orale (A2)</li>
              <li><span>Brevet (2018) :</span> Mention Très bien</li>
    <!--          <li><span>Certification allemande (2018) :</span> Expression Orale (B1) ; Expression Orale (B1) ; Compéhension Ecrite (A2) ; Compréhension Orale (A2)</li>!-->
              <li><span>Code de la route (2020)</span></li>
              <!--<li><span>Attestation de sécurité routière de niveau 2 (ASSR 2) (2018)</span></li>!-->
              <li><span>Brevet de secourisme (PSC 1) (2017)</span></li>
              <!--<li><span>Attestation de sécurité routière de niveau 1 (ASSR 1) (2015)</span></li>!-->
            </ul>
          </div>

          <div class="global_right_container">
            <p class="title">Certificats de réussite de cours</p>
            <p class="date_global_right"><a href="https://openclassrooms.com" target="_blank">OpenClassrooms</a></p>
            <p class="text_global_right">Obtention du certificat de réussite sur le site <a href="https://openclassrooms.com" target="_blank">OpenClassrooms</a> pour les cours suivants :
              <ul>
                <li>Apprenez à créer votre site web avec HTML5 et CSS3</li>
                <li>Concevez votre site web avec PHP et MySQL</li>
                <li>Comprendre les factorisations et développements</li>
                <li>Maîtrisez les fondamentaux d'Excel </li>
              </ul>
            </p>
          </div>

          <div class="global_right_container">
            <p class="title">Lycée</p>
            <p class="date_global_right">2019-2021 - <a href="https://epsylonn.fr/le-lycee-epsylonn/" target="_blank">Epsylonn</a> (Fourchambault)</br>2018-2019 - Centre Scolaire Notre Dame (Nevers)</p>
            <p class="text_global_right"></p>
          </div>


          <div class="global_right_container">
            <p class="title">Collège</p>
            <p class="date_global_right">2015 - 2019 - Collège Roger Martin Du Gard (Sancergues)</p>
          </div>
          <!--
                    <div class="global_right_container">
                      <p class="title">titre de la formation</p>
                      <p class="date_global_right">date de la formation et lieu</p>
                      <p class="text_global_right">Description</p>
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
