<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Compétences</title>
    <meta name="title" content="Compétences"/>
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
     <h2>Compétences</h2>
   </section>

     <section id="global_container">
       <?php
       include "./assets/partials/global_left.php"
        ?>
        <section id="right">
          <p class="title_list">Programmation</p>
          <ul>
            <li>HTML, CSS (bon niveau)</li>
            <li>PHP, MySql (niveau moyen)</li>
            <li>LaTex (niveau moyen)</li>
            <li>Node.js (avec Node Atlas) (niveau faible)</li>
            <li>JavaScript, jQUery, Ajax (niveau faible)</li>
            <li>C++ (débutant)</li>
          </ul>

          <p class="title_list">Langues</p>
          <ul>
            <li>Anglais (B1)</li>
            <li>Allemand (B1)</li>
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
