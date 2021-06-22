<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Les Petits Princes</title>
    <link href="image/logo.png" rel="shortcut icon" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
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

      <div class="option">
<i class="fab fa-uniregistry"></i>
<div class="text"><a href="https://utip.io/" target="_blank" class="blanc">Utip</a></div>
      </div>

    </div>
    <div class="sidebar" id="sidebar"> <?php // REVIEW: debut menu gauche ?>
        <div class="toggle" onclick="toggle_div()"></div>
        <ul>
          <li><a href="">«Le véritable enseignement n’est point de te parler mais de te conduire. » -Antoine de Saint Exupéry</a></li>
          <li><a href="">« Être homme, c’est précisément être responsable. C’est sentir, en posant sa pierre, que l’on contribue à bâtir le monde. » -Antoine de Saint Exupéry</a></li>
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
    A la une
  </div>

  <div class="droite">
Le projet
  </div>
</div>
</div> <?php // REVIEW: fin page 1 ?>
</div> <?php // REVIEW: fin acrage page 1 ?>

<div id="concours"> <?php // REVIEW: debut ancrage page 2 course en cours?>
<div id="page_2"> <?php // REVIEW: debut page 2 course en cours?>
<img src="image/equipe.jpg" alt="">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sapien eros, suscipit at tempus id, semper et tortor. Duis odio tellus, dictum sed eros nec, tincidunt semper elit. Nullam suscipit libero in orci egestas, non finibus ex lacinia. Vestibulum sagittis feugiat ante nec ullamcorper. Praesent porta nisl in faucibus dignissim. Donec tristique mauris ac ipsum cursus consequat. Nam lobortis, erat ut aliquet vulputate, enim odio rhoncus velit, in sollicitudin ipsum ligula at risus. Morbi metus nisl, accumsan sed mattis eu, rhoncus ac velit. Maecenas dignissim in mauris vel imperdiet. Praesent blandit, mi lobortis egestas facilisis, tellus dolor ornare enim, eget placerat lectus quam sed ipsum. Vivamus malesuada iaculis tincidunt. Cras semper quis mi et viverra. Aenean congue vel nunc in fermentum. Nulla sagittis hendrerit malesuada.

Mauris suscipit, dolor in fringilla elementum, eros mauris tempus sapien, id vehicula lectus est sed nunc. Morbi ut nunc elit. In vel lectus sed urna fringilla rhoncus ac eu nisi. Vestibulum pulvinar ultricies interdum. Sed convallis dui vitae accumsan varius. Pellentesque sagittis diam nec nisl convallis sagittis. Nullam scelerisque nisl et risus pharetra, feugiat lacinia felis scelerisque. Donec eu est vestibulum, faucibus lectus at, tincidunt ligula. Fusce tristique velit est, at ultrices tortor egestas in.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sapien eros, suscipit at tempus id, semper et tortor. Duis odio tellus, dictum sed eros nec, tincidunt semper elit. Nullam suscipit libero in orci egestas, non finibus ex lacinia. Vestibulum sagittis feugiat ante nec ullamcorper. Praesent porta nisl in faucibus dignissim. Donec tristique mauris ac ipsum cursus consequat. Nam lobortis, erat ut aliquet vulputate, enim odio rhoncus velit, in sollicitudin ipsum ligula at risus. Morbi metus nisl, accumsan sed mattis eu, rhoncus ac velit. Maecenas dignissim in mauris vel imperdiet. Praesent blandit, mi lobortis egestas facilisis, tellus dolor ornare enim, eget placerat lectus quam sed ipsum. Vivamus malesuada iaculis tincidunt. Cras semper quis mi et viverra. Aenean congue vel nunc in fermentum. Nulla sagittis hendrerit malesuada.

Mauris suscipit, dolor in fringilla elementum, eros mauris tempus sapien, id vehicula lectus est sed nunc. Morbi ut nunc elit. In vel lectus sed urna fringilla rhoncus ac eu nisi. Vestibulum pulvinar ultricies interdum. Sed convallis dui vitae accumsan varius. Pellentesque sagittis diam nec nisl convallis sagittis. Nullam scelerisque nisl et risus pharetra, feugiat lacinia felis scelerisque. Donec eu est vestibulum, faucibus lectus at, tincidunt ligula. Fusce tristique velit est, at ultrices tortor egestas in.
</div> <?php // REVIEW: fin page 2 course en cours?>
</div> <?php // REVIEW: fin ancrage page 2 course en cours?>

<div id="equipe"> <?php // REVIEW: debut ancrage page 3 equipe les petits princes?>
<div id="page_3"> <?php // REVIEW: debut page 3 equipe les petits princes?>

<div class="portrait">
<div class="cadre"><?php // REVIEW: debut portrait Alwena ?>
  <!-- REVIEW: DEBUT ACTUALITE N°2 -->
  <button id="actu2">
    <div>
    <img src="image/portrait/exemple.png" alt="">
  </div>
  <div class="presentation_rapide">
    <p class="nom">
    Alwena
  </p>
    <p class="fonction">
    Chef d'équipe
  </p>
  </div>
  <div id="actus2" class="actus"></div>
  </button>
  <!-- REVIEW: FIN DE L'ACTUALITE N°2 -->
</div> <?php // REVIEW: fin portrait Alwena ?>

<div class="cadre"> <?php // REVIEW: debut portrait Alexis ?>
  <div>
  <img src="image/portrait/exemple.png" alt="">
</div>
<div class="presentation_rapide">
  <p class="nom">
  Alexis
</p>
  <p class="fonction">
  Ingénieur essai
</p>
</div>
</div> <?php // REVIEW: fin portrait Alexis ?>

<div class="cadre"> <?php // REVIEW: debut portrait Aurélien ?>
  <div>
  <img src="image/portrait/exemple.png" alt="">
</div>
<div class="presentation_rapide">
  <p class="nom">
  Aurélien
</p>
  <p class="fonction">
  Ingénieur systèmes numériques
</p>
</div>
</div> <?php // REVIEW: fin portrait Aurélien ?>
</div>
<div class="portrait">
<div class="cadre"> <?php // REVIEW: debut portrait Sullyvan ?>
  <div>
  <img src="image/portrait/exemple.png" alt="">
</div>
<div class="presentation_rapide">
  <p class="nom">
  Sullyvan
</p>
  <p class="fonction">
  Ingénieur Design
</p>
</div>
</div> <?php // REVIEW: fin portrait Sullyvan ?>

<div class="cadre"> <?php // REVIEW: debut portrait Thomas ?>
  <div>
  <img src="image/portrait/exemple.png" alt="">
</div>
<div class="presentation_rapide">
  <p class="nom">
  Thomas
</p>
  <p class="fonction">
  Ingénieur conception
</p>
</div>
</div> <?php // REVIEW: fin portrait Thomas ?>
</div>
<div class="portrait">
<div class="cadre"> <?php // REVIEW: debut portrait Tom ?>
  <div>
  <img src="image/portrait/exemple.png" alt="">
</div>
<div class="presentation_rapide">
  <p class="nom">
  Tom
</p>
  <p class="fonction">
  Responsable Sponsoring & Communication
</p>
</div>
</div> <?php // REVIEW: fin portrait Tom ?>
</div> <?php // REVIEW: fin conteneur portrait ?>
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
