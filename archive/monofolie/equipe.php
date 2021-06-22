<!DOCTYPE html>
<!--&copy!-->
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--lien fichier externe!-->
    <!--lien normaux!-->
  	<link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="css/equipe/style.css">
    <!--fin lien normaux!-->
    <!--lien pour tablette!-->
    <link rel="stylesheet" media="screen and (max-width: 1023px)" href="css/tablette/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1023px)" href="css/tablette/index/style.css" />
    <!--fin lien pour tablette!-->
    <!--lin pour telephone!-->
    <link rel="stylesheet" media="screen and (max-width:700px)" href="css/telephone/style.css">
    <link rel="stylesheet" media="screen and (max-width:700px)" href="css/telephone/index/style.css">
    <!--fin lien pour telephone!-->
    <!--lien javascript!-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
     <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <!--fin lien javascript!-->
    <!--fin fichier externe!-->
    <?php // REVIEW: exemple mama ?>
<meta name="Generator" content="Quanta +/Linux Mandriva 2008 ">
<meta name="Keywords" content="Maxime LUCE, maxime luce, Le Max De Culture, lemaxdeculture, le max de culture">
<meta name="description" content="Le Max De Culture a été créé par Maxime LUCE. Ce site vous renouera avec la mathématique, la physique, l'informatique, etc...">
<meta name="Language" content="FR;fr">
<meta name="Date" content="2018">
<meta name="Droits" content="Maxime LUCE">
<?php // REVIEW: fin exemple mama ?>
    <title>MonoFolie</title>
    <link href="image/logo.png" rel="shortcut icon" />

    <meta name="title" content="le-max-de-culture.fr"/>
    <meta name="copyright" content="©LeMaxDeCulture"/>
    <meta name="author" content="Maxime LUCE"/>
  </head>

  <body>
    <header>
      <nav>
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="course_cours.php">Course en cours</a></li>
          <li><a href="equipe.php" class="actif">L'Equipe</a></li>
          <li><a href="projet.php">Le Projet</a></li>
          <li><a href="sponsors.php">Les Sponsors</a></li>
        </ul>
      </nav>
      <div class="contact-info">
       <div class="option">
      <i class="fas fa-envelope"></i>
      <div class="text"><a href="mailto:monofolie.cec@gmail.com;contact@le-max-de-culture.fr" target="_blank" class="blanc">monofolie.cec@gmail.com</a></div>
       </div>

       <div class="option">
      <i class="fab fa-twitter"></i>
      <div class="text"><a href="https://twitter.com/monofolie_cec" target="_blank" class="twitter">@monofolie_cec</a></div>
       </div>

       <div class="option">
      <i class="fab fa-instagram"></i>
      <div class="text"><a href="https://www.instagram.com/monofolie_cec/?hl=fr" target="_blank" class="blanc">monofolie_cec</a></div>
       </div>
      <!--
       <div class="option">
      <i class="fab fa-uniregistry"></i>
      <div class="text"><a href="https://utip.io/" target="_blank" class="blanc">Utip</a></div>
       </div>
      !-->
      </div>
      <div id="fleche_retour_haut">       <a href="#" title="Retour vers le haut de la page"><i class="fas fa-arrow-up"></i></a>
      </div>

</header>
<div id="equipe_centre"> <?php // REVIEW: debut conteneur centre ?>

<div class="portrait">
<div class="cadre"><?php // REVIEW: debut portrait Alexis ?>
  <button id="alexis_button">
    <div class="conteneur_presentation">
      <div> <?php // REVIEW: element 1 ?>
    <div>
    <img src="image/portrait/exemple.svg" alt="">
  </div>
  <div class="presentation_rapide">
    <p class="nom">
    Alexis
  </p>
    <p class="fonction">
    Chef d'équipe
  </p>
  </div>
</div><?php // REVIEW: fin element 1 ?>
<div><?php // REVIEW: element2 ?>
  <div id="alexis" class="presentation_longue"></div>
</div><?php // REVIEW: fin element 2 ?>
</div>
  </button>
</div> <?php // REVIEW: fin portrait Alexis ?>

