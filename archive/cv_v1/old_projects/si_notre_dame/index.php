<!DOCTYPE html>
<!--&copy!-->
<html>
  <head>
    <meta charset="utf-8">
    <!--lien fichier externe!-->
    <!--lien normaux!-->
  	<link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/index/style.css">
    <!--fin lien normaux!-->
    <!--lien pour tablette!-->
    <link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/tablette/index.css">
    <link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/tablette/style.css">
    <!--fin lien pour tablette!-->
    <!--lin pour telephone!-->
    <!--fin lien pour telephone!-->
    <!--lien javascript!-->

    <!--fin lien javascript!-->
    <!--fin fichier externe!-->
    <?php // REVIEW: exemple mama ?>
<meta name="Generator" content="Quanta +/Linux Mandriva 2008 ">
<meta name="Keywords" content="notre dame, si, course en cours, sciences, ingénieur, sciences de l'ingénieur, nevers">
<meta name="description" content="Le site de Sciences de l'ingénieur du lycée Notre Dame pour le concours Course en Cours">
<meta name="Language" content="FR;fr">
<meta name="Date" content="2018">
<meta name="Droits" content="Maxime LUCE">
<?php // REVIEW: fin exemple mama ?>
    <title>Sciences de l'Ingénieur Lycée Notre Dame</title>
    <link href="image/logo.jpg" rel="shortcut icon" />

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="title" content="le-max-de-culture.fr"/>
  <!--    <meta name="le-max-de-culture.fr" content=""/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>!-->

    <meta name="copyright" content="©LeMaxDeCulture"/>
    <meta name="author" content="Maxime LUCE"/>

  </head>

  <body>
    <header>
      <nav>
        <div class="nav-logo">
          <a href="image/logo.jpg" title="Voir le logo en grand" target="_blank">
          <img src="image/logo.jpg" alt="Voir le logo en grand">
        </a>
        </div>
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="course_cours.php">Course en cours</a></li>
          <li><a href="equipes.php">Les équipes</a></li>
          <!--<li><a href="contact.php">Contact</a></li>!-->
        </ul>
      </nav>
    </header>

<div class="page_1">
<div class="encadre_presentation">
  <div class="encadre_presentation_taille">
  <div class="ordi">
    <div class="centre_apres_taille">
<section class="avant_cache">
  <div id="bloc"></div>
  <script>

var chaine = "<p>C:\\user\\Lycée_Générale_Technologique\\Notre_Dame> Sciences de l'Ingénieur (SI)</p><p>Bienvenue !</p><p>Vous ne savez pas ce qu'est \"Course en cours\", rendez-vous dans la rubrique <a href=\"course_cours.php\" class=\"page\">\"Course en Cours\"</a></p><p>Pour connaître les équipes du lycée, rendez-vous dans la rubrique <a href=\"equipes.php\" class=\"page\">\"Equipe\"</a></p>";
var nb_car = chaine.length;
var tableau = chaine.split("");
texte = new Array;
var txt = '';
var nb_msg = nb_car - 1;
for (i=0; i<nb_car; i++) {
texte[i] = txt+tableau[i];
var txt = texte[i];
}

actual_texte = 0;
function changeMessage()
{
document.getElementById("bloc").innerHTML = texte[actual_texte];
actual_texte++;

if(actual_texte>=nb_car)
  clearInterval(loop)
}
if(document.getElementById){
var loop = setInterval("changeMessage()",100) //enregistre le intervalID pour l'utiliser dans le clearInterval
};

//if(actual_texte >= texte.length)
  //actual_texte = nb_msg;

//if(actual_texte>nb_car)
  //clearInterval(loop)
//}
//if(document.getElementById){
//var loop = setInterval("changeMessage()",100) //enregistre le intervalID pour l'utiliser dans le clearInterval
//};
/*
bouton = document.getElementById('button_1');
bouton.onclick = function resultat()
{
  document.getElementById('resultat_fonctionnement').innerHTML="<p>resultat</p>"
};
*/


</script>
</section>

<section class="apres_cache">
  <p>Lycée Générale Technologique Notre_Dame</p><p>Sciences de l'Ingénieur (SI)</p><p>Bienvenue !</p><p>Vous ne savez pas ce qu'est "Course en cours", rendez-vous dans la rubrique <a href="course_cours.php" class="page">"Course en Cours"</a></p><p>Pour connaître les équipes du lycée, rendez-vous dans la rubrique <a href="equipes.php" class="page">"Equipe"</a></p>
</section>
</div>
</div>


<?php include('footer.php') ?>

</div>
</div>
</div>


</body>


</html>
