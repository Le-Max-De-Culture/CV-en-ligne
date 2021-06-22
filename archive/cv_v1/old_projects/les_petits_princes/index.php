<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Les Petits Princes</title>
    <link href="image/logo.png" rel="shortcut icon" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script language="javascript">
function plus(){
  code_html = '<a href="'+liens[chiffre]+'" target="_blank"><img border="0" src="'+pictures[chiffre]+'"></a>';
document.getElementById("zone_bannieres").innerHTML = code_html;
	if(chiffre == longueur){
          chiffre = 0;
        }

        else{
          chiffre++;
        }
changement = 1;
//durée d'affichage d'une bannière en secondes
window.setTimeout("plus()", (changement*2000));
}
/* http://www.espacejavascript.com */
pictures = new Array()
pictures[0] = 'image/1.jpg';
pictures[1] = 'image/2.jpg';
pictures[2] = 'image/3.jpg';
pictures[3] = 'image/4.jpg';
pictures[4] = 'image/5.png';
pictures[5] = 'image/6.jpg';
pictures[6] = 'image/7.jpg';

longueur = pictures.length-1;

liens = new Array()
liens[0] = 'image/1.jpg';
liens[1] = 'image/2.jpg';
liens[2] = 'image/3.jpg';
liens[3] = 'image/4.jpg';
liens[4] = 'image/5.png';
liens[5] = 'image/6.jpg';
liens[6] = 'image/7.jpg';
chiffre = 0;
</script>

  </head>
  <body onload="plus()">
    <div class="contact-info">
      <div class="option">
<i class="fas fa-envelope"></i>
<div class="text"><a href="mailto:alagandre17@csndnevers.net;contact@le-max-de-culture.fr" target="_blank" class="blanc">alagandre@csndnevers.net</a></div>
      </div>

      <div class="option">
<i class="fab fa-twitter"></i>
<div class="text"><a href="https://twitter.com/LesPetitsPrinc3" target="_blank" class="twitter">@LesPetitsPrinc3</a></div>
      </div>

      <div class="option">
<i class="fab fa-instagram"></i>
<div class="text"><a href="https://www.instagram.com/lespetitsprinc3/" target="_blank" class="blanc">lespetitsprinc3</a></div>
      </div>

    </div>
    <div class="sidebar" id="sidebar"> <?php // REVIEW: debut menu gauche ?>
        <div class="toggle" onclick="toggle_div()"></div>
        <ul>
          <li><a href="">« Être homme, c’est précisément être responsable. C’est sentir, en posant sa pierre, que l’on contribue à bâtir le monde. » - Antoine de Saint Exupéry</a></li>
          <li><a href="">
            <img src="image/6.jpg" alt="">
          </a></li>
        </ul>
    </div>
    <script type="text/javascript">
      function toggle_div() {
        const element = document.getElementById('sidebar');
        element.classList.toggle('active')
      }
    </script> <?php // REVIEW: din menu gauche ?>

    <div id="fleche_retour_haut"> <?php // REVIEW: debut fleche retour en haut ?>
      <a href="#" title="Retour vers le haut de la page"><i class="fas fa-arrow-up"></i></a>
    </div> <?php // REVIEW: fin fleche retour en haut ?>

<header> <?php // REVIEW: debut du header ?>
  <div id="conteneur_header"> <?php // REVIEW: debut du conteneur du header ?>
    <div class="element_header_1">
      <div id="zone_bannieres"></div>
    </div>
    <div class="element_header_2">
      <img src="image/logo.png" alt="">
    </div>
    <div class="element_header_3">
      <ul>
        <li><a href="#equipe" class="lien_header">Les Petits Princes</a></a></li>
        <li><a href="#concours" class="lien_header">Course en cours</a></li>
        <li><a href="#sponsors" class="lien_header">Les Sponsors</a></li>
      </ul>
    </div>
  </div> <?php // REVIEW: fin du conteneur du header ?>
</header> <?php // REVIEW: fin du header ?>

<div id=""> <?php // REVIEW: debut ancrage page 1 ?>
<div id="page_1"> <?php // REVIEW: debut page 1 ?>
<div id="conteneur_page_1">
  <div class="gauche">
    <p class="citation_gauche">
    «Le véritable enseignement n’est point de te parler mais de te conduire. »</br> - Antoine de Saint Exupéry
  </p><p class="texte_une">
    Cette semaine les petits princes on travailler grâce à l’arduino sur la mise au point d’un jeu de lumière pour une atmosphère similaire à celle du petit princes. Notre ingénieur responsable des système numérique a également commencé l'élaboration d’un code relativement complexe pour la recherche et l’innovation des petits princes.
  </p>
  </div>

  <div class="droite">