<div class="cadre"><?php // REVIEW: debut portrait celian ?>
  <button id="celian_button">
    <div class="conteneur_presentation">
      <div> <?php // REVIEW: element 1 ?>
    <div>
    <img src="image/portrait/exemple.svg" alt="">
  </div>
  <div class="presentation_rapide">
    <p class="nom">
    Célian
  </p>
    <p class="fonction">
    Ingénieur de conception
  </p>
  </div>
</div><?php // REVIEW: fin element 1 ?>
<div><?php // REVIEW: element2 ?>
  <div id="celian" class="presentation_longue"></div>
</div><?php // REVIEW: fin element 2 ?>
</div>
  </button>
</div> <?php // REVIEW: fin portrait celian ?>

<div class="cadre"><?php // REVIEW: debut portrait lucas ?>
  <button id="lucas_button">
    <div class="conteneur_presentation">
      <div> <?php // REVIEW: element 1 ?>
    <div>
    <img src="image/portrait/exemple.svg" alt="">
  </div>
  <div class="presentation_rapide">
    <p class="nom">
    Lucas
  </p>
    <p class="fonction">
    Responsable Style/design
  </p>
  </div>
</div><?php // REVIEW: fin element 1 ?>
<div><?php // REVIEW: element2 ?>
  <div id="lucas" class="presentation_longue"></div>
</div><?php // REVIEW: fin element 2 ?>
</div>
  </button>
</div> <?php // REVIEW: fin portrait lucas ?>
</div>

<div class="portrait">

  <div class="cadre"><?php // REVIEW: debut portrait julien ?>
    <button id="julien_button">
      <div class="conteneur_presentation">
        <div> <?php // REVIEW: element 1 ?>
      <div>
      <img src="image/portrait/exemple.svg" alt="">
    </div>
    <div class="presentation_rapide">
      <p class="nom">
      Julien
    </p>
      <p class="fonction">
      Ingénieur de fabrication et essais
    </p>
    </div>
  </div><?php // REVIEW: fin element 1 ?>
  <div><?php // REVIEW: element2 ?>
    <div id="julien" class="presentation_longue"></div>
  </div><?php // REVIEW: fin element 2 ?>
  </div>
    </button>
  </div> <?php // REVIEW: fin portrait julien ?>

  <div class="cadre"><?php // REVIEW: debut portrait guillaume ?>
    <button id="guillaume_button">
      <div class="conteneur_presentation">
        <div> <?php // REVIEW: element 1 ?>
      <div>
      <img src="image/portrait/exemple.svg" alt="">
    </div>
    <div class="presentation_rapide">
      <p class="nom">
      Guillaume
    </p>
      <p class="fonction">
      Ingénieur Systèmes numériques
    </p>
    </div>
  </div><?php // REVIEW: fin element 1 ?>
  <div><?php // REVIEW: element2 ?>
    <div id="guillaume" class="presentation_longue"></div>
  </div><?php // REVIEW: fin element 2 ?>
  </div>
    </button>
  </div> <?php // REVIEW: fin portrait guillaume ?>
</div>
<div class="portrait">
  <div class="cadre"><?php // REVIEW: debut portrait kilian ?>
    <button id="kilian_button">
      <div class="conteneur_presentation">
        <div> <?php // REVIEW: element 1 ?>
      <div>
      <img src="image/portrait/exemple.svg" alt="">
    </div>
    <div class="presentation_rapide">
      <p class="nom">
      Kilian
    </p>
      <p class="fonction">
      Responsable communication/sponsoring
    </p>
    </div>
  </div><?php // REVIEW: fin element 1 ?>
  <div><?php // REVIEW: element2 ?>
    <div id="kilian" class="presentation_longue"></div>
  </div><?php // REVIEW: fin element 2 ?>
  </div>
    </button>
  </div> <?php // REVIEW: fin portrait kilian ?>
</div> <?php // REVIEW: fin conteneur portrait ?>
</div><?php // REVIEW: fin conteneur centre ?>


<?php include('footer.php'); ?>

  <script src="portrait.js" type="text/javascript"></script>

</body>



</html>
