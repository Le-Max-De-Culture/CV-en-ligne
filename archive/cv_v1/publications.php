<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Publications</title>
    <meta name="title" content="Publications"/>
    <?php
    include "./assets/partials/head.php"
     ?>

    <link rel="stylesheet" href="./assets/stylesheets/portfolio.css">
  </head>
  <body>

    <?php
    include "./assets/partials/header.php"
     ?>
     <section id="title_page">
     <h2>Publications</h2>
   </section>

     <section id="global_container">
       <?php
       include "./assets/partials/global_left.php"
        ?>
        <section id="right">
          <div id="portfolio">
          <p class="title_list">Le problème du jour</p>
          <p>Dans le but de découvrir de nouveaux problèmes et de partager des problèmes concrets de mathématiques, je réalise (avec d'autres parfois) un problème par jour pour <a href="https://le-max-de-culture.fr" target="_blank">Le Max De Culture</a>. Ces derniers sont mis en forme en \(\LaTeX\), ce qui me permet également d'améliorer mes compétences en programmation. Ils sont tous regroupés ici : <a href="https://le-max-de-culture.fr/fr/pb_du_jour" target="_blank">Le Problème du Jour</a>.</p>

          <p class="title_list">Cours de mathématique</p>
          <p>Je suis actuellement en train de rédiger les cours de mathématique de niveau Première et Terminale pour le site <a href="https://le-max-de-culture.fr" target="_blank">Le Max De Culture</a>. Pour voir les cours :</p>
          <ul>
            <li><a href="https://le-max-de-culture.fr/fr/lessons/mathematics/premiere/" target="_blank">Cours de Mathématique de niveau Première</a></li>
            <li><a href="https://le-max-de-culture.fr/fr/lessons/mathematics/terminale/" target="_blank">Cours de Mathématique de niveau Terminale</a></li>
          </ul>
        </section>
     </section>
<?php
include "./assets/partials/footer.php"
 ?>
      <?php
      include "./assets/partials/foot.php"
       ?>
       <script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
     </script>
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
        tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] },

});
</script>
  </body>
</html>