Comme on le devine notre équipe crée un univers autour de celui du Petit Prince, personnage du livre Le Petit Prince d’Antoine de Saint Exupéry. A l’occasion du 75<sup>ième</sup> anniversaire de sa mort, c’est aussi un moyen pour nous de rendre hommage à l’écrivain de notre enfance.
  </div>
</div>
</div> <?php // REVIEW: fin page 1 ?>
</div> <?php // REVIEW: fin acrage page 1 ?>

<div id="concours"> <?php // REVIEW: debut ancrage page 2 course en cours?>
  </div> <?php // REVIEW: fin ancrage page 2 course en cours?>
<div id="page_2"> <?php // REVIEW: debut page 2 course en cours?>
  <div id="equipe_centre"> <?php // REVIEW: debut conteneur centre ?>
<img src="image/equipe.jpg" alt="">
<p>
Course En Cours est une compétition liant lycéens, collégiens et professeurs.
Le projet consiste à créer une voiture à l’échelle 1/14ième avec un design futuriste et pensé aérodynamique afin d’être rapide. Ces voitures sont munies d’un moteur identique pour chaque équipe que les organisateurs fournissent ainsi que d’une batterie elle aussi fournie.
Le but est de faire un travail approfondi afin d’avoir un projet solide et le jour de la compétition remporter un maximum de points sur un ensemble de critères.
Pour cela chaque équipe est divisée en rôles propres à chacun, il y a donc un chef d’équipe, un ingénieur conception, un ingénieur essai, un ingénieur design et style, un responsable communication et sponsors ainsi qu’un ingénieur systèmes numériques.
Voici les épreuves que nous devons préparer et qui nous attendent lors de la compétition :
</p><p>
-La conformité : C’est l’épreuve fatale, ici un jury vérifie que notre “bolide” est aux normes, c’est à dire aux bonnes dimensions ainsi qu’à la bonne masse, il faut avoir été précis lors de la conception et des essais car cette épreuve est éliminatoire!
</p>
-La soutenance : Il s’agit là de présenter à l’oral l’intégralité de notre projet en 8 minutes max dont une minute de présentation en anglais pour chacun, tous les membres de l’équipe doivent expliquer clairement -avec un certain degré de détail-  leur travail au sein du groupe. L’ingénieur conception à une très grande importance lors de cette épreuve!
</p><p>
-Evaluation du stand : Un certains nombres de critères sont pris en compte dans cette épreuve comme l’identité d’équipe, le portfolio, l’aspect environnementale de notre travail ainsi que le détail des recettes et dépenses de l’équipe
</p><p>
-Epreuves sur piste : Il s’agit là d’une épreuve complète et complexe  constituée de  3  critères et sous-épreuve qui sont :
-le temps de courses → doit être le plus petit possible
-le temps de réaction → temps que met le “déclencheur” de la voiture a appuyer sur le bouton de démarrage après l’extinction des lumières de départ.
-arrêt au stand → programmer la voiture pour qu’elle s’arrête sur la piste dans une zone définie par le jury.
</p>
</div> <?php // REVIEW: fin page 2 course en cours?>
</div> <?php // REVIEW: fin conteneur centre ?>


<div id="equipe"> <?php // REVIEW: debut ancrage page 3 equipe les petits princes?>
<div id="page_3"> <?php // REVIEW: debut page 3 equipe les petits princes?>
<div id="equipe_centre"> <?php // REVIEW: debut conteneur centre ?>

<div class="portrait">
<div class="cadre"><?php // REVIEW: debut portrait Alwena ?>
  <button id="alwena_button">
    <div class="conteneur_presentation">
      <div> <?php // REVIEW: element 1 ?>
    <div>
    <img src="image/persos/1.jpg" alt="">
  </div>
  <div class="presentation_rapide">
    <p class="nom">
    Alwena
  </p>
    <p class="fonction">
    Chef d'équipe
  </p>
  </div>
</div><?php // REVIEW: fin element 1 ?>
<div><?php // REVIEW: element2 ?>
  <div id="alwena" class="presentation_longue"></div>
</div><?php // REVIEW: fin element 2 ?>
</div>
  </button>
</div> <?php // REVIEW: fin portrait Alwena ?>

<div class="cadre"><?php // REVIEW: debut portrait alexis ?>
  <button id="alexis_button">
    <div class="conteneur_presentation">
      <div> <?php // REVIEW: element 1 ?>
    <div>
    <img src="image/persos/2.jpeg" alt="">
  </div>
  <div class="presentation_rapide">
    <p class="nom">
    Alexis
  </p>
    <p class="fonction">
    Ingénieur essai
  </p>
  </div>
</div><?php // REVIEW: fin element 1 ?>
<div><?php // REVIEW: element2 ?>
  <div id="alexis" class="presentation_longue"></div>
</div><?php // REVIEW: fin element 2 ?>
</div>
  </button>
</div> <?php // REVIEW: fin portrait alexis ?>

<div class="cadre"><?php // REVIEW: debut portrait aurelien ?>
  <button id="aurelien_button">
    <div class="conteneur_presentation">
      <div> <?php // REVIEW: element 1 ?>
    <div>
    <img src="image/persos/3.jpg" alt="">
  </div>
  <div class="presentation_rapide">
    <p class="nom">
    Aurélien
  </p>
    <p class="fonction">
    Ingénieur systèmes numériques
  </p>
  </div>
</div><?php // REVIEW: fin element 1 ?>
<div><?php // REVIEW: element2 ?>
  <div id="aurelien" class="presentation_longue"></div>
</div><?php // REVIEW: fin element 2 ?>
</div>
  </button>
</div> <?php // REVIEW: fin portrait aurelien ?>
</div>

<div class="portrait">

  <div class="cadre"><?php // REVIEW: debut portrait SULLYVAN ?>
    <button id="sullyvan_button">
      <div class="conteneur_presentation">
        <div> <?php // REVIEW: element 1 ?>
      <div>
      <img src="image/persos/4.jpg" alt="">
    </div>
    <div class="presentation_rapide">
      <p class="nom">
      Sullyvan
    </p>
      <p class="fonction">
      Ingénieur Design
    </p>
    </div>
  </div><?php // REVIEW: fin element 1 ?>
  <div><?php // REVIEW: element2 ?>
    <div id="sullyvan" class="presentation_longue"></div>
  </div><?php // REVIEW: fin element 2 ?>
  </div>
    </button>
  </div> <?php // REVIEW: fin portrait SULLYVAN ?>

  <div class="cadre"><?php // REVIEW: debut portrait thomas ?>
    <button id="thomas_button">
      <div class="conteneur_presentation">
        <div> <?php // REVIEW: element 1 ?>
      <div>
      <img src="image/persos/5.jpg" alt="">
    </div>
    <div class="presentation_rapide">
      <p class="nom">
      Thomas
    </p>
      <p class="fonction">
      Ingénieur conception
    </p>
    </div>
  </div><?php // REVIEW: fin element 1 ?>
  <div><?php // REVIEW: element2 ?>
    <div id="thomas" class="presentation_longue"></div>
  </div><?php // REVIEW: fin element 2 ?>
  </div>
    </button>
  </div> <?php // REVIEW: fin portrait thomas ?>
</div>
<div class="portrait">
  <div class="cadre"><?php // REVIEW: debut portrait tom ?>
    <button id="tom_button">
      <div class="conteneur_presentation">
        <div> <?php // REVIEW: element 1 ?>
      <div>
      <img src="image/persos/6.jpg" alt="">
    </div>
    <div class="presentation_rapide">
      <p class="nom">
      Tom
    </p>
      <p class="fonction">
      Responsable Sponsoring & Communication
    </p>
    </div>
  </div><?php // REVIEW: fin element 1 ?>
  <div><?php // REVIEW: element2 ?>
    <div id="tom" class="presentation_longue"></div>
  </div><?php // REVIEW: fin element 2 ?>
  </div>
    </button>
  </div> <?php // REVIEW: fin portrait tom ?>
</div> <?php // REVIEW: fin conteneur portrait ?>
</div><?php // REVIEW: fin conteneur centre ?>
</div> <?php // REVIEW: fin page 3 equipe les petits princes?>
</div> <?php // REVIEW: fin ancrage page 3 equipe les petits princes?>

<div id="sponsors"> <?php // REVIEW: debut ancrage page 4 sponsors?>
<div id="page_4"> <?php // REVIEW: debut page 4 sponsors?>
[EN COURS DE CONSTRUCTION]
</div> <?php // REVIEW: fin page 4 sponsors?>
</div> <?php // REVIEW: fin ancrage page 4 sponsors?>

<?php include('footer.php') ?>

<script>
// REVIEW: DEBUT DU 1
bouton1 = document.getElementById('actu1');
bouton1.onclick = function resultat1()
{
document.getElementById('actus1').innerHTML="<?php
$monfichier = fopen('compteur.txt', 'r+');

$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues

fclose($monfichier);
?>"
};
// REVIEW: FIN DU 1
</script>
  </body>
  <script src="portrait.js" type="text/javascript"></script>

</html>
